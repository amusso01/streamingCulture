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

        if(this.on === true){
          this.addOverflow();
        }else{
          this.removeOverfolw()
        }

    },

    addOverflow() {
      document.body.classList.toggle('s-noscroll')
    },

    removeOverfolw(){
      document.body.classList.remove('s-noscroll')
    }

  })

  Alpine.start();
}

export { init };
