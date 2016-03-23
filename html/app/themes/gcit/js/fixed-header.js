
;(function( $ ){
  
  // fade in fixed header on scroll
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('.head-main').addClass('fixed-header fadeInDown');

      } else {$('.head-main').removeClass('fixed-header fadeInDown');}
    });
})( jQuery );