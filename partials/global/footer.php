<?php 
$brands = get_field('loghi_footer', 'options');

?>

<footer class="u-bg-text u-text-white u-py-40 sm:u-py-60" role="contentinfo">
  <div class="l-container--wide">
    <div class="u-flex u-flex-wrap u-gap-y-60 u-gap-x-40 md:u-justify-start lg:u-justify-between">
      <div class="u-flex u-flex-col u-gap-y-20 sm:u-gap-y-30 ">
         <h4 class=" u-italic u-text-20 sm:u-text-25 u-font-normal">Un progetto di ricerca a cura di</h4>
         <div class="u-flex u-gap-x-30 u-items-center u-flex-col u-gap-y-15 md:u-flex-row" >
            <img  src="<?php echo $brands['universita_bicocca'] ?>" alt="Uni Bicocca logo">
            <img src="<?php echo $brands['uni_milano'] ?>" alt="Uni Milano logo">
         </div>
      </div>
      <div class="u-flex u-flex-col u-gap-y-20 sm:u-gap-y-30">
        <h4 class=" u-italic u-text-20 sm:u-text-25 u-font-normal">Con il contributo di</h4>
         <div class="u-flex u-items-center" >
          <img src="<?php echo $brands['cariplo'] ?>" alt="Fondazione Cariplo logo">
         </div>
      </div>
      <div class="u-flex u-flex-col u-gap-y-20 sm:u-gap-y-30">
        <h4 class=" u-italic u-text-20 sm:u-text-25 u-font-normal">Con la collaborazione di</h4>
         <div class="u-flex u-gap-x-30 u-items-center u-mt-20 u-flex-col u-gap-y-25 xs:u-flex-row">
         <img src="<?php echo $brands['che_fare'] ?>" alt="Che Fare logo">
         <img src="<?php echo $brands['calibro'] ?>" alt="Calibro logo">
         </div>
      </div>
    </div>
  </div>
</footer>

