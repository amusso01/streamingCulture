/* ***** ----------------------------------------------- ***** **
** ***** Global JS
** ***** ----------------------------------------------- ***** */

import Alpine from 'alpinejs';
import 'lazysizes';
import 'lazysizes/plugins/bgset/ls.bgset';

const init = () => {
  window.Alpine = Alpine;


  Alpine.store('openMenu', {
    on: false,
 
    toggle() {
        this.on = ! this.on
    },

    toggleOverflow() {
      document.body.classList.toggle('s-noscroll');
    }
  })

  Alpine.start();
}

export { init };
