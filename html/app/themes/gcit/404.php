<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Careers & Development
 */

get_header(); ?>
<div class="row z-fix" >
    <div class="large-12 columns">
     
    </div>
  </div>
</div>

	<div id="primary" class="content-area">

    <div class="cyan-light">
            <header class="entry-header wrapper">
              <h2 class="entry-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h2>
            </header><!-- .entry-header -->
        </div>

    <div class="row">
    	
		

			
				<div class="wrapper clearfix">
					<div class="page-content">
						<div class="large-6 columns no-pad">
						<h3><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h3>
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
</div>
<div class="large-6 columns">
							<?php get_search_form(); ?>
						</div>
						</div><!-- .page-content -->
					</div><!-- .page-wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>