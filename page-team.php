<?php get_header(); ?>

<div data-router-wrapper>
  <div  data-router-view="page">

    <?php get_template_part( 'partials/global/banner' ); ?>

    <main role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/page/team' ); ?>

      <?php endwhile; ?>

      <?php get_template_part( 'partials/global/pagination-page' ); ?>

    </main>

  </div>
</div>

<?php get_footer(); ?>