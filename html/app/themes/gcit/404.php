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
							<h2 class="entry-title"><?php esc_html_e( 'Not Found', 'gcit' ); ?></h2>
						</header><!-- .entry-header -->
				</div>

		<div class="row">




				<div class="wrapper clearfix">
					<div class="page-content">
						<div class="large-6 columns no-pad">
						<h3><?php esc_html_e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'gcit' ); ?></h3>
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'gcit' ); ?></p>
</div>
<div class="large-6 columns">
							<?php get_search_form(); ?>
						</div>
						</div><!-- .page-content -->
					</div><!-- .page-wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
