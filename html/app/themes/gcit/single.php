<?php
/**
 * The template for displaying all single posts
 *
 * @package Careers & Development
 */

?>

	<?php get_header(); ?>
  <div class="row z-fix" >
    <div class="large-12 columns">

    </div>
  </div>
</div>

<div id="primary" class="content-area">


					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

<div class="row grey">
					  <div class="wrapper clearfix"><?php twentythirteen_post_nav(); ?></div></div>
					<?php comments_template(); ?>

			<?php endwhile; ?>


</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
