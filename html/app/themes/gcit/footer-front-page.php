<?php
/**
 * Footer for the front-page
 *
 * @package WordPress
 * @subpackage GCIT
 * @since GCIT 1.0
 */
?>
<footer style="clear: both">
	<div class="wrapper">
		<div class="row">
			<div class="large-3 columns"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gcit_logo.png' ); ?>" class="footer"/>
			</div>
			<div class="copyright large-9 columns text-right m-tb">
				<span class="grey-mid-txt">Copyright &copy; Trinity Mirror plc <?php the_date( 'Y' ) ?> | Website by Trinity Mirror Creative</span>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

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

</body>

</html>
