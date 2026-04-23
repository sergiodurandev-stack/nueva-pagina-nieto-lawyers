<?php
/**
 * Single template for regular posts and generic CPTs
 */

get_header();

$a = NL_ASSETS_URL;

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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  $pt        = get_post_type();
  $cat_label = $tipo_labels_short[ $pt ] ?? 'Artículo';
  $cat_color = $tipo_colors[ $pt ] ?? '#5a5a5a';
  $thumb_url = get_the_post_thumbnail_url( null, 'full' );
  $categories = get_the_category();
  $cat_name   = $categories ? $categories[0]->name : $cat_label;
?>

<div class="page-banner page-banner--single">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $thumb_url ?: $a . '/bg-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span><?php the_title(); ?></span>
    </div>
    <h1 class="page-banner-title"><?php the_title(); ?></h1>
  </div>
</div>

<article class="single-post-content">
  <div class="container">
    <div class="single-post-layout">

      <div class="single-post-main reveal">
        <div class="single-post-meta">
          <span class="blog-card-badge" style="background:<?php echo esc_attr( $cat_color ); ?>">
            <?php echo esc_html( $cat_name ); ?>
          </span>
          <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>">
            <i class="fa-regular fa-calendar"></i>
            <?php echo esc_html( get_the_date('d M Y') ); ?>
          </time>
          <span>
            <i class="fa-regular fa-clock"></i>
            <?php
              $content_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
              $reading_time = max( 1, round( $content_words / 200 ) );
              echo esc_html( $reading_time . ' min lectura' );
            ?>
          </span>
        </div>

        <div class="single-post-body">
          <?php the_content(); ?>
        </div>

        <div class="single-post-footer">
          <div class="single-post-tags">
            <?php the_tags( '<span class="single-post-tag-label">Etiquetas:</span> ', ' ' ); ?>
          </div>
          <div class="single-post-nav">
            <span class="single-post-nav-prev"><?php previous_post_link( '%link', '<i class="fa-solid fa-arrow-left"></i> Anterior' ); ?></span>
            <span class="single-post-nav-next"><?php next_post_link( '%link', 'Siguiente <i class="fa-solid fa-arrow-right"></i>' ); ?></span>
          </div>
        </div>
      </div>

      <aside class="single-post-sidebar reveal">
        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        <?php else : ?>
          <div class="sidebar-widget">
            <h3 class="sidebar-widget-title">Categorías</h3>
            <ul class="sidebar-cats">
              <?php wp_list_categories( [
                'title_li' => '',
                'show_count' => true,
              ] ); ?>
            </ul>
          </div>

          <div class="sidebar-widget">
            <h3 class="sidebar-widget-title">Reciente</h3>
            <ul class="sidebar-recent">
              <?php
              $recent = wp_get_recent_posts( [
                'numberposts' => 5,
                'post_status' => 'publish',
              ] );
              foreach ( $recent as $r ) :
              ?>
              <li>
                <a href="<?php echo esc_url( get_permalink( $r['ID'] ) ); ?>">
                  <?php echo esc_html( $r['post_title'] ); ?>
                </a>
              </li>
              <?php endforeach; wp_reset_query(); ?>
            </ul>
          </div>

          <div class="sidebar-widget sidebar-cta">
            <h3 class="sidebar-widget-title">¿Necesitas asesoría?</h3>
            <p>Contáctanos y recibe orientación legal personalizada.</p>
            <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="btn btn-primary" style="width:100%;justify-content:center">
              <i class="fa-solid fa-envelope"></i> Consulta Gratuita
            </a>
          </div>
        <?php endif; ?>
      </aside>

    </div>
  </div>
</article>

<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
