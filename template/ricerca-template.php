<?php
/**
* Template Name: Ricerca Template
*
*/
?>

<?php get_header(); ?>

<div data-router-wrapper>
  <div  data-router-view="ricerca">

    <?php get_template_part( 'partials/ricerca/ricerca-hero' ); ?>

    <main role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/page/default' ); ?>

      <?php endwhile; ?>

      <?php if(!is_page(26) || !is_page('whos-your-dealer') ) : ?>
        <?php get_template_part( 'partials/global/pagination-page' ); ?>
      <?php endif; ?>
    </main>

  </div>
</div>

<?php get_footer(); ?>