

<div x-data="{ modalShown: $persist(false).using(sessionStorage) , isModalOpen : null } " 
  x-init="modalShown == true ? isModalOpen = false : isModalOpen = true"
  x-show="isModalOpen"
  x-cloak
  x-transition
  class=" u-fixed u-duration-medium u-transition-opacity u-flex u-items-center u-justify-center u-top-0 u-left-0 u-bottom-0 u-w-full u-z-header u-h-full u-bg-purple-lighter" id="modalHome">
  <div  @click.outside="isModalOpen = false , modalShown = true" class="c-modal u-h-280 sm:u-h-400 u-bg-white  u-w-full sm:u-w-2/3 u-mx-auto u-flex u-flex-col u-items-center u-justify-center">
      <h3 class="u-mb-45 u-font-normal u-text-center sm:u-text-left u-text-36 sm:u-text-60 u-italic">Who's <span class=" u-font-bold u-not-italic" >your Dealer? </span></h3>
      <a @click="isModalOpen = false, modalShown = true"  href="<?php echo get_field('link_questionario', 'options') ?>" target="_blank" noopener noreferrer  class="u-text-25 u-block u-mb-15 u-py-8 u-px-10 u-rounded-full u-border u-border-text u-duration-medium hover:u-text-white hover:u-bg-text">Compila il questionario</a>
      <p class="u-text-orange u-font-bold">IN 3 MINUTI</p>
  </div>
</div>