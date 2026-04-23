<?php
/**
 * Archive template for CPTs: noticias-legales, opinion-analisis, practicos-exp, post
 */

get_header();

$a = NL_ASSETS_URL;

$queried_type = get_queried_object();
$cpt_label = 'Publicaciones';

if ( is_post_type_archive('noticias-legales') ) {
  $cpt_label = 'Noticias Legales';
} elseif ( is_post_type_archive('opinion-analisis') ) {
  $cpt_label = 'Opinión y Análisis';
} elseif ( is_post_type_archive('practicos-exp') ) {
  $cpt_label = 'Casos Prácticos y Experiencias';
} elseif ( is_category() ) {
  $cpt_label = single_cat_title('', false);
} elseif ( is_tag() ) {
  $cpt_label = single_tag_title('', false);
} elseif ( is_date() ) {
  $cpt_label = 'Archivo';
} elseif ( is_author() ) {
  $cpt_label = 'Autor';
}

$tipo_labels_short = [
  'noticias-legales' => 'Noticias',
  'opinion-analisis' => 'Opinión',
  'practicos-exp'    => 'Casos Prácticos',
  'post'             => 'Blog',
];

$tipo_colors = [
  'noticias-legales' => '#0A66C2',
  'opinion-analisis' => '#b8993a',
  'practicos-exp'    => '#2e7d52',
  'post'             => '#5a5a5a',
];
?>

<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $a . '/bg-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span><?php echo esc_html( $cpt_label ); ?></span>
    </div>
    <h1 class="page-banner-title"><?php echo esc_html( $cpt_label ); ?></h1>
  </div>
</div>

<section class="blog-listing">
  <div class="container">

    <?php if ( have_posts() ) : ?>

    <div class="blog-listing-meta reveal">
      <span><?php global $wp_query; echo $wp_query->found_posts; ?> publicacion<?php echo $wp_query->found_posts !== 1 ? 'es' : ''; ?></span>
    </div>

    <div class="blog-grid">
      <?php while ( have_posts() ) : the_post();
        $pt        = get_post_type();
        $cat_label = $tipo_labels_short[ $pt ] ?? 'Artículo';
        $cat_color = $tipo_colors[ $pt ] ?? '#5a5a5a';
        $excerpt   = get_the_excerpt() ?: wp_trim_words( strip_tags( get_the_content() ), 25, '…' );
        $thumb_url = get_the_post_thumbnail_url( null, 'medium_large' );
      ?>
      <article class="blog-card reveal">

        <a href="<?php the_permalink(); ?>" class="blog-card-thumb" aria-label="<?php the_title_attribute(); ?>">
          <?php if ( $thumb_url ) : ?>
            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php else : ?>
            <div class="blog-card-thumb-placeholder">
              <i class="fa-solid fa-scale-balanced"></i>
            </div>
          <?php endif; ?>
          <span class="blog-card-badge" style="background:<?php echo esc_attr( $cat_color ); ?>">
            <?php echo esc_html( $cat_label ); ?>
          </span>
        </a>

        <div class="blog-card-body">
          <div class="blog-card-meta">
            <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>">
              <i class="fa-regular fa-calendar"></i>
              <?php echo esc_html( get_the_date('d M Y') ); ?>
            </time>
          </div>
          <h3 class="blog-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <?php if ( $excerpt ) : ?>
          <p class="blog-card-excerpt"><?php echo esc_html( $excerpt ); ?></p>
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="blog-card-cta">
            Leer artículo <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

      </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php the_posts_pagination( [
      'mid_size'  => 2,
      'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
      'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
      'class'     => 'blog-pagination',
    ] ); ?>

    <?php else : ?>

    <div class="blog-empty reveal">
      <i class="fa-regular fa-newspaper"></i>
      <h3>No hay publicaciones aún</h3>
      <p>Pronto publicaremos contenido en esta sección. ¡Vuelve pronto!</p>
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-outline" style="margin-top:24px;display:inline-flex">
        <i class="fa-solid fa-arrow-left"></i> Volver al inicio
      </a>
    </div>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
