/* 
*
Javascript Search Bar
 */
(function($) {

    $(".search-icon").click(function() {
        $(".search-bar").toggleClass('search-display');

    });

    $(".navicon").click(function() {
        $(".search-bar").removeClass('search-display');

    });

    $(".search-icon").click(function() {
        $(".menu").removeClass('ss_visible');
    });

})(jQuery);