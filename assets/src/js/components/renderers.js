import Highway from "@dogstudio/highway";

// Home
class HomeRenderer extends Highway.Renderer {
	onEnter() {
    let logo = document.getElementById('homeLogo')
    logo.classList.add('u-hidden')
  }

	// Hooks/methods
  onLeaveCompleted(){		
    let logo = document.getElementById('homeLogo')
    logo.classList.remove('u-hidden')
	}

}

// Ricerca
class RicercaRenderer extends Highway.Renderer {
	
  onEnterCompleted() {
    const iframes = document.querySelectorAll('.js-iframe-calibro')

    iframes.forEach(iframe => {
      iframe.style.left = '-'+iframe.getBoundingClientRect().left+'px'
    });

  }
}


export { HomeRenderer, RicercaRenderer }
