/* 
*
Javascript Search Bar
 */
(function($) {

        jQuery('.search-icon').click(function() {
        jQuery(".site-header").toggleClass("resize-header");
        jQuery(".site-branding").toggleClass("branding-resize");
        jQuery(".search-bar").toggleClass("search-open");
        jQuery(".search-icon").toggleClass("search-icon-open");
 })

})(jQuery);