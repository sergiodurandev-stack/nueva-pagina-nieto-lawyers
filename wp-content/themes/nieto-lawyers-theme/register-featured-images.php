<?php
/**
 * Script para registrar attachments (featured images) y mapear _thumbnail_id
 * desde la BD original (nieto-lawyers.local:10053) hacia la nueva BD.
 *
 * ⚠️ SEGURIDAD: Este script solo debe ejecutarse UNA VEZ y luego eliminarse.
 * Para ejecutarlo: accede vía web a /wp-content/themes/nieto-lawyers-theme/register-featured-images.php?key=NL_MIGRA_THUMBS_2025
 * 
 * Pre-requisitos:
 * - La BD original debe estar accesible en MySQL port 10053
 * - Los archivos de uploads deben estar copiados en /uploads/
 * - Las tablas en la BD original usan prefijo wp_
 */

// --- Seguridad: solo ejecutar con key correcta ---
if (!isset($_GET['key']) || $_GET['key'] !== 'NL_MIGRA_THUMBS_2025') {
    die('Acceso denegado.');
}

// --- Boot WordPress ---
require_once dirname(__FILE__, 4) . '/wp-load.php';

// --- Config ---
$original_db = [
    'host'     => 'localhost:10053',
    'user'     => 'root',
    'password' => 'root',
    'name'     => 'local',
    'prefix'   => 'wp_',
];

$new_prefix = $GLOBALS['wpdb']->prefix; // wp_ o wpeu_

echo '<pre>';
echo "=== Registro de Featured Images ===\n\n";
echo "New DB prefix: {$new_prefix}\n";
echo "New uploads dir: " . wp_upload_dir()['basedir'] . "\n\n";

// --- Conectar a BD original ---
$orig = new mysqli(
    $original_db['host'],
    $original_db['user'],
    $original_db['password'],
    $original_db['name']
);

if ($orig->connect_error) {
    die("ERROR conectando a BD original: " . $orig->connect_error . "\n");
}
echo "✅ Conectado a BD original (port 10053)\n\n";

// --- Obtener todos los _thumbnail_id de la BD original ---
$thumb_query = "SELECT post_id, meta_value FROM {$original_db['prefix']}postmeta WHERE meta_key = '_thumbnail_id'";
$thumb_result = $orig->query($thumb_query);

if (!$thumb_result) {
    die("ERROR query _thumbnail_id: " . $orig->error . "\n");
}

$thumbnails = [];
while ($row = $thumb_result->fetch_assoc()) {
    $thumbnails[(int)$row['post_id']] = (int)$row['meta_value'];
}

echo "Total _thumbnail_id en original: " . count($thumbnails) . "\n\n";

if (empty($thumbnails)) {
    die("No hay _thumbnail_id para migrar.\n");
}

// --- Obtener todos los attachment posts de la BD original ---
$attachment_ids = array_unique(array_values($thumbnails));
$ids_str = implode(',', $attachment_ids);

$attach_query = "SELECT ID, post_title, post_excerpt, post_content, post_mime_type, guid 
                 FROM {$original_db['prefix']}posts 
                 WHERE ID IN ({$ids_str}) AND post_type = 'attachment'";
$attach_result = $orig->query($attach_query);

$attachments = [];
while ($row = $attach_result->fetch_assoc()) {
    $attachments[(int)$row['ID']] = $row;
}

echo "Attachments encontrados en original: " . count($attachments) . "\n\n";

// --- Mapear post_ids originales -> nuevos ---
// Tabla temporal: guardamos correlación post_id original -> nuevo
echo "Obteniendo correlación de posts migrados...\n";

// Primero, intentamos hacer match por post_name (slug) entre original y nuevo
$orig_posts_query = "SELECT ID, post_name, post_type FROM {$original_db['prefix']}posts WHERE post_status = 'publish' AND post_type != 'attachment' AND post_type != 'revision'";
$orig_posts_result = $orig->query($orig_posts_query);

$orig_posts = [];
while ($row = $orig_posts_result->fetch_assoc()) {
    $orig_posts[(int)$row['ID']] = $row;
}

// Obtener posts nuevos
$new_posts_query = "SELECT ID, post_name, post_type FROM {$new_prefix}posts WHERE post_status = 'publish' AND post_type != 'attachment' AND post_type != 'revision'";
$new_posts_result = $GLOBALS['wpdb']->get_results($new_posts_query);

$new_posts_by_name = [];
foreach ($new_posts_result as $row) {
    $new_posts_by_name[$row->post_name] = $row;
}

// Construir mapa original_id -> new_id
$post_id_map = [];
foreach ($orig_posts as $orig_id => $orig_post) {
    $name = $orig_post['post_name'];
    if (isset($new_posts_by_name[$name])) {
        $post_id_map[$orig_id] = (int)$new_posts_by_name[$name]->ID;
    }
}

echo "Posts mapeados: " . count($post_id_map) . " de " . count($orig_posts) . " originales\n\n";

// --- Procesar cada thumbnail ---
$upload_dir = wp_upload_dir()['basedir'];
$created = 0;
$skipped = 0;
$errors = 0;
$updated = 0;

foreach ($thumbnails as $orig_post_id => $orig_attachment_id) {
    // Verificar si el post original está mapeado
    if (!isset($post_id_map[$orig_post_id])) {
        echo "  ⏭️ Post original {$orig_post_id} no mapeado (slug diferente)\n";
        $skipped++;
        continue;
    }
    
    $new_post_id = $post_id_map[$orig_post_id];
    
    // Verificar si el nuevo post ya tiene _thumbnail_id
    $existing_thumb = get_post_thumbnail_id($new_post_id);
    if ($existing_thumb) {
        echo "  ✅ Post {$new_post_id} ya tiene thumbnail: {$existing_thumb}\n";
        $skipped++;
        continue;
    }
    
    // Verificar si el attachment existe en original
    if (!isset($attachments[$orig_attachment_id])) {
        echo "  ⚠️ Attachment {$orig_attachment_id} no encontrado en original\n";
        $errors++;
        continue;
    }
    
    $attach = $attachments[$orig_attachment_id];
    
    // Extraer la ruta del archivo desde guid
    // guid típico: http://nieto-lawyers.local/wp-content/uploads/2023/09/archivo.jpg
    $parsed_url = parse_url($attach['guid']);
    $file_path = '';
    if ($parsed_url && isset($parsed_url['path'])) {
        // Obtener la parte relativa a uploads
        $path_parts = explode('/wp-content/uploads/', $parsed_url['path']);
        if (isset($path_parts[1])) {
            $relative_path = $path_parts[1];
            $file_path = $upload_dir . '/' . $relative_path;
        }
    }
    
    if (!$file_path || !file_exists($file_path)) {
        echo "  ⚠️ Archivo no encontrado: {$file_path}\n";
        $errors++;
        continue;
    }
    
    // --- Crear attachment en la nueva BD ---
    $file_info = wp_check_filetype(basename($file_path));
    
    $attachment_data = [
        'guid'           => $file_path,
        'post_mime_type' => $file_info['type'] ?: $attach['post_mime_type'],
        'post_title'     => $attach['post_title'] ?: preg_replace('/\.[^.]+$/', '', basename($file_path)),
        'post_content'   => $attach['post_content'],
        'post_excerpt'   => $attach['post_excerpt'],
        'post_status'    => 'inherit',
    ];
    
    $new_attachment_id = wp_insert_attachment($attachment_data, $file_path, $new_post_id);
    
    if (is_wp_error($new_attachment_id)) {
        echo "  ❌ Error insertando attachment: " . $new_attachment_id->get_error_message() . "\n";
        $errors++;
        continue;
    }
    
    // Generar metadata del attachment (thumbnails)
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $attach_data = wp_generate_attachment_metadata($new_attachment_id, $file_path);
    wp_update_attachment_metadata($new_attachment_id, $attach_data);
    
    // Asignar como featured image
    $result = set_post_thumbnail($new_post_id, $new_attachment_id);
    
    if ($result) {
        echo "  ✅ Post {$new_post_id} ← thumbnail {$new_attachment_id} ({$attach['post_title']})\n";
        $created++;
        $updated++;
    } else {
        echo "  ❌ Error asignando thumbnail a post {$new_post_id}\n";
        $errors++;
    }
}

echo "\n\n=== RESUMEN ===\n";
echo "Total _thumbnail_id originales: " . count($thumbnails) . "\n";
echo "Creados: {$created}\n";
echo "Saltados: {$skipped}\n";
echo("Errores: {$errors}\n");
echo "Posts actualizados: {$updated}\n";

$orig->close();

echo "\n✅ Proceso completado.\n";
echo '</pre>';
