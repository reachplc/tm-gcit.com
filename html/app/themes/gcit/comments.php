<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return; }
?>
<div class="wrapper">
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
		<?php $comment_count = get_comments_number(); ?>
		<?php if ( 1 === $comment_count ) {
			printf(
				/* translators: 1: title. */
				esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', '_s' ),
				'<span>' . get_the_title() . '</span>'
			);
} else {
	printf( // WPCS: XSS OK.
		/* translators: 1: comment count number, 2: title. */
		esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', '_s' ) ),
		number_format_i18n( $comment_count ),
		'<span>' . get_the_title() . '</span>'
	);
}	?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'gcit' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'gcit' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'gcit' ) ); ?></div>
		</nav><!-- .comment-navigation -->
	<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'gcit' ); ?></p>
		<?php endif; ?>

	<?php endif; // Have Comments. ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
</div>
