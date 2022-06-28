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
    }
  })

  Alpine.start();
}

export { init };
