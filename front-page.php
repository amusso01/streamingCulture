<?php get_header(); ?>

<div data-router-wrapper>
  <div  data-router-view="home">

    <?php get_template_part( 'partials/home/banner' ); ?>

    <main role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/page/default' ); ?>

      <?php endwhile; ?>

    </main>

  </div>
</div>

<?php get_footer(); ?>