<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

if ( ! function_exists( 'the_posts_navigation' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function the_posts_navigation() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
<<<<<<< HEAD
		<h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'wgb' ); ?></h2>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( esc_html__( 'Older posts', 'wgb' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( esc_html__( 'Newer posts', 'wgb' ) ); ?></div>
=======
		<h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'lgarcia' ); ?></h2>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( esc_html__( 'Older posts', 'lgarcia' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( esc_html__( 'Newer posts', 'lgarcia' ) ); ?></div>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'the_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function the_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
<<<<<<< HEAD
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'wgb' ); ?></h2>
=======
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'lgarcia' ); ?></h2>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', '%title' );
				next_post_link( '<div class="nav-next">%link</div>', '%title' );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

<<<<<<< HEAD
if ( ! function_exists( 'wgb_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function wgb_posted_on() {
=======
if ( ! function_exists( 'lgarcia_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function lgarcia_posted_on() {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
<<<<<<< HEAD
		esc_html_x( 'Posted on %s', 'post date', 'wgb' ),
=======
		esc_html_x( 'Posted on %s', 'post date', 'lgarcia' ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
<<<<<<< HEAD
		esc_html_x( 'by %s', 'post author', 'wgb' ),
=======
		esc_html_x( 'by %s', 'post author', 'lgarcia' ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

<<<<<<< HEAD
if ( ! function_exists( 'wgb_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function wgb_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'wgb' ) );
		if ( $categories_list && wgb_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'wgb' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'wgb' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'wgb' ) . '</span>', $tags_list ); // WPCS: XSS OK.
=======
if ( ! function_exists( 'lgarcia_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function lgarcia_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'lgarcia' ) );
		if ( $categories_list && lgarcia_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'lgarcia' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'lgarcia' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'lgarcia' ) . '</span>', $tags_list ); // WPCS: XSS OK.
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
<<<<<<< HEAD
		comments_popup_link( esc_html__( 'Leave a comment', 'wgb' ), esc_html__( '1 Comment', 'wgb' ), esc_html__( '% Comments', 'wgb' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'wgb' ), '<span class="edit-link">', '</span>' );
=======
		comments_popup_link( esc_html__( 'Leave a comment', 'lgarcia' ), esc_html__( '1 Comment', 'lgarcia' ), esc_html__( '% Comments', 'lgarcia' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'lgarcia' ), '<span class="edit-link">', '</span>' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
}
endif;

if ( ! function_exists( 'the_archive_title' ) ) :
/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
function the_archive_title( $before = '', $after = '' ) {
	if ( is_category() ) {
<<<<<<< HEAD
		$title = sprintf( esc_html__( 'Category: %s', 'wgb' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( esc_html__( 'Tag: %s', 'wgb' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( esc_html__( 'Author: %s', 'wgb' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( esc_html__( 'Year: %s', 'wgb' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'wgb' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( esc_html__( 'Month: %s', 'wgb' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'wgb' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( esc_html__( 'Day: %s', 'wgb' ), get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', 'wgb' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = esc_html_x( 'Asides', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = esc_html_x( 'Galleries', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = esc_html_x( 'Images', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = esc_html_x( 'Videos', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = esc_html_x( 'Quotes', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = esc_html_x( 'Links', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = esc_html_x( 'Statuses', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = esc_html_x( 'Audio', 'post format archive title', 'wgb' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = esc_html_x( 'Chats', 'post format archive title', 'wgb' );
		}
	} elseif ( is_post_type_archive() ) {
		$title = sprintf( esc_html__( 'Archives: %s', 'wgb' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( esc_html__( '%1$s: %2$s', 'wgb' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = esc_html__( 'Archives', 'wgb' );
=======
		$title = sprintf( esc_html__( 'Category: %s', 'lgarcia' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( esc_html__( 'Tag: %s', 'lgarcia' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( esc_html__( 'Author: %s', 'lgarcia' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( esc_html__( 'Year: %s', 'lgarcia' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'lgarcia' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( esc_html__( 'Month: %s', 'lgarcia' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'lgarcia' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( esc_html__( 'Day: %s', 'lgarcia' ), get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', 'lgarcia' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = esc_html_x( 'Asides', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = esc_html_x( 'Galleries', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = esc_html_x( 'Images', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = esc_html_x( 'Videos', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = esc_html_x( 'Quotes', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = esc_html_x( 'Links', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = esc_html_x( 'Statuses', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = esc_html_x( 'Audio', 'post format archive title', 'lgarcia' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = esc_html_x( 'Chats', 'post format archive title', 'lgarcia' );
		}
	} elseif ( is_post_type_archive() ) {
		$title = sprintf( esc_html__( 'Archives: %s', 'lgarcia' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( esc_html__( '%1$s: %2$s', 'lgarcia' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = esc_html__( 'Archives', 'lgarcia' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	}

	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;  // WPCS: XSS OK.
	}
}
endif;

if ( ! function_exists( 'the_archive_description' ) ) :
/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
function the_archive_description( $before = '', $after = '' ) {
	$description = apply_filters( 'get_the_archive_description', term_description() );

	if ( ! empty( $description ) ) {
		/**
		 * Filter the archive description.
		 *
		 * @see term_description()
		 *
		 * @param string $description Archive description to be displayed.
		 */
		echo $before . $description . $after;  // WPCS: XSS OK.
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
<<<<<<< HEAD
function wgb_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'wgb_categories' ) ) ) {
=======
function lgarcia_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'lgarcia_categories' ) ) ) {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

<<<<<<< HEAD
		set_transient( 'wgb_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wgb_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wgb_categorized_blog should return false.
=======
		set_transient( 'lgarcia_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so lgarcia_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so lgarcia_categorized_blog should return false.
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		return false;
	}
}

/**
<<<<<<< HEAD
 * Flush out the transients used in wgb_categorized_blog.
 */
function wgb_category_transient_flusher() {
=======
 * Flush out the transients used in lgarcia_categorized_blog.
 */
function lgarcia_category_transient_flusher() {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
<<<<<<< HEAD
	delete_transient( 'wgb_categories' );
}
add_action( 'edit_category', 'wgb_category_transient_flusher' );
add_action( 'save_post',     'wgb_category_transient_flusher' );
=======
	delete_transient( 'lgarcia_categories' );
}
add_action( 'edit_category', 'lgarcia_category_transient_flusher' );
add_action( 'save_post',     'lgarcia_category_transient_flusher' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
