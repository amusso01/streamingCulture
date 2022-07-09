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


export { HomeRenderer }
