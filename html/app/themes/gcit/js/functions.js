/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function( $ ) {
  var body    = $( 'body' ),
      _window = $( window );

  /**
   * Adds a top margin to the footer if the sidebar widget area is higher
   * than the rest of the page, to help the footer always visually clear
   * the sidebar.
   */
  $( function() {
    if ( body.is( '.sidebar' ) ) {
      var sidebar   = $( '#secondary .widget-area' ),
          secondary = ( 0 == sidebar.length ) ? -40 : sidebar.height(),
          margin    = $( '#tertiary .widget-area' ).height() - $( '#content' ).height() - secondary;

      if ( margin > 0 && _window.innerWidth() > 999 )
        $( '#colophon' ).css( 'margin-top', margin + 'px' );
    }
  } );

  /**
   * Enables menu toggle for small screens.
   */
  ( function() {
    var nav = $( '#site-navigation' ), button, menu;
    if ( ! nav )
      return;

    button = nav.find( '.menu-toggle' );
    if ( ! button )
      return;

    // Hide button if menu is missing or empty.
    menu = nav.find( '.nav-menu' );
    if ( ! menu || ! menu.children().length ) {
      button.hide();
      return;
    }

    $( '.menu-toggle' ).on( 'click.twentythirteen', function() {
      nav.toggleClass( 'toggled-on' );
    } );
  } )();

  /**
   * Makes "skip to content" link work correctly in IE9 and Chrome for better
   * accessibility.
   *
   * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
   */
  _window.on( 'hashchange.twentythirteen', function() {
    var element = document.getElementById( location.hash.substring( 1 ) );

    if ( element ) {
      if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
        element.tabIndex = -1;

      element.focus();
    }
  } );

  /**
   * Arranges footer widgets vertically.
   */
  if ( $.isFunction( $.fn.masonry ) ) {
    var columnWidth = body.is( '.sidebar' ) ? 228 : 245;

    $( '#secondary .widget-area' ).masonry( {
      itemSelector: '.widget',
      columnWidth: columnWidth,
      gutterWidth: 20,
      isRTL: body.is( '.rtl' )
    } );
  }
} )( jQuery );

//show / hide content
// toggles the slickbox on clicking the noted link
(function($) {
    $('.hiddenContent').hide();
    $('.showContent').click(function() {
        $('.hiddenContent').slideDown(400);
        return false;
    });
    $('.hideContent').click(function() {
        $('.hiddenContent').slideUp(400);
        return false;
    });
})( jQuery );



(function($){
$('.js-toggle__button').click(function() {
  console.log('Click');
  $(this).parents('.toggle').find('.js-toggle__hidden').toggleClass('visuallyhidden');
});

})( jQuery );



(function( $ ){

  var mainNav = mainNav || {};
  
  //  Default Configs
  mainNav.config = {

  };

  //  Set all li with child as closed
  mainNav.init = function(config) {
    
    // provide for custom configuration via init()
    if (config && typeof(config) === 'object') {
      $.extend(sectionNav.config, config);
    }
    
    $('#js-navicon').on('click', mainNav.toggleNav);
    
  }
  
  mainNav.toggleNav = function() {
    $('#menu-main-menu').toggleClass('ss_visible');
  }
  
  //  OnLoad
  $(document).ready(function() {

    // To extend the default config settings
    // pass a object as an argument for the init function
    // eg. mainNav.init({ 'parent': '#js-section-nav'});
    mainNav.init();

  });

})( jQuery );



;(function( $ ){

  function goToScrollDiv(link){
    // Reove "link" from the ID
    var href = link;
    //link = link.remove("#", "");
    $('html,body').animate({
      scrollTop: $(href).offset().top-96}
      , 800);
    }

    $(".nav-mid-wrap > a").click(function(e) {
          // Prevent a page reload when a link is pressed
          e.preventDefault();
        var link = $(this).attr('href');
          // Call the scroll function
        goToScrollDiv(link);
    });

    
    
})( jQuery );