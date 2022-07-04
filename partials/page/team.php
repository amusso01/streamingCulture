
<section class="l-container--small u-mt-30 u-mb-70">
  <h2 class="u-h2" >Università degli Studi di Milano-Bicocca</h2>

  <div class="u-grid u-grid-cols-2 md:u-grid-cols-3 lg:u-grid-cols-4 u-gap-x-35 sm:u-gap-x-67 u-gap-y-55 u-mt-25">
    <?php if(get_field('universita_statale')) : ?>
    <?php foreach(get_field('universita_bicocca') as $team) : ?>
    <div class="o-team-card">

      <figure class="u-mb-15">
        <img class="lazyload" data-srcset="<?php bml_the_image_srcset($team['immagine'])?>"  data-sizes="auto"  alt="<?php echo $team['nome_cognome'] ?>">
      </figure>


      <p class="u-font-bold u-text-18 u-mb-15" ><?php echo $team['nome_e_cognome'] ?></p>

      <p class="u-text-12"><?php echo $team['bio'] ?></p>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<div class="u-w-full u-h-1 u-bg-text"></div>

<section class="l-container--small u-mt-30 u-mb-70">
  <h2 class="u-h2" >Università degli Studi di Milano-Bicocca</h2>

  <div class="u-grid u-grid-cols-2 md:u-grid-cols-3 lg:u-grid-cols-4 u-gap-x-35 sm:u-gap-x-67 u-gap-y-55 u-mt-25">
    <?php if(get_field('universita_statale')) : ?>
    <?php  foreach(get_field('universita_statale') as $team) : ?>
    <div class="o-team-card">

      <figure class="u-mb-15">
        <img class="lazyload" data-srcset="<?php bml_the_image_srcset($team['immagine'])?>"  data-sizes="auto"  alt="<?php echo $team['nome_cognome'] ?>">
      </figure>


      <p class="u-font-bold u-text-18 u-mb-15" ><?php echo $team['nome_e_cognome'] ?></p>

      <p class="u-text-12"><?php echo $team['bio'] ?></p>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<div class="u-w-full u-h-1 u-bg-text"></div>

<section class="l-container--small u-mt-30 u-mb-70">
  <h2 class="u-h2" >CheFare</h2>

  <?php if(get_field('universita_statale')) : ?>
  <div class="u-rich-text u-mt-25">
    <?php echo get_field('che_fare_bio') ?>
  </div>
  <?php endif; ?>
</section>

<div class="u-w-full u-h-1 u-bg-text"></div>

<section class="l-container--small u-mt-30 u-mb-90">
  <h2 class="u-h2" >Calibro</h2>
  
  <?php if(get_field('universita_statale')) : ?>
  <div class="u-rich-text u-mt-25">
    <?php echo get_field('calibro_bio') ?>
  </div>
  <?php endif; ?>
</section>



