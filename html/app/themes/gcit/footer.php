<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage GCIT
 * @since GCIT 1.0
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="row cyan-dark">
    <div class="wrapper-footer">
      <br clear=all />
      <!-- <div class="large-3 columns no-pad m-tb">
        <?php if ( ! function_exists( 'dynamic_sidebar' ) ||
! dynamic_sidebar( 'foot-col-1' ) ) : ?>
        <?php endif; ?>
      </div>
      <div class="large-3 columns m-tb">
        <?php if ( ! function_exists( 'dynamic_sidebar' ) ||
! dynamic_sidebar( 'foot-col-1a' ) ) : ?>
        <?php endif; ?>
      </div>
      <div class="large-6 columns no-pad m-tb">
        <?php if ( ! function_exists( 'dynamic_sidebar' ) ||
! dynamic_sidebar( 'foot-col-2' ) ) : ?>
        <?php endif; ?>
      </div> -->
    </div>
    <!-- wrapper -->
  </div>
  <div class="row black-bk">
    <div class="copyright wrapper top">
      <div class="large-3 columns no-pad m-tb"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/trinity-logo-grey.png' ); ?>" /></div>
      <div class="copyright large-9 columns text-right no-pad m-tb"><span class="grey-mid-txt">Copyright &copy; Trinity Mirror plc <?php the_date( 'Y' ) ?> | Website by Trinity Mirror Creative</span>
      </div>
    </div>
  </div>
</footer>
</div>
<!-- #page -->



<script>
 (function( $ ){

$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});

})( jQuery );


</script>


<script>

jQuery(document).ready(function($) {

  $('.nav ul li').hover(
    function () {
      //show its submenu
      $('ul:first', this).css('display', 'block');
    },
    function () {
      //hide its submenu
      $('ul:first', this).css('display', 'none');
    }
  );

});

</script>

<?php wp_footer(); ?>

<script>
<?php if ( 'useful-guides' == $page ) {?>
;(function( $ ){
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".row").fitVids();
  });
})( jQuery );
<?php } ?>
</script>

</body>

</html>
