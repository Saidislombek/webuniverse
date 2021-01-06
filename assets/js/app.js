/* Animated Scroll Down to Anchor */
document.addEventListener('DOMContentLoaded', function(){
  const easeFunctions = {
    easeInQuad: function (t, b, c, d) {
      t /= d;
      return c * t * t + b;
    },
    easeOutQuad: function (t, b, c, d) {
      t /= d;
      return -c * t* (t - 2) + b;
    }
  }
  const moveTo = new MoveTo({
    ease: 'easeOutQuart'
  }, easeFunctions);
  const triggers = document.getElementsByClassName('js-trigger');
  for (var i = 0; i < triggers.length; i++) {
    moveTo.registerTrigger(triggers[i]);
  }
});

// плагина masked input
$.mask.definitions['9'] = '';
$.mask.definitions['d'] = '[0-9]';
$("#tel-input").mask("+998 (dd) ddd-dd-dd");
  
  //  Interactive Circle Cursor In JavaScript – Pointer.js
  init_pointer({
    pointerColor: "red",
    ringSize: 10,
    ringClickSize: 8
  });