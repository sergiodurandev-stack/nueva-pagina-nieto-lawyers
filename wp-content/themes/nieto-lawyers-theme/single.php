<?php
/**
 * Single post template — Nieto & Nieto Lawyers
 */
get_header();

$a = NL_ASSETS_URL;

$tipo_labels = [
  'noticias-legales' => 'Noticias Legales',
  'opinion-analisis' => 'Opinión y Análisis',
  'practicos-exp'    => 'Casos Prácticos',
  'post'             => 'Blog Legal',
];

$tipo_colors = [
  'noticias-legales' => '#0A66C2',
  'opinion-analisis' => '#b8993a',
  'practicos-exp'    => '#2e7d52',
  'post'             => '#5a5a5a',
];

if ( have_posts() ) : while ( have_posts() ) : the_post();

$pt           = get_post_type();
$cat_label    = $tipo_labels[ $pt ] ?? 'Artículo';
$cat_color    = $tipo_colors[ $pt ] ?? '#5a5a5a';
$thumb_url    = get_the_post_thumbnail_url( null, 'full' );
$categories   = get_the_category();
$cat_name     = $categories ? $categories[0]->name : $cat_label;
$word_count   = str_word_count( wp_strip_all_tags( get_the_content() ) );
$reading_time = max( 1, round( $word_count / 200 ) );
?>

<!-- ════════════════ POST HERO ════════════════ -->
<div class="sp-hero">
  <div class="sp-hero-bg" style="background-image:url('<?php echo esc_url( $thumb_url ?: $a . '/banner-home.jpg' ); ?>')"></div>
  <div class="sp-hero-overlay"></div>
  <div class="container sp-hero-content">
    <nav class="sp-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span><?php the_title(); ?></span>
    </nav>
    <div class="sp-hero-meta">
      <span class="sp-type-badge" style="background:<?php echo esc_attr( $cat_color ); ?>">
        <?php echo esc_html( $cat_name ); ?>
      </span>
      <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>">
        <i class="fa-regular fa-calendar"></i>
        <?php echo esc_html( get_the_date('d M Y') ); ?>
      </time>
      <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( $reading_time . ' min lectura' ); ?></span>
    </div>
    <h1 class="sp-hero-title"><?php the_title(); ?></h1>
  </div>
</div>

<!-- ════════════════ POST BODY ════════════════ -->
<section class="sp-section">
  <div class="container">
    <div class="sp-layout">

      <!-- ── Main column ── -->
      <main class="sp-main">

        <?php if ( $thumb_url ) : ?>
        <div class="sp-featured-img reveal">
          <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
        </div>
        <?php endif; ?>

        <div class="sp-body reveal">
          <?php the_content(); ?>
        </div>

        <!-- Inline CTA -->
        <div class="sp-inline-cta reveal">
          <div class="sp-inline-cta-icon">
            <i class="fa-solid fa-scale-balanced"></i>
          </div>
          <div class="sp-inline-cta-text">
            <h4>¿Necesita asesoría legal especializada?</h4>
            <p>Nuestro equipo de expertos está listo para orientarle en su caso específico.</p>
          </div>
          <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="btn btn-primary">
            Consulta Gratuita <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <!-- Author bio -->
        <div class="sp-author reveal">
          <div class="sp-author-avatar">
            <img src="<?php echo esc_url( $a . '/logo-blanco.png' ); ?>" alt="Nieto & Nieto Lawyers">
          </div>
          <div class="sp-author-info">
            <div class="sp-author-label">Publicado por</div>
            <h4>Nieto &amp; Nieto Lawyers</h4>
            <p>Firma boutique con más de 23 años de experiencia en derecho corporativo, financiero y comercial en Colombia e internacionalmente.</p>
          </div>
        </div>

        <!-- Tags -->
        <?php $tags = get_the_tags(); if ( $tags ) : ?>
        <div class="sp-tags reveal">
          <span class="sp-tags-label">Etiquetas:</span>
          <?php foreach ( $tags as $tag ) : ?>
            <a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Post navigation -->
        <nav class="sp-nav reveal">
          <?php $prev = get_previous_post(); if ( $prev ) : ?>
          <div class="sp-nav-card sp-nav-prev">
            <div class="sp-nav-dir"><i class="fa-solid fa-arrow-left"></i> Anterior</div>
            <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>">
              <?php echo esc_html( get_the_title( $prev ) ); ?>
            </a>
          </div>
          <?php else : ?><div></div><?php endif; ?>

          <?php $next = get_next_post(); if ( $next ) : ?>
          <div class="sp-nav-card sp-nav-next">
            <div class="sp-nav-dir">Siguiente <i class="fa-solid fa-arrow-right"></i></div>
            <a href="<?php echo esc_url( get_permalink( $next ) ); ?>">
              <?php echo esc_html( get_the_title( $next ) ); ?>
            </a>
          </div>
          <?php else : ?><div></div><?php endif; ?>
        </nav>

      </main>

      <!-- ── Sidebar ── -->
      <aside class="sp-sidebar">

        <!-- CTA widget -->
        <div class="sp-sidebar-cta reveal">
          <div class="sp-sidebar-cta-glow"></div>
          <div class="sp-sidebar-cta-icon">
            <i class="fa-solid fa-scale-balanced"></i>
          </div>
          <h3>¿Necesita un Abogado?</h3>
          <p>Primera consulta <strong>sin costo</strong>. Proteja sus intereses con expertos.</p>
          <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="btn btn-primary">
            <i class="fa-regular fa-calendar-check"></i> Agendar Consulta
          </a>
          <a href="<?php echo esc_url( home_url('/areas-de-practica/') ); ?>" class="sp-sidebar-cta-link">
            Ver todas las áreas <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <!-- Recent posts -->
        <div class="sp-sidebar-widget reveal">
          <h4 class="sp-sidebar-title">Artículos Recientes</h4>
          <?php
          $recent = get_posts([
            'numberposts' => 5,
            'post_status' => 'publish',
            'post_type'   => ['post', 'noticias-legales', 'opinion-analisis', 'practicos-exp'],
            'exclude'     => [ get_the_ID() ],
          ]);
          ?>
          <div class="sp-recent-list">
            <?php foreach ( $recent as $rp ) :
              $rp_thumb = get_the_post_thumbnail_url( $rp->ID, 'thumbnail' );
              $rp_pt    = $rp->post_type;
              $rp_color = $tipo_colors[ $rp_pt ] ?? '#5a5a5a';
            ?>
            <a href="<?php echo esc_url( get_permalink( $rp->ID ) ); ?>" class="sp-recent-item">
              <div class="sp-recent-thumb" style="border-left-color:<?php echo esc_attr( $rp_color ); ?>">
                <?php if ( $rp_thumb ) : ?>
                  <img src="<?php echo esc_url( $rp_thumb ); ?>" alt="<?php echo esc_attr( $rp->post_title ); ?>">
                <?php else : ?>
                  <div class="sp-recent-thumb-ph"><i class="fa-regular fa-newspaper"></i></div>
                <?php endif; ?>
              </div>
              <div class="sp-recent-info">
                <span class="sp-recent-title"><?php echo esc_html( wp_trim_words( $rp->post_title, 9, '…' ) ); ?></span>
                <span class="sp-recent-date"><?php echo esc_html( get_the_date('d M Y', $rp->ID) ); ?></span>
              </div>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </div>

        <!-- Categories -->
        <div class="sp-sidebar-widget reveal">
          <h4 class="sp-sidebar-title">Categorías</h4>
          <ul class="sp-cats-list">
            <?php wp_list_categories([
              'title_li'   => '',
              'show_count' => true,
            ]); ?>
          </ul>
        </div>

      </aside>

    </div>
  </div>
</section>

<!-- ════════════════ RELATED POSTS ════════════════ -->
<?php
$related_args = [
  'post_type'           => $pt,
  'posts_per_page'      => 3,
  'post_status'         => 'publish',
  'post__not_in'        => [ get_the_ID() ],
  'ignore_sticky_posts' => 1,
  'orderby'             => 'rand',
];
if ( $categories ) {
  $related_args['category__in'] = [ $categories[0]->term_id ];
}
$related_q = new WP_Query( $related_args );
if ( $related_q->have_posts() ) :
?>
<section class="sp-related">
  <div class="container">
    <div class="sp-related-header reveal">
      <span class="section-label">Continúa Leyendo</span>
      <h2 class="section-title">Artículos <span>Relacionados</span></h2>
    </div>
    <div class="sp-related-grid">
      <?php while ( $related_q->have_posts() ) : $related_q->the_post();
        $r_thumb  = get_the_post_thumbnail_url( null, 'large' );
        $r_pt     = get_post_type();
        $r_label  = $tipo_labels[ $r_pt ] ?? 'Artículo';
        $r_color  = $tipo_colors[ $r_pt ] ?? '#5a5a5a';
        $r_cats   = get_the_category();
        $r_cat    = $r_cats ? $r_cats[0]->name : $r_label;
      ?>
      <article class="blog-card reveal">
        <a href="<?php the_permalink(); ?>" class="blog-card-thumb" aria-label="<?php the_title_attribute(); ?>">
          <?php if ( $r_thumb ) : ?>
            <img src="<?php echo esc_url( $r_thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php else : ?>
            <div class="blog-card-thumb-placeholder"><i class="fa-regular fa-newspaper"></i></div>
          <?php endif; ?>
          <span class="blog-card-badge" style="background:<?php echo esc_attr( $r_color ); ?>">
            <?php echo esc_html( $r_cat ); ?>
          </span>
        </a>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <i class="fa-regular fa-calendar"></i>
            <?php echo esc_html( get_the_date('d M Y') ); ?>
          </div>
          <h3 class="blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="blog-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ); ?></p>
          <span class="blog-card-cta">Leer artículo <i class="fa-solid fa-arrow-right"></i></span>
        </div>
      </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ════════════════ FINAL CTA ════════════════ -->
<section class="sp-final-cta">
  <div class="sp-final-cta-bg"></div>
  <div class="container sp-final-cta-inner">
    <div class="sp-final-cta-icon"><i class="fa-solid fa-handshake"></i></div>
    <h2>¿Tiene Dudas <span>Legales</span>?</h2>
    <p>Nuestro equipo de abogados especializados está disponible para orientarle. Primera consulta sin ningún costo.</p>
    <div class="sp-final-cta-actions">
      <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="btn btn-primary">
        <i class="fa-solid fa-envelope"></i> Contáctenos Ahora
      </a>
      <a href="<?php echo esc_url( home_url('/nuestro-equipo/') ); ?>" class="btn btn-outline">
        <i class="fa-solid fa-users"></i> Conocer al Equipo
      </a>
    </div>
  </div>
</section>

<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
