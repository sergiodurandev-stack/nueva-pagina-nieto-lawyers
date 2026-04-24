<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
/**
 * Dynamic meta description for SEO.
 */
$meta_desc = '';
if ( is_singular() ) {
    $meta_desc = get_the_excerpt();
}
if ( is_category() || is_tax() ) {
    $meta_desc = strip_tags( term_description() );
}
if ( is_archive() && ! is_category() && ! is_tax() ) {
    $meta_desc = get_the_archive_title() . ' — ' . get_bloginfo('description');
}
if ( is_front_page() || is_home() ) {
    $meta_desc = get_bloginfo('description');
}
if ( $meta_desc ) {
    // Truncate to ~160 chars
    $meta_desc = substr( wp_strip_all_tags( $meta_desc ), 0, 160 );
    echo '<meta name="description" content="' . esc_attr( $meta_desc ) . '">' . "\n";
}
?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="siteHeader">
  <div class="header-inner">

    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
      <?php
      $logo_url = NL_ASSETS_URL . '/logo-blanco.png';
      echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
      ?>
    </a>

    <nav class="primary-nav" id="primaryNav">
      <?php
      if ( has_nav_menu('primary') ) {
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'primary-menu',
          'fallback_cb'    => false,
          'depth'          => 1,
        ]);
      } else {
        ?>
        <ul class="primary-menu">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a></li>
          <li><a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">Nosotros</a></li>
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/')); ?>">Áreas de Práctica</a></li>
          <li><a href="<?php echo esc_url(home_url('/nuestro-equipo/')); ?>">Equipo</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
          <li><a href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a></li>
        </ul>
        <?php
      }
      ?>
    </nav>

    <div class="header-cta">
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="btn btn-primary">Consulta Gratuita</a>
    </div>

    <button class="menu-toggle" id="menuToggle" aria-label="Menú">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</header>
