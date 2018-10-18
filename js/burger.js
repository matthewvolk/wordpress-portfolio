(function() {
  var Menu = (function () {
    var burger = document.querySelector('.burger');
    var overlayMenu = document.querySelector('.overlaymenu');
    var menuItems = document.querySelectorAll('.overlaymenu__item');

    var active = false;

    var toggleMenu = function () {
      if (!active) {
        burger.classList.add('burger--close');
        overlayMenu.classList.add('overlaymenu--open');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.add('overlaymenu__item--active');
        }

        active = true;
      } else {
        burger.classList.remove('burger--close');
        overlayMenu.classList.remove('overlaymenu--open');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.remove('overlaymenu__item--active');
        }

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