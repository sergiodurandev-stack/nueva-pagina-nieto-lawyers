<?php
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'NL_THEME_VERSION', '1.0.1' );
define( 'NL_THEME_URI', get_template_directory_uri() );
define( 'NL_ASSETS_URL', content_url( 'uploads/nieto-assets' ) );

/* ── Auto-create required pages ── */
add_action( 'after_switch_theme', 'nieto_create_pages' );
add_action( 'init', function() {
	if ( get_option('nieto_pages_created') !== NL_THEME_VERSION ) {
		nieto_create_pages();
	}
} );

function nieto_create_pages() {
	$pages = [
		[
			'title'    => 'Quienes Somos',
			'slug'     => 'quienes-somos',
			'template' => 'template-quienes-somos.php',
		],
		[
			'title'    => 'Nuestra Historia',
			'slug'     => 'nuestra-historia',
			'template' => 'template-nuestra-historia.php',
		],
		[
			'title'    => 'Nuestro Equipo',
			'slug'     => 'nuestro-equipo',
			'template' => 'template-nuestro-equipo.php',
		],
		[
			'title'    => 'Áreas de Práctica',
			'slug'     => 'areas-de-practica',
			'template' => 'template-areas-de-practica.php',
		],
		[
			'title'    => 'Blog y Noticias',
			'slug'     => 'blog',
			'template' => 'template-blog.php',
		],
	];

	foreach ( $pages as $page ) {
		$exists = get_page_by_path( $page['slug'] );
		if ( $exists ) {
			update_post_meta( $exists->ID, '_wp_page_template', $page['template'] );
			continue;
		}
		$id = wp_insert_post( [
			'post_title'   => $page['title'],
			'post_name'    => $page['slug'],
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_author'  => 1,
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		] );
		if ( $id && ! is_wp_error( $id ) ) {
			update_post_meta( $id, '_wp_page_template', $page['template'] );
		}
	}

	/* Ensure front page is set */
	$home = get_page_by_path( 'inicio' );
	if ( ! $home ) {
		$home_id = wp_insert_post( [
			'post_title'  => 'Inicio',
			'post_name'   => 'inicio',
			'post_status' => 'publish',
			'post_type'   => 'page',
			'post_author' => 1,
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		] );
		if ( $home_id && ! is_wp_error( $home_id ) ) {
			update_post_meta( $home_id, '_wp_page_template', 'template-home.php' );
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $home_id );
		}
	} else {
		update_post_meta( $home->ID, '_wp_page_template', 'template-home.php' );
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home->ID );
	}

	update_option( 'nieto_pages_created', NL_THEME_VERSION );
}

/* ── Theme support ── */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form','comment-form','comment-list','gallery','caption' ] );
	add_theme_support( 'custom-logo' );
	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'nieto-lawyers' ),
		'footer'  => __( 'Footer Menu',  'nieto-lawyers' ),
	] );
} );

/* ── Enqueue assets ── */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700;900&family=Raleway:wght@300;400;500;600;700&display=swap',
		[],
		null
	);
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
		[],
		'6.5.0'
	);
	wp_enqueue_style( 'nieto-main', NL_THEME_URI . '/assets/css/main.css', [], NL_THEME_VERSION );
	wp_enqueue_script( 'nieto-main', NL_THEME_URI . '/assets/js/main.js', [ 'jquery' ], NL_THEME_VERSION, true );

	wp_localize_script( 'nieto-main', 'NietoAjax', [
		'url'   => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce( 'nieto_nonce' ),
	] );
} );

/* ── ACF field groups ── */
add_action( 'acf/init', 'nieto_register_acf_fields' );
function nieto_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

	/* ── HOME PAGE ── */
	acf_add_local_field_group( [
		'key'      => 'group_home_hero',
		'title'    => 'Home – Hero',
		'fields'   => [
			[
				'key'   => 'field_hero_headline',
				'label' => 'Headline principal',
				'name'  => 'hero_headline',
				'type'  => 'text',
				'default_value' => 'COMPROMETIDOS',
			],
			[
				'key'   => 'field_hero_subheadline',
				'label' => 'Sub-headline',
				'name'  => 'hero_subheadline',
				'type'  => 'text',
				'default_value' => 'CON LA PROTECCIÓN DE SUS INTERESES',
			],
			[
				'key'   => 'field_hero_background',
				'label' => 'Imagen de fondo Hero',
				'name'  => 'hero_background',
				'type'  => 'image',
				'return_format' => 'url',
			],
			[
				'key'   => 'field_hero_cta_text',
				'label' => 'Botón CTA texto',
				'name'  => 'hero_cta_text',
				'type'  => 'text',
				'default_value' => 'Contáctanos',
			],
			[
				'key'   => 'field_hero_cta_url',
				'label' => 'Botón CTA URL',
				'name'  => 'hero_cta_url',
				'type'  => 'text',
				'default_value' => '#contacto',
			],
		],
		'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'template-home.php' ] ] ],
	] );

	acf_add_local_field_group( [
		'key'      => 'group_home_about',
		'title'    => 'Home – Quiénes Somos',
		'fields'   => [
			[
				'key'   => 'field_about_title',
				'label' => 'Título',
				'name'  => 'about_title',
				'type'  => 'text',
				'default_value' => '¿Quiénes somos?',
			],
			[
				'key'   => 'field_about_text',
				'label' => 'Texto',
				'name'  => 'about_text',
				'type'  => 'wysiwyg',
				'default_value' => '<p>Con más de 23 años de experiencia en el mercado colombiano y con una sede en Europa (Estambul), somos una firma boutique enfocada en brindar servicios de alta calidad. Apoyados en herramientas tecnológicas de última generación, ofrecemos a nuestros clientes soluciones legales eficientes desde las perspectivas corporativa, financiera y comercial.</p><p><strong>¡Contáctanos hoy mismo y asegura el fortalecimiento y crecimiento de tu empresa!</strong></p>',
			],
			[
				'key'   => 'field_about_image',
				'label' => 'Imagen',
				'name'  => 'about_image',
				'type'  => 'image',
				'return_format' => 'url',
			],
			[
				'key'   => 'field_about_stats',
				'label' => 'Estadísticas',
				'name'  => 'about_stats',
				'type'  => 'repeater',
				'sub_fields' => [
					[ 'key' => 'field_stat_number', 'label' => 'Número', 'name' => 'number', 'type' => 'text' ],
					[ 'key' => 'field_stat_label',  'label' => 'Etiqueta', 'name' => 'label', 'type' => 'text' ],
				],
				'default_value' => [],
			],
		],
		'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'template-home.php' ] ] ],
	] );

	acf_add_local_field_group( [
		'key'      => 'group_home_practice_areas',
		'title'    => 'Home – Áreas de Práctica',
		'fields'   => [
			[
				'key'   => 'field_areas_title',
				'label' => 'Título sección',
				'name'  => 'areas_title',
				'type'  => 'text',
				'default_value' => 'Nuestras Áreas de Práctica',
			],
			[
				'key'    => 'field_practice_areas',
				'label'  => 'Áreas',
				'name'   => 'practice_areas',
				'type'   => 'repeater',
				'layout' => 'block',
				'sub_fields' => [
					[ 'key' => 'field_area_name',  'label' => 'Nombre',  'name' => 'name',  'type' => 'text' ],
					[ 'key' => 'field_area_image', 'label' => 'Imagen',  'name' => 'image', 'type' => 'image', 'return_format' => 'url' ],
					[ 'key' => 'field_area_icon',  'label' => 'Ícono FA', 'name' => 'icon', 'type' => 'text', 'default_value' => 'fa-scale-balanced' ],
					[ 'key' => 'field_area_url',   'label' => 'URL',     'name' => 'url',   'type' => 'url' ],
				],
			],
		],
		'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'template-home.php' ] ] ],
	] );

	acf_add_local_field_group( [
		'key'      => 'group_home_team',
		'title'    => 'Home – Nuestro Equipo',
		'fields'   => [
			[
				'key'   => 'field_team_title',
				'label' => 'Título',
				'name'  => 'team_title',
				'type'  => 'text',
				'default_value' => 'Nuestro Equipo',
			],
			[
				'key'    => 'field_team_members',
				'label'  => 'Miembros',
				'name'   => 'team_members',
				'type'   => 'repeater',
				'layout' => 'block',
				'sub_fields' => [
					[ 'key' => 'field_member_name',  'label' => 'Nombre',   'name' => 'name',  'type' => 'text' ],
					[ 'key' => 'field_member_role',  'label' => 'Cargo',    'name' => 'role',  'type' => 'text' ],
					[ 'key' => 'field_member_photo', 'label' => 'Foto',     'name' => 'photo', 'type' => 'image', 'return_format' => 'url' ],
					[ 'key' => 'field_member_url',   'label' => 'URL perfil','name' => 'url',  'type' => 'url' ],
				],
			],
		],
		'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'template-home.php' ] ] ],
	] );

	acf_add_local_field_group( [
		'key'      => 'group_home_contact',
		'title'    => 'Home – Contacto',
		'fields'   => [
			[
				'key'   => 'field_contact_title',
				'label' => 'Título sección contacto',
				'name'  => 'contact_title',
				'type'  => 'text',
				'default_value' => 'Comunícate con Nosotros',
			],
			[
				'key'   => 'field_contact_subtitle',
				'label' => 'Subtítulo',
				'name'  => 'contact_subtitle',
				'type'  => 'text',
				'default_value' => 'Estamos aquí para ayudarte',
			],
			[
				'key'   => 'field_contact_phone',
				'label' => 'Teléfono',
				'name'  => 'contact_phone',
				'type'  => 'text',
			],
			[
				'key'   => 'field_contact_email',
				'label' => 'Email',
				'name'  => 'contact_email',
				'type'  => 'email',
			],
			[
				'key'   => 'field_contact_address',
				'label' => 'Dirección',
				'name'  => 'contact_address',
				'type'  => 'text',
			],
		],
		'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'template-home.php' ] ] ],
	] );
}

/* ── Contact form AJAX handler ── */
add_action( 'wp_ajax_nieto_contact',        'nieto_handle_contact' );
add_action( 'wp_ajax_nopriv_nieto_contact', 'nieto_handle_contact' );
function nieto_handle_contact() {
	check_ajax_referer( 'nieto_nonce', 'nonce' );

	$name    = sanitize_text_field( $_POST['name']    ?? '' );
	$email   = sanitize_email(      $_POST['email']   ?? '' );
	$phone   = sanitize_text_field( $_POST['phone']   ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );
	$area    = sanitize_text_field( $_POST['area']    ?? '' );

	if ( ! $name || ! $email || ! $message ) {
		wp_send_json_error( [ 'message' => 'Por favor completa todos los campos requeridos.' ] );
	}

	$to      = get_option( 'admin_email' );
	$subject = "Nuevo contacto de $name – Nieto & Nieto Lawyers";
	$body    = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nÁrea de interés: $area\n\nMensaje:\n$message";
	$headers = [ 'Content-Type: text/plain; charset=UTF-8', "Reply-To: $name <$email>" ];

	wp_mail( $to, $subject, $body, $headers );

	wp_send_json_success( [ 'message' => '¡Gracias! Hemos recibido tu mensaje. Te contactaremos pronto.' ] );
}

/* ── Custom Post Types ── */
add_action( 'init', 'nieto_register_cpts' );
function nieto_register_cpts() {
	$cpts = [
		'noticias-legales' => [
			'singular'    => 'Noticia Legal',
			'plural'      => 'Noticias Legales',
			'icon'        => 'dashicons-megaphone',
			'has_archive' => true,
		],
		'opinion-analisis' => [
			'singular'    => 'Opinión y Análisis',
			'plural'      => 'Opinión y Análisis',
			'icon'        => 'dashicons-edit-page',
			'has_archive' => true,
		],
		'practicos-exp' => [
			'singular'    => 'Caso Práctico',
			'plural'      => 'Casos Prácticos y Experiencias',
			'icon'        => 'dashicons-portfolio',
			'has_archive' => true,
		],
		'areas-de-practica' => [
			'singular'    => 'Área de Práctica',
			'plural'      => 'Áreas de Práctica',
			'icon'        => 'dashicons-admin-site',
			'has_archive' => false, // la página /areas-de-practica/ usa template-areas-de-practica.php
		],
		'abogados' => [
			'singular'    => 'Abogado',
			'plural'      => 'Abogados',
			'icon'        => 'dashicons-businessman',
			'has_archive' => false, // la página /nuestro-equipo/ es el listado del equipo
		],
	];

	foreach ( $cpts as $slug => $data ) {
		register_post_type( $slug, [
			'labels' => [
				'name'               => $data['plural'],
				'singular_name'      => $data['singular'],
				'add_new_item'       => 'Añadir ' . $data['singular'],
				'edit_item'          => 'Editar ' . $data['singular'],
				'new_item'           => 'Nuevo ' . $data['singular'],
				'view_item'          => 'Ver ' . $data['singular'],
				'search_items'       => 'Buscar ' . $data['plural'],
				'not_found'          => 'No se encontraron ' . $data['plural'],
			],
			'public'              => true,
			'has_archive'         => $data['has_archive'],
			'show_in_rest'        => true,
			'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'author' ],
			'menu_icon'           => $data['icon'],
			'rewrite'             => [ 'slug' => $slug, 'with_front' => false ],
		] );
	}
}

/* ── Flush rewrite rules once per theme version (after CPTs register) ── */
add_action( 'init', function() {
	if ( get_option('nieto_rewrite_flushed') !== NL_THEME_VERSION ) {
		flush_rewrite_rules();
		update_option( 'nieto_rewrite_flushed', NL_THEME_VERSION );
	}
}, 20 );

/* ── Helper: get recent posts ── */
function nieto_get_recent_posts( $count = 3 ) {
	return get_posts( [
		'numberposts' => $count,
		'post_status' => 'publish',
		'orderby'     => 'date',
		'order'       => 'DESC',
	] );
}
