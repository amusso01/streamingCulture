<?php 
$events = get_field('evento');
?>

<section class="u-mt-45 u-mb-70">
  <?php if ($events): ?>
    <?php foreach($events as $index => $event) : ?>

      <?php if($index !== 0) :?>
      <div class="u-w-full u-h-1 u-bg-text u-mb-40"></div>
      <?php endif; ?>

      <article class="u-grid u-grid-cols-1 sm:u-grid-cols-2 u-gap-x-45 u-gap-y-30 l-container--small u-pb-30">
        <figure class="u-relative u-w-full u-h-280" >
          <img class="lazyload u-cover" data-srcset="<?php bml_the_image_srcset($event['immagine'])?>"  data-sizes="auto"  alt="<?php echo $event['titolo'] ?>">
        </figure>
        <div>
          <p class="u-mb-30 u-font-semibold"><?php echo $event['titolo'] ?></p>
          <div class="u-rich-text js-richText">
            <?php echo $event['descrizione']; ?>
          </div>
        </div>
      </article>

  
    <?php endforeach; ?>

  <?php endif; ?>

</section>


