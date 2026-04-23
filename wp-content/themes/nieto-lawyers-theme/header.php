<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
      <a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">Nosotros</a>
      <a href="<?php echo esc_url(home_url('/areas-de-practica/')); ?>">Áreas de Práctica</a>
      <a href="<?php echo esc_url(home_url('/nuestro-equipo/')); ?>">Equipo</a>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a>
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
