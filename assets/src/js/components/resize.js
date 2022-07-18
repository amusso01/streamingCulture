/* ***** ----------------------------------------------- ***** **
** ***** Resize event
** ***** ----------------------------------------------- ***** */

const resizeEvent = () => {
  const iframes = document.querySelectorAll('.js-iframe-calibro')

  if (typeof(iframes) != 'undefined' && iframes != null)
  {
    window.addEventListener("resize", debounce( resizeContent, 150 ));

  }

  // Function with stuff to execute
  function resizeContent() {
    // Do loads of stuff once window has resized
    let container = document.querySelector('.u-rich-text')
    iframes.forEach(iframe => {
      
      iframe.style.left = '-'+container.getBoundingClientRect().left+'px'
      
    });
  }

}

// Debounce
function debounce(func, time = 100){
  var timer;
  return function(event){
      if(timer) clearTimeout(timer);
      timer = setTimeout(func, time, event);
  };
}



// Eventlistener


const init = () => {
  resizeEvent();
}

export { init };