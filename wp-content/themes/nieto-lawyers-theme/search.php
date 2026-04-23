<?php
/**
 * Search results template
 */

get_header();

$a = NL_ASSETS_URL;
$search_term = get_search_query();
?>

<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $a . '/bg-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Resultados de búsqueda</span>
    </div>
    <h1 class="page-banner-title">
      <?php echo $search_term ? 'Resultados para: <span>' . esc_html( $search_term ) . '</span>' : 'Buscar'; ?>
    </h1>
    <p class="page-banner-lead">
      <?php global $wp_query; printf( '%d resultado%s encontrado%s', $wp_query->found_posts, $wp_query->found_posts !== 1 ? 's' : '', $wp_query->found_posts !== 1 ? 's' : '' ); ?>
    </p>
  </div>
</div>

<section class="search-section">
  <div class="container">

    <div class="search-form-wrap reveal">
      <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>">
        <input type="search" class="search-input" placeholder="Buscar en el sitio..." value="<?php echo esc_attr( $search_term ); ?>" name="s">
        <button type="submit" class="search-submit">
          <i class="fa-solid fa-search"></i>
        </button>
      </form>
    </div>

    <?php if ( have_posts() ) : ?>

    <div class="search-results-grid">
      <?php while ( have_posts() ) : the_post();
        $excerpt = get_the_excerpt() ?: wp_trim_words( strip_tags( get_the_content() ), 30, '…' );
        $thumb   = get_the_post_thumbnail_url( null, 'thumbnail' );
      ?>
      <article class="search-result-card reveal">
        <?php if ( $thumb ) : ?>
        <a href="<?php the_permalink(); ?>" class="search-result-thumb">
          <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
        </a>
        <?php endif; ?>
        <div class="search-result-body">
          <span class="search-result-type"><?php echo esc_html( get_post_type_object(get_post_type())->labels->singular_name ?? 'Entrada' ); ?></span>
          <h3 class="search-result-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <?php if ( $excerpt ) : ?>
          <p class="search-result-excerpt"><?php echo esc_html( $excerpt ); ?></p>
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="search-result-link">
            Leer más <i class="fa-solid fa-arrow-right"></i>
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

    <div class="search-empty reveal">
      <i class="fa-solid fa-search"></i>
      <h3>No se encontraron resultados</h3>
      <p>No encontramos contenido relacionado con "<strong><?php echo esc_html( $search_term ); ?></strong>".<br>Prueba con otras palabras clave.</p>
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-outline" style="margin-top:24px;display:inline-flex">
        <i class="fa-solid fa-arrow-left"></i> Volver al inicio
      </a>
    </div>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
