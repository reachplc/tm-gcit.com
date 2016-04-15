<?php
/*
Template Name: Page - Writer
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
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/GCIT_logo.png"' ); ?>" >
              </div>
             </div>
            </header><!-- .entry-header -->
          </div>


          <div class="entry-content">
          
               <div class ="row flex">
                  <div class="large-5 left grey-dark">
                      <div class="innermenu">
                            <div class="icon-pointer">
                              <a href="<?php echo esc_url( home_url( '/contentwatch/regional-resources/writer' ) ); ?>">
                              <img class=" size-full wp-image-255 alignnone" style="padding-top: 1px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/iconpointer_right_writer.png' ); ?>" alt="Writer" width="222" height="142" />
                              </a>
                              <br /> 
                              <a href="<?php echo esc_url( home_url( '/contentwatch/regional-resources/production' ) ); ?>">
                              <img class="icon-pointer-img" src="<?php echo esc_url( get_template_directory_uri() . '/images/iconpointer_production.png' ); ?>" alt="Production" />
                              </a>
                            </div>
                            <div class="secondary-nav-writer">
                            <?php wp_nav_menu( array( 'theme_location' => 'writer-menu' ) ); ?>
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
              </div>
      
          </div><!-- .entry-content -->


      <?php endwhile; ?>
  </main><!-- #primary -->


<?php get_footer(); ?>
