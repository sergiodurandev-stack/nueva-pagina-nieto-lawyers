<?php get_header(); ?>

<main class="site-main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="container" style="padding:80px 24px">
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
