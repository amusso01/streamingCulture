<?php get_header(); ?>

<div data-router-wrapper>
  <div  data-router-view="home">

    <?php get_template_part( 'partials/home/banner' ); ?>

    <main role="main">


      <?php get_template_part( 'partials/home/ricerca' ); ?>
      <?php get_template_part( 'partials/home/capitoli-ricerca' ); ?>


    </main>

    <!-- <?php get_template_part( 'partials/home/modal' ) ?> -->

  </div>
</div>

<?php get_footer(); ?>