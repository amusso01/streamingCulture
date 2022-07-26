<?php 

$next = get_field('next_page');
$prev = get_field('prev_page');

?>

<section class="u-border-t-1 u-border-text">
  <div class="l-container--small">
    <div class="u-py-50 u-flex u-items-center u-justify-between">
      <?php if($next): ?>
      <div class="u-flex u-items-center u-space-x-20 ">
        <i><?php echo get_template_part( 'assets/dist/svgs/svg', 'prev' )  ?></i>
        <a class="u-text-20 sm:u-text-40 u-font-bold u-transition-colors u-duration-normal  hover:u-text-orange" href="<?php echo $next['link']  ?>"><?php echo $next['testo'] ?></a>
      </div>
      <?php endif ?>
      <?php if($prev): ?>
        <div class="u-flex u-justify-end u-items-center u-space-x-20 ">
          <a class=" u-text-20 sm:u-text-40 u-font-bold u-transition-colors u-duration-normal hover:u-text-orange" href="<?php echo $prev['link']  ?>"><?php echo $prev['testo'] ?></a>
          <i class="u-rotate-180 u-relative u-top-3" ><?php echo get_template_part( 'assets/dist/svgs/svg', 'prev' )  ?></i>
      </div>
      <?php endif ?>
    </div>
  </div>
</section>

