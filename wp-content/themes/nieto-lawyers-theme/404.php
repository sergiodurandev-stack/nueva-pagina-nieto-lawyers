<?php
/**
 * 404 Not Found template
 */

get_header();
$a = NL_ASSETS_URL;
?>

<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $a . '/bg-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Página no encontrada</span>
    </div>
    <h1 class="page-banner-title">Página no <span>encontrada</span></h1>
  </div>
</div>

<section class="error-404-section">
  <div class="container">
    <div class="error-404-content reveal">
      <div class="error-404-icon">
        <i class="fa-solid fa-triangle-exclamation"></i>
      </div>
      <span class="section-label" style="display:block;margin-bottom:16px">Error 404</span>
      <h2 class="section-title" style="margin-bottom:24px">La página que buscas <span>no existe</span></h2>
      <p style="color:var(--clr-muted);max-width:480px;margin:0 auto 36px">
        Es posible que el enlace esté roto, la página haya sido eliminada o la dirección esté mal escrita.
      </p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-primary">
          <i class="fa-solid fa-house"></i> Volver al inicio
        </a>
        <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="btn btn-outline">
          <i class="fa-solid fa-envelope"></i> Contáctanos
        </a>
      </div>

      <div class="error-404-helpful-links">
        <h3>Páginas útiles</h3>
        <div class="error-404-links">
          <a href="<?php echo esc_url( home_url('/quienes-somos/') ); ?>"><i class="fa-solid fa-building"></i> Quiénes Somos</a>
          <a href="<?php echo esc_url( home_url('/areas-de-practica/') ); ?>"><i class="fa-solid fa-scale-balanced"></i> Áreas de Práctica</a>
          <a href="<?php echo esc_url( home_url('/nuestro-equipo/') ); ?>"><i class="fa-solid fa-users"></i> Nuestro Equipo</a>
          <a href="<?php echo esc_url( home_url('/blog/') ); ?>"><i class="fa-solid fa-newspaper"></i> Blog</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
