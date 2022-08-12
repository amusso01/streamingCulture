<?php 
$brands = get_field('loghi_footer', 'options');

?>

<footer class="u-bg-text u-text-white u-py-40 sm:u-py-60" role="contentinfo">
  <div class="l-container--wide">
    <div class="u-flex u-flex-wrap u-gap-y-60 u-gap-x-40 md:u-justify-start lg:u-justify-between">
      <div class="u-flex u-flex-col  u-mb-40 sm:u-mb-0 sm:u-gap-y-30 ">
         <h4 class=" u-italic u-text-20 sm:u-text-25 u-font-normal">Un progetto di ricerca a cura di</h4>
         <div class="u-flex u-gap-x-30 u-items-center u-flex-col u-gap-y-15 md:u-flex-row" >
            <a href="<?php echo $brands['universita_bicocca']['link']  ?>"><img  src="<?php echo $brands['universita_bicocca']['immagine'] ?>" alt="Uni Bicocca logo"></a> 
            <a href="<?php echo $brands['uni_milano']['link']  ?>"><img src="<?php echo $brands['uni_milano']['immagine'] ?>" alt="Uni Milano logo"></a> 
         </div>
      </div>
      <div class="u-flex u-flex-col  u-mb-40 sm:u-mb-0 sm:u-gap-y-30">
        <h4 class=" u-italic u-text-20 sm:u-text-25 u-font-normal">Con il contributo di</h4>
         <div class="u-flex u-items-center" >
         <a href="<?php echo $brands['cariplo']['link']  ?>"><img src="<?php echo $brands['cariplo']['immagine'] ?>" alt="Fondazione Cariplo logo"></a> 
         </div>
      </div>
      <div class="u-flex u-flex-col  u-mb-40 sm:u-mb-0 sm:u-gap-y-30">
        <h4 class=" u-italic u-text-20 sm:u-text-25 u-font-normal">Con la collaborazione di</h4>
         <div class="u-flex u-gap-x-30 u-items-center u-mt-20 u-flex-col u-gap-y-25 xs:u-flex-row">
         <a href="<?php echo $brands['che_fare']['link'] ?>"><img src="<?php echo $brands['che_fare']['immagine'] ?>" alt="Che Fare logo"></a> 
         <a href="<?php echo $brands['calibro']['link'] ?>"><img src="<?php echo $brands['calibro']['immagine'] ?>" alt="Calibro logo"></a> 
         </div>
      </div>
    </div>

  </div>
</footer>
<div class="l-container--wide c-after-footer ">
  <div class="u-flex u-flex-wrap u-flex-col sm:u-flex-row sm:u-justify-end u-gap-x-4 u-py-4 sm:u-py-3" >
    <p class="u-text-14 u-font-medium">Designed by <a class="hover:u-underline u-font-semibold" href="mailto:bottobaggy@gmail.com">Alessandra Botto</a> &</p>
    <p class="u-text-14 u-font-medium">Developed by <a class="hover:u-underline u-font-semibold" href="mailto:musso.a@icloud.com">Andrea Musso</a></p>
  </div>
</div>

