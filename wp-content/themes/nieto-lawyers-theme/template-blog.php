<?php
/**
 * Template Name: Blog / Noticias
 */

get_header();

$a = NL_ASSETS_URL;

$tipos = [
  'todos'            => 'Todas las publicaciones',
  'noticias-legales' => 'Noticias Legales',
  'opinion-analisis' => 'Opinión y Análisis',
  'practicos-exp'    => 'Casos Prácticos',
  'post'             => 'Blogs Legales',
];

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

$tipo_actual = sanitize_key( $_GET['tipo'] ?? 'todos' );
if ( ! array_key_exists( $tipo_actual, $tipos ) ) {
  $tipo_actual = 'todos';
}

$paged = max( 1, (int) ( $_GET['pag'] ?? 1 ) );

$query_args = [
  'post_status'    => 'publish',
  'posts_per_page' => 9,
  'offset'         => ( $paged - 1 ) * 9,
  'orderby'        => 'date',
  'order'          => 'DESC',
];

if ( $tipo_actual === 'todos' ) {
  $query_args['post_type'] = [ 'noticias-legales', 'opinion-analisis', 'practicos-exp', 'post' ];
  $query_args['post__not_in'] = get_option('sticky_posts', []);
} else {
  $query_args['post_type'] = $tipo_actual;
}

$blog_query  = new WP_Query( $query_args );
$total_posts = $blog_query->found_posts;
$total_pages = (int) ceil( $total_posts / 9 );

function nl_blog_page_url( $tipo, $pag = 1 ) {
  $base = get_permalink();
  $params = [];
  if ( $tipo !== 'todos' ) $params['tipo'] = $tipo;
  if ( $pag > 1 )         $params['pag']  = $pag;
  return $params ? $base . '?' . http_build_query( $params ) : $base;
}

?>

<!-- ════ BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $a . '/bg-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Blog y Noticias</span>
    </div>
    <h1 class="page-banner-title">Blog y <span>Noticias</span></h1>
    <p class="page-banner-lead">Análisis jurídicos, noticias legales y casos prácticos del equipo Nieto & Nieto Lawyers.</p>
  </div>
</div>

<!-- ════ TABS ════ -->
<div class="blog-tabs-bar">
  <div class="container">
    <nav class="blog-tabs-nav">
      <?php foreach ( $tipos as $key => $label ) :
        $active = $key === $tipo_actual;
        $url    = nl_blog_page_url( $key );
      ?>
      <a href="<?php echo esc_url( $url ); ?>"
         class="blog-tab<?php echo $active ? ' active' : ''; ?>">
        <?php echo esc_html( $label ); ?>
      </a>
      <?php endforeach; ?>
    </nav>
  </div>
</div>

<!-- ════ GRID ════ -->
<section class="blog-listing">
  <div class="container">

    <?php if ( $blog_query->have_posts() ) : ?>

    <div class="blog-listing-meta reveal">
      <span><?php echo $total_posts; ?> publicacion<?php echo $total_posts !== 1 ? 'es' : ''; ?></span>
    </div>

    <div class="blog-grid">
      <?php while ( $blog_query->have_posts() ) : $blog_query->the_post();
        $pt        = get_post_type();
        $cat_label = $tipo_labels_short[ $pt ] ?? 'Blog';
        $cat_color = $tipo_colors[ $pt ] ?? '#5a5a5a';
        $excerpt   = get_the_excerpt();
        if ( ! $excerpt ) {
          $excerpt = wp_trim_words( strip_tags( get_the_content() ), 25, '…' );
        }
        $thumb_url = get_the_post_thumbnail_url( null, 'medium_large' );
      ?>
      <article class="blog-card reveal">

        <a href="<?php the_permalink(); ?>" class="blog-card-thumb" aria-label="<?php the_title_attribute(); ?>">
          <?php if ( $thumb_url ) : ?>
            <img src="<?php echo esc_url( $thumb_url ); ?>"
                 alt="<?php the_title_attribute(); ?>" loading="lazy">
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

    <!-- Pagination -->
    <?php if ( $total_pages > 1 ) : ?>
    <nav class="blog-pagination reveal">
      <?php if ( $paged > 1 ) : ?>
      <a href="<?php echo esc_url( nl_blog_page_url( $tipo_actual, $paged - 1 ) ); ?>"
         class="blog-pag-btn" aria-label="Anterior">
        <i class="fa-solid fa-chevron-left"></i>
      </a>
      <?php endif; ?>

      <?php for ( $i = 1; $i <= $total_pages; $i++ ) : ?>
      <a href="<?php echo esc_url( nl_blog_page_url( $tipo_actual, $i ) ); ?>"
         class="blog-pag-num<?php echo $i === $paged ? ' active' : ''; ?>">
        <?php echo $i; ?>
      </a>
      <?php endfor; ?>

      <?php if ( $paged < $total_pages ) : ?>
      <a href="<?php echo esc_url( nl_blog_page_url( $tipo_actual, $paged + 1 ) ); ?>"
         class="blog-pag-btn" aria-label="Siguiente">
        <i class="fa-solid fa-chevron-right"></i>
      </a>
      <?php endif; ?>
    </nav>
    <?php endif; ?>

    <?php else : ?>

    <div class="blog-empty reveal">
      <i class="fa-regular fa-newspaper"></i>
      <h3>No hay publicaciones aún</h3>
      <p>Pronto publicaremos contenido en esta sección. ¡Vuelve pronto!</p>
    </div>

    <?php endif; ?>

  </div>
</section>

<!-- ════ CTA SUSCRIPCIÓN ════ -->
<section class="blog-cta-section">
  <div class="container">
    <div class="blog-cta-inner reveal">
      <div class="blog-cta-text">
        <span class="section-label">Mantente informado</span>
        <h2 class="section-title" style="font-size:1.8rem;margin-bottom:12px">
          Derecho al día, <span>cada semana</span>
        </h2>
        <p>Recibe análisis jurídicos, novedades legislativas y casos de estudio directamente en tu correo.</p>
      </div>
      <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="btn btn-primary">
        <i class="fa-solid fa-envelope"></i>
        Contáctanos
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
