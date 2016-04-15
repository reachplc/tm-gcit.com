<?php
/*
Template Name: Page - National
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
          <div class="entry-content">

              <div class ="row flex">
                  <div class="large-5 left grey-dark">
                      <div class="innermenu-resources">
                            <p>To view the relevant information select one of the icons below:</p>
                            <div class="icon-pointer-resources">
                              <a href="<?php echo esc_url( home_url( '/contentwatch/national-resources/writer' ) ); ?>">
                              <img class="icon-pointer-img" width="140" style="padding-left: 0px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/iconpointer_writer.png' ); ?>" alt="Writer" />
                              </a>
                            </div>
                            <div class="icon-pointer-resources">
                              <a href="<?php echo esc_url( home_url( '/contentwatch/national-resources/production' ) ); ?>">
                              <img class="icon-pointer-img" width="140" src="<?php echo esc_url( get_template_directory_uri() . '/images/iconpointer_production.png' ); ?>" alt="Production" />
                              </a>
                            </div>
                      </div>
                </div>

                  <div class="large-7 right">
                                  <div class="content-fill">
                                        <div class="body-content-resources">
                                          <?php the_content(); ?>
                                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

                                        </div>
                                   </div>
                          </div>
                          </div>
          </div><!-- .entry-content -->

       
      <?php endwhile; ?>
  </main><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
