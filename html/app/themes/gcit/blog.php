<?php
/**
 * Template Name: Blog
 *
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
		<div class="row">
		<div class="large-12 columns">
				<div id="content" class="site-content" role="main">

								<div class="row cyan-dark">
						<header class="entry-header wrapper">


							<h2 class="entry-title"><?php the_title(); ?></h2>
						</header><!-- .entry-header -->
					</div>


					<div class="row">

						 <div class="wrapper top">

								<?php if ( have_posts() ) : ?>

								<?php while ( have_posts() ) : the_post(); ?>

										<div id="post-<?php the_ID(); ?>">

												<?php the_content( '' ); ?>

										</div>

								<?php endwhile; ?>

								<div class="large-8 columns no-pad">
								<?php // @codingStandardsIgnoreStart ?>
								<?php query_posts( 'showposts=5' ); ?>
								<?php // @codingStandardsIgnoreEnd ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


								<div class="large-12 columns m-tb no-pad">


										<article id="post-<?php the_ID(); ?>"><!-- start of news excerpt -->

												<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="news-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
					<?php endif; ?>

												<a href="<?php the_permalink(); ?>"><h4 class="grey-dark news-heading"><?php the_title(); ?></h4></a>

												<div class="news-text"><a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?></a></div>
											 <div class="news-date cyan-dark "><?php the_time( 'l, jS F Y' ) ?></div>


										</article><!-- end of news excerpt -->

								</div>
								<?php endwhile; ?>

								<?php endif; ?>
								<?php // @codingStandardsIgnoreStart ?>
								<?php wp_reset_query(); ?>
								<?php // @codingStandardsIgnoreEnd ?>
								<?php else : ?>

										<h3>Not Found</h3>

										<p>Sorry, but you are looking for something that isn't here.</p>

										<?php include( TEMPLATEPATH . '/searchform.php' ); ?>

								<?php endif; ?>

								</div>



				<div class="large-4 columns m-tb">

				<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'blog-sidebar' ) ) : ?>
				<?php endif; ?>

								</div>
				</div>

				</div>
		</div>
				</div><!-- #end of row -->
		</div><!-- #primary -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
