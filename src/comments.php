<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
<<<<<<< HEAD
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wgb' ) ),
=======
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'lgarcia' ) ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
<<<<<<< HEAD
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'wgb' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'wgb' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'wgb' ) ); ?></div>
=======
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lgarcia' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lgarcia' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lgarcia' ) ); ?></div>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
<<<<<<< HEAD
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'wgb' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'wgb' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'wgb' ) ); ?></div>
=======
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lgarcia' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lgarcia' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lgarcia' ) ); ?></div>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
<<<<<<< HEAD
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wgb' ); ?></p>
=======
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'lgarcia' ); ?></p>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
