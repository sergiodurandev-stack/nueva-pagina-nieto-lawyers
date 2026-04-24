<?php
/**
 * Script para registrar featured images en el SERVIDOR REMOTO.
 * 
 * Tiene incorporados los datos de mapeo (post_slug → archivo de imagen)
 * obtenidos del script original ejecutado localmente.
 *
 * ⚠️ SEGURIDAD: Este script solo debe ejecutarse UNA VEZ y luego eliminarse.
 * Para ejecutarlo: accede vía web a:
 *   /wp-content/themes/nieto-lawyers-theme/register-featured-images-remote.php?key=NL_MIGRA_THUMBS_REMOTE_2025
 */

// --- Seguridad: solo ejecutar con key correcta ---
if (!isset($_GET['key']) || $_GET['key'] !== 'NL_MIGRA_THUMBS_REMOTE_2025') {
    die('Acceso denegado.');
}

// --- Boot WordPress ---
require_once dirname(__FILE__, 4) . '/wp-load.php';

echo '<pre>';
echo "=== Registro de Featured Images — REMOTO ===\n\n";
echo "Prefijo DB: " . $GLOBALS['wpdb']->prefix . "\n";
echo "Uploads dir: " . wp_upload_dir()['basedir'] . "\n\n";

// --- Datos de mapeo: post_slug → ruta relativa del archivo de imagen ---
// Generado desde la ejecución local del script original.
$thumbnail_data = [
    'tecnologia-datos-y-transformacion-digital' => '2023/08/Tecnologia-datos-y-transformacion-digital-1.png',
    'inversion-extranjera-y-negocios-internacionales' => '2023/08/WhatsApp-Image-2024-09-30-at-16.24.28_21f96996.jpg',
    'regulatorio-y-sanitario' => '2023/08/Regulatorio-y-Sanitario-1.png',
    'corporativo' => '2023/08/WhatsApp-Image-2024-09-30-at-16.22.21_a725409e.jpg',
    'impuestos-aduanero-y-comercio-exterior' => '2023/08/impuestos-aduaneros.png',
    'medicina-y-ciencias-de-la-salud' => '2023/08/medicina-y-ciencias-de-la-salud-1.png',
    'competencia-y-proteccion-al-consumidor' => '2023/08/WhatsApp-Image-2024-10-21-at-8.20.33-AM.jpeg',
    'compliance' => '2023/08/compliance.png',
    'litigios-y-arbitraje' => '2023/08/litigios-y-arbitraje.png',
    'contratacion-estatal' => '2023/08/WhatsApp-Image-2024-09-30-at-16.19.04_a4f7826c.jpg',
    'propiedad-intelectual' => '2023/08/WhatsApp-Image-2024-09-30-at-16.28.41_546857f3.jpg',
    'inmobiliario' => '2023/08/WhatsApp-Image-2024-09-30-at-16.22.42_312d91031.png',
    'pro-bono' => '2023/08/Pro-Bono.png',
    'parametros-de-presentacion-de-informes-y-creacion-informe-75' => '2024/03/75.jpg',
    'impuestos-saludables' => '2024/03/LAUD-IMPUESTO-SALUDABLE-EL-NORTE.jpeg',
    'expendio-venta-compra-consumo-y-uso-de-vapeadores-y-cigarrillos-electronicos-en-menores-de-edad' => '2024/03/tipos-de-vapes-tipos-devapeadores-mr-vapes-mexico-pichi_1024x1024.webp',
    'analisis-de-la-sic-integraciones-empresariales' => '2024/04/integracion-empresarial.jpg',
    'sociedades-offshore-paises-extranjeros-con-ordenamientos-beneficiosos-para-inversion' => '2024/04/imagen_2024-04-02_233746650.png',
    'guia-de-propiedad-intelectual-para-marketing-digital-evitando-conflictos-y-abordando-desafios-actuales' => '2024/04/imagen_2024-04-02_234441734.png',
    'el-poder-de-las-cease-and-desist-letters-en-el-litigio-de-propiedad-intelectual' => '2024/04/imagen_2024-04-02_235048464.png',
    'requisito-habilitante-de-experiencia-adquisicion-y-alternativas' => '2024/04/imagen_2024-04-03_000242272.png',
    'registro-sanitario-indefinido-la-novedad-del-decreto-1474-de-2023' => '2024/04/imagen_2024-04-09_122546539.png',
    'tres-problemas-del-regimen-de-responsabilidad-contractual-bancaria-por-el-fraude-electronico-en-colombia' => '2024/04/imagen_2024-04-09_124039866.png',
    'el-desequilibrio-economico-del-contrato-con-ocasion-del-riesgo-aparentemente-previsible' => '2024/04/imagen_2024-04-09_124921304.png',
    'consumo-de-sustancias-psicoactivas' => '2024/04/imagen_2024-04-09_125406785.png',
    'regimen-juridico-de-aplicaciones-de-prestamos-en-colombia-y-el-e-commerce' => '2024/04/imagen_2024-04-09_125646811.png',
    'articulo-de-analisis-de-la-decision-de-la-resolucion-56062-de-2023-de-la-delegatura-para-la-proteccion-de-la-competencia-de-la-superintendencia-de-industria-y-comercio' => '2024/04/imagen_2024-04-09_130239055.png',
    'que-son-las-umbrella-clauses-en-el-arbitraje-de-inversion' => '2024/04/imagen_2024-04-09_130546121.png',
    'la-doctrina-de-equivalentes-y-los-litigios-de-patentes-en-colombia-la-relevancia-del-caso-telemetrik-s-a-s-vs-excelec-international-s-a-s' => '2024/04/imagen_2024-04-09_130759461.png',
    'el-poder-de-las-cease-and-desist-letters-en-el-litigio-de-propiedad-intelectual-2' => '2024/04/imagen_2024-04-09_131108884.png',
    'el-caso-uber-y-su-importancia-para-el-derecho-de-la-competencia-y-la-industria-de-tecnologia-e-innovacion' => '2024/04/imagen_2024-04-09_131451004.png',
    'sentencia-sc-370-2023-de-la-corte-suprema-sobre-uber-analisis-de-competencia-desleal-y-economia-colaborativa' => '2025/01/Diseno-sin-titulo-2.png',
    'deportivo-cali-se-convierte-en-sociedad-anonima-beneficios-riesgos-y-analisis-estrategico' => '2025/01/Soccer-y-finanzas.jpg',
    'mipymes-definicion-beneficios-y-regulacion-en-colombia' => '2025/01/A-gradual-progression-of-businesses-growing-in-size-and-complexity-depicted-as-small-kiosks-transforming-into-larger-enterprises-set-in-a-tropical-urban-environment.jpg',
    'resolucion-crc-analisis-del-impacto-en-competencia-y-proteccion-al-consumidor-en-colombia' => '2025/01/q.jpg',
    'abogados-robot-impacto-de-la-inteligencia-artificial-en-el-derecho-y-la-justicia' => '2025/01/A-conceptual-illustration-of-a-humanoid-robot-holding-legal-scales-in-one-hand-and-a-digital-r.jpg',
    'beneficios-de-contratar-con-el-estado-oportunidades-en-la-contratacion-publica-colombiana' => '2025/01/A-professional-illustration-of-a-handshake-.jpg',
    'una-mirada-detallada-del-proceso-de-cobro-coactivo-de-entidades-publicas-en-colombia' => '2025/01/An-illustration-of-a-government-building-with-abstract-glowing-lines-connecting-it-to-documents-and-coins-symbolizing-the-recovery-of-public-debts-through-legal-processes.jpg',
    'conflictos-de-interes-en-administracion-impacto-y-jurisprudencia-en-colombia' => '2025/01/An-illustration-of-a-corporate-meeting-room-with-a-central-figure-hesitating-between-two-glowing-paths-symbolizing-ethical-dilemmas-and-conflicts-of-interest-in-administration.jpg',
    'contrato-de-suscripcion-de-acciones-regulaciones-y-procedimientos-en-colombia' => '2025/01/A-detailed-and-professional-image-of-documents-on-a-desk-including-a-contract-pen-and-an-open-book-with-financial-.jpg',
    'del-papel-al-codigo-contratos-inteligentes-y-blockchain-en-colombia-desafios-y-oportunidades-desde-el-derecho-comparado' => '2025/01/A-sleek-and-futuristic-depiction-of-a-digital-contract-represented-by-a-glowing-blockchain-ledger-and-connected-nodes-surrounded-by-symbols-of-security-such-as-a-lock-and-encrypted-keys.jpg',
    'derechos-de-imagen-en-colombia' => '2025/04/A-public-figure-standing-in-front-of-flashing-cameras-and-microphones-with-a-translucent-shield-in-front-of-them-showing-protection-of-privacy.-Style_-editorial.jpg',
    'reajuste-salarial-en-colombia-obligaciones-legales-y-derechos-de-los-trabajadores' => '2025/04/rrrrrrrrr.jpg',
    'modelos-de-lenguaje-con-inteligencia-artificial-y-derecho-en-colombia-hacia-un-marco-legal-solido' => '2025/04/caucasian-male-lawyer-in-his-late-30s-wearing-a-__46062.jpeg',
    'derechos-de-los-pasajeros-en-el-transporte-aereo-en-colombia-proteccion-y-compensaciones' => '2025/06/1140-travel-survey-hero.jpg',
    'por-que-dubai-es-el-lugar-ideal-para-invertir-y-hacer-negocios-en-2025' => '2025/06/V2.png',
    'como-ganar-negociaciones-y-resolver-disputas-sin-perder-relaciones-comerciales-ni-oportunidades-de-negocio' => '2025/05/freepik__the-style-is-candid-image-photography-with-natural__26204.png',
    'ia-en-el-derecho-colombiano-retos-regulacion-y-responsabilidad-legal-2025' => '2025/06/Firefly_A-modern-Latin-American-lawyer-in-a-Bogota-law-firm-office-using-a-futuristic-transp-896616-scaled.jpg',
    'la-convencion-de-viena-cisg-cumple-45-anos-claves-riesgos-y-oportunidades-para-tu-empresa' => '2025/06/Firefly_Lawyers-from-different-countries-negotiating-an-international-contract-at-a-round-tab-159994-scaled.jpg',
    'planeacion-patrimonial-la-clave-para-proteger-y-hacer-crecer-el-patrimonio-familiar' => '2025/08/7-miniatura.jpg',
    'estas-enfrentando-dificultades-con-tu-tramite-invima' => '2025/08/Firefly_Multidisciplinary-team-of-professionals-including-a-biomedical-engineer-and-a-lawyer-773778.jpg',
    'ya-reportaste-el-estandar-semantico-udi-para-tus-dispositivos-medicos-o-reactivos-in-vitro-ante-el-invima-evita-la-suspension-de-comercializacion-de-tu-producto-multas-y-sanciones' => '2025/08/1.png',
    'insolvencia-empresarial-en-colombia-claves-para-proteger-contratos-y-creditos-bajo-la-ley-1116-de-2006' => '2025/09/1-4.jpg',
    'ley-2495-de-2025-nace-el-sello-hecho-en-familia-para-las-empresas-familiares-en-colombia' => '2025/09/1-5.jpg',
    'como-evitar-que-el-patrimonio-familiar-se-pierda-estrategias-legales-y-tributarias' => '2025/08/5-2.jpg',
    'de-harvard-a-colombia-como-proteger-y-aprovechar-los-datos-bajo-la-ley-1581-de-2012' => '2025/09/portada-1.png',
    'reembolso-y-restitucion-de-aportes-sociales-en-colombia-lo-que-debes-saber' => '2025/09/1-6.jpg',
    'promulgada-la-ley-2495-de-2025-nace-el-sello-hecho-en-familia-para-apoyar-a-las-empresas-familiares-en-colombia' => '2025/09/1-7.jpg',
    'sentencia-t-256-de-2025-esperanza-gomez-vs-meta-por-eliminacion-arbitraria-de-su-cuenta-de-instagram' => '2025/09/Untitled-design-3.png',
    'corte-constitucional-ordena-a-meta-restituir-cuenta-de-esperanza-gomez-y-fija-precedente-en-derechos-digitales' => '2025/09/OIP.webp',
    'la-era-del-dato-lo-que-seria-la-nueva-reforma-de-proteccion-de-datos-en-colombia' => '2025/09/portada-2-1.png',
    'los-programas-de-apoyo-a-pacientes-en-colombia-que-pueden-y-que-no-pueden-hacer-los-laboratorios-farmaceuticos' => '2025/09/1-8.jpg',
    'en-que-casos-necesitas-que-tu-contador-publico-firme-tu-declaracion-de-renta-en-colombia' => '2025/09/1-9.jpg',
    'pliego-de-cargos-contra-apple-en-colombia-todo-lo-que-debes-saber-sobre-el-abuso-de-posicion-dominante-y-la-libre-competencia' => '2025/09/1-10.jpg',
    'optimizacion-fiscal-y-datos-personales-lecciones-practicas-tras-filtraciones-offshore-del-caso-pandora-papers' => '2025/09/1-11.jpg',
    'pandora-papers-como-este-escandalo-cambio-la-regulacion-de-patrimonios-en-colombia-y-el-mundo' => '2025/09/1-12.jpg',
    'guia-para-extranjeroscomo-crear-una-empresaen-colombia' => '2025/09/Beige-Minimal-iPad-Mockup-Instagram-Post-2.png',
    'tu-empresa-esta-obligada-al-regimen-de-precios-de-transferencia-en-colombia' => '2025/11/gemini-2.5-flash-image_Realistic_photo_of_a_corporate_tax_lawyer_analyzing_documents_and_financial_repo-0.jpg',
    'broker-colombiano-vs-broker-extranjero-como-elegir-la-opcion-mas-eficiente-para-tu-inversion' => '2025/10/1-3.jpg',
    'como-una-empresa-textil-colombiana-evito-su-liquidacion-gracias-a-la-ley-2437-de-2024' => '2025/10/Family-Law-pic-1.png',
    'del-derecho-al-olvido-al-control-de-la-ia-evolucion-del-habeas-data-en-colombia' => '2025/10/1.jpg',
    'transparencia-y-verificacion-humana-las-nuevas-reglas-del-juego-para-la-inteligencia-artificial' => '2025/10/1-1.jpg',
    'estonia-vs-dubai-en-2025-donde-optimizas-mejor-tus-impuestos-sin-arriesgar-tu-reputacion-fiscal' => '2025/10/1-6.jpg',
    'puede-un-juez-usar-chatgpt-lo-que-dijo-la-corte-constitucional-en-2024' => '2025/10/GPT_Image_1_Composicin_realista_mostrando_un_juez_colombiano_e_0.png',
    'estonia-y-los-paises-balticos-sigue-siendo-el-modelo-fiscal-mas-competitivo-del-mundo' => '2025/10/1-5.jpg',
    'estonia-letonia-lituania-y-dubai-una-mirada-juridica-comparada-a-las-jurisdicciones-mas-competitivas-de-2025' => '2025/10/1-7.jpg',
    'por-que-invertir-en-colombia-ofrece-una-de-las-mayores-seguridades-juridicas-del-mercado-en-latinoamerica' => '2025/10/1-2.jpg',
    'nuestro-equipo' => '2025/10/OFICINA-CON-PERSONAS-TEST-1.png',
    'residencia-fiscal-para-nomadas-digitales-colombianos-reglas-reales-mitos-y-errores-que-cuestan-dinero' => '2025/12/1.jpg',
];

echo "Total mappings disponibles: " . count($thumbnail_data) . "\n\n";

// --- Obtener posts publicados (no attachments, no revisions) ---
$all_posts = $GLOBALS['wpdb']->get_results(
    "SELECT ID, post_name, post_type FROM {$GLOBALS['wpdb']->prefix}posts 
     WHERE post_status = 'publish' 
       AND post_type NOT IN ('attachment', 'revision', 'nav_menu_item')"
);

$posts_by_slug = [];
foreach ($all_posts as $p) {
    $posts_by_slug[$p->post_name] = $p;
}

echo "Posts publicados encontrados: " . count($posts_by_slug) . "\n\n";

// --- Procesar cada thumbnail ---
$upload_dir = wp_upload_dir()['basedir'];
$created = 0;
$skipped = 0;
$errors = 0;

foreach ($thumbnail_data as $slug => $relative_path) {
    // Buscar el post por slug
    if (!isset($posts_by_slug[$slug])) {
        echo "  ⏭️ Post no encontrado: '{$slug}'\n";
        $skipped++;
        continue;
    }
    
    $post = $posts_by_slug[$slug];
    $new_post_id = (int) $post->ID;
    
    // Verificar si ya tiene thumbnail
    $existing_thumb = get_post_thumbnail_id($new_post_id);
    if ($existing_thumb) {
        echo "  ✅ Post {$new_post_id} ({$slug}) ya tiene thumbnail: {$existing_thumb}\n";
        $skipped++;
        continue;
    }
    
    // Construir ruta absoluta del archivo
    $file_path = $upload_dir . '/' . $relative_path;
    
    if (!file_exists($file_path)) {
        echo "  ⚠️ Archivo no encontrado: {$file_path}\n";
        $errors++;
        continue;
    }
    
    // --- Crear attachment ---
    $file_info = wp_check_filetype(basename($file_path));
    
    $attachment_data = [
        'guid'           => wp_upload_dir()['url'] . '/' . $relative_path,
        'post_mime_type' => $file_info['type'] ?: 'image/jpeg',
        'post_title'     => preg_replace('/\.[^.]+$/', '', basename($file_path)),
        'post_content'   => '',
        'post_excerpt'   => '',
        'post_status'    => 'inherit',
    ];
    
    $new_attachment_id = wp_insert_attachment($attachment_data, $file_path, $new_post_id);
    
    if (is_wp_error($new_attachment_id)) {
        echo "  ❌ Error insertando attachment: " . $new_attachment_id->get_error_message() . "\n";
        $errors++;
        continue;
    }
    
    // Generar metadata del attachment
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $attach_data = wp_generate_attachment_metadata($new_attachment_id, $file_path);
    wp_update_attachment_metadata($new_attachment_id, $attach_data);
    
    // Asignar como featured image
    $result = set_post_thumbnail($new_post_id, $new_attachment_id);
    
    if ($result) {
        echo "  ✅ Post {$new_post_id} ({$slug}) ← thumbnail {$new_attachment_id}\n";
        $created++;
    } else {
        echo "  ❌ Error asignando thumbnail a post {$new_post_id} ({$slug})\n";
        $errors++;
    }
}

echo "\n\n=== RESUMEN ===\n";
echo "Total mappings: " . count($thumbnail_data) . "\n";
echo "Creados: {$created}\n";
echo "Saltados: {$skipped}\n";
echo "Errores: {$errors}\n";

echo "\n✅ Proceso completado.\n";
echo '</pre>';
