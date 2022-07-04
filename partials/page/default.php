<section class="l-container--small"  data-s2r="single" data-s2r-type="stagger-fade-in" >
  <div class="u-grid u-grid-cols-7">
      <div class="o-social">
        <a data-s2r-el href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink() ?>"><?php get_template_part( 'assets/dist/svgs/svg', 'facebook' ) ?></a>
        <a data-s2r-el href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink() ?>"><?php get_template_part( 'assets/dist/svgs/svg', 'twitter' ) ?></a>
        <a data-s2r-el href="https://www.linkedin.com/shareArticle?url=<?php echo get_the_permalink() ?>"><?php get_template_part( 'assets/dist/svgs/svg', 'linkedin' ) ?></a>
      </div>
      <?php if ( get_the_content() ) : ?>
        <div class="u-rich-text u-mt-30 u-mb-50 u-col-span-6 md:u-mt-50 md:u-mb-70 js-richText">
          <?php the_content(); ?>
        </div>
      <?php endif; ?>
  </div>
</section>


