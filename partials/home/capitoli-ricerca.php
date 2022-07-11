<?php 
$primoCapitolo = get_field('chi_produce_cultura');
$secondoCapitolo = get_field('come_cambiata');
$terzoCapitolo = get_field('come_ha_reagito');
$quartoCapitolo = get_field('approfondimenti');

$Capitoli = array( 
            '01'=>$primoCapitolo,   
            '02'=>$secondoCapitolo, 
            '03'=>$terzoCapitolo, 
            '04'=>$quartoCapitolo );
?>

<?php if($Capitoli) : ?>
  <?php foreach($Capitoli as $key => $capitolo) : ?>
    <section class="c-ricercaLink u-border-t u-border-white <?php echo $capitolo['capitolo_attivo'] ? 'u-bg-text' : 'u-bg-purple-lighter u-pointer-events-none' ?>"  data-s2r="single" data-s2r-type="stagger-fade-in" >
      <a class="u-px-100 u-py-60 u-block" href="<?php echo $capitolo['link']['url'] ?>">

        <div class="l-container u-relative  <?php echo $capitolo['capitolo_attivo'] ? 'u-text-white' : 'u-text-text u-opacity-30' ?>">
          <p class="u-text-21 sm:u-text-36 xl:u-text-40 u-relative -u-left-70" ><?php echo $key ?></p>
          <h3 class=" u-h1 u-font-bold u-mb-50"><?php echo $capitolo['titolo'] ?></h3>
          <p class=" u-w-full md:u-w-2/3 u-pb-30 xl:u-text-25" ><?php echo $capitolo['paragrafo'] ?></p>
          <div class=" o-arrow u-absolute u-top-1/2 u-right-0 -u-translate-y-1/2 u-scale-125 -u-translate-x-80 u-duration-medium u-transition-all <?php echo $capitolo['capitolo_attivo'] ? 'u-block' : 'u-hidden' ?>">
            <?php get_template_part( 'assets/dist/svgs/svg', 'homeArrow' ) ?>
          </div>
        </div>

      </a>
    </section>
  <?php endforeach; ?>
<?php endif; ?>

    <section class="c-whoBanner u-px-100 u-py-150">
      <div class="l-container u-flex u-items-center u-justify-between">
        <h3 class=" u-h1 u-font-bold ">Who's Your Dealer?</h3>
        <a href="<?php echo site_url('/whos-your-dealer') ?>" class="o-button u-mr-0">Scopri di più</a>
      </div>
    </section>
