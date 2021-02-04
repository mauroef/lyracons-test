if (typeof jQuery === 'undefined') {
  throw new Error('jQuery plugins need to be before this file');
}

$.Init = {};

$.Init.btnInicioEvent = {
  selector: '#inicio',
  activate: function () {
    $(this.selector).one('click', function (e) {
      e.preventDefault();
      let items = $('.main > .main__item');

      if (items.length > 0) {
        items.remove();
      }
    });
  },
};

$.Init.btnComprasEvent = {
  selector: '#compras',
  activate: function () {
    $(this.selector).hover(handlerIn, handlerOut);

    function handlerIn() {
      $('.sidebar').css('background-color', '#c04b83');
    }

    function handlerOut() {
      $('.sidebar').css('background-color', '#f33827');
    }
  },
};

$.Init.btnNosotrosEvent = {
  selector: '#nosotros',
  activate: function () {
    $(this.selector).one('click', function (e) {
      e.preventDefault();
      $('.sidebar > span.sidebar__text').text('Hola Mundo!');
    });
  },
};

$(function () {
  $.Init.btnInicioEvent.activate();
  $.Init.btnComprasEvent.activate();
  $.Init.btnNosotrosEvent.activate();
});
