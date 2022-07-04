<?php get_header(); ?>

<div data-router-wrapper>
  <div  data-router-view="page">

    <?php get_template_part( 'partials/global/banner' ); ?>

    <main role="main ">

      <p class="u-mt-40 u-mb-40 u-text-center">Per info e contatti compilare il form o scrivere una mail a</p>
      <a href="mailto:info@streamingculture.it" class="u-text-center u-block u-text-30 u-font-bold hover:u-text-orange">info@streamingculture.it</a>

      <div class="u-mt-40 l-container--small ">

      <?php if ( get_the_content() ) : ?>
        <div class="u-rich-text c-contact-form js-richText u-mb-70">
          <?php the_content(); ?>
        </div>
      <?php endif; ?>

      </div>


    </main>

  </div>
</div>

<?php get_footer(); ?>