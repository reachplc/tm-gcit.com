<?php
/**
 * Template Name: Page - No Side Menu
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage GCIT
 * @since GCIT 1.0
 */

?>
	<?php get_header(); ?>
  <div class="row z-fix" >
    <div class="large-12 columns">

    </div>
  </div>
</div>

  <main id="primary" class="content-area">

    <?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row black-bk">
            <header class="entry-header wrapper">
                <div class="large-12">
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
              <div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
              </div>
				<?php endif; ?>
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <div class="entry-title-logo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/gcit_logo.png"' ); ?>" >
              </div>
             </div>
            </header><!-- .entry-header -->
          </div>


          <section class="entry-content">


                                  <div class="content-leftnomenu">

											<?php the_content(); ?>

                                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>


                                   </div>









          </section><!-- .entry-content -->


		<?php endwhile; ?>
  </main><!-- #primary -->


<?php get_footer(); ?>
