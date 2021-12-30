(function ($) {
  Drupal.behaviors.mymodule = {
    attach: function (context, settings) {
      $(document).ready(function () {
// Create a clone of the menu, right next to original.
        $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();
        window.scrollIntervalID = setInterval(stickIt, 10);

        function stickIt() {

          var orgElementPos = $('.original').offset();
          var orgElementTop = orgElementPos.top;

          if ($(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.
            var orgElement = $('.original');
            var coordsOrgElement = orgElement.offset();
            var leftOrgElement = coordsOrgElement.left;
            var widthOrgElement = orgElement.css('width');
            $('.header .cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
            $('.original').css('visibility','hidden');
          } else {
            // not scrolled past the menu; only show the original menu.
            $('.header .cloned').hide();
            $('.original').css('visibility','visible');
          }
        }
      })
    }
  };
})(jQuery);