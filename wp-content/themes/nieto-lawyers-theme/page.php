<?php
/**
 * Default page template (fallback for pages without a specific template)
 */

get_header();
$a = NL_ASSETS_URL;
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $a . '/bg-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span><?php the_title(); ?></span>
    </div>
    <h1 class="page-banner-title"><?php the_title(); ?></h1>
  </div>
</div>

<section class="page-content-section">
  <div class="container">
    <div class="page-content-body reveal">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
