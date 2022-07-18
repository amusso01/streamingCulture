<?php 
  $imageBg  = get_field('immagine_di_background');
  $colorBg  = get_field('colore_background');
?>

<section class=" u-pt-100 sm:u-pt-230 u-pb-35 u-bg-repeat-x" style="background-color:<?php echo $colorBg ?>; background-image: url(<?php echo $imageBg ?>)" data-s2r="single" data-s2r-type="stagger-fade-in">
  <div class="l-container">
    <div class="u-grid u-grid-cols-7">
      <h1 class="<?php echo  is_page( 'whos-your-dealer' ) ? 'u-text-text' : 'u-text-white' ?> u-col-span-7 sm:u-col-start-2 sm:u-col-span-6 u-text-40 sm:u-text-80" data-s2r-el data-s2r-duration="1.7"]><?php the_title(); ?></h1>
    </div>
  </div>
</section>