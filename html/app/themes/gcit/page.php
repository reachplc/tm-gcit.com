<?php
/*
Template Name: Page
*/
?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Careers&Development
 * @since Careers&Development 1.0
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
              <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
              <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
              </div>
              <?php endif; ?>

              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->
          </div>
          <div class="entry-content">

                  <div class="large-5 left" style="display: flex; background-color: #333;">
                      <div class="innermenu">
                            
                            <div class="icon-pointer">
                              <a href="<?php get_template(); ?>/gcit/contentwatch/regional-resources/writer">
                              <img class=" size-full wp-image-255 alignnone" style="padding-top: 1px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iconpointer_writer.png" alt="Writer" />
                              </a>
                              <br /> 
                              <a href="<?php get_template(); ?>/gcit/contentwatch/regional-resources/production">
                              <img class="size-full wp-image-255 alignnone" style="padding-top: 8px;" src="<?php echo get_template_directory_uri(); ?>/images/iconpointer_production.png" alt="Production" />
                              </a>
                            </div>

                            
                      </div>
                </div>



                  <div class="large-7 right">
                                  <div class="content-fill">
                                        <div class="body-content">

                                          <?php the_content(); ?>

                                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>


                                        </div>
                                   </div>
                          </div>






            
  
          </div><!-- .entry-content -->

          <footer class="entry-meta">
            <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-meta -->
        </article><!-- #post -->

        <?php comments_template(); ?>
      <?php endwhile; ?>
  </main><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
