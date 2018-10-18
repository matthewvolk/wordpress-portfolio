(function() {
  var Menu = (function () {
    var burger = document.querySelector('.burger');
    var overlayMenu = document.querySelector('.overlaymenu');

    var active = false;

    var toggleMenu = function () {
      if (!active) {
        burger.classList.add('burger--close');
        overlayMenu.classList.add('overlaymenu--open');

        active = true;
      } else {
        burger.classList.remove('burger--close');
        overlayMenu.classList.remove('overlaymenu--open');

        active = false;
      }
    }

    var bindActions = function() {
      burger.addEventListener('click', toggleMenu, false);
    };

    var init = function() {
      bindActions();
    };

    return {
      init: init
    };


  }());

  Menu.init();

}());