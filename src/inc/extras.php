<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
<<<<<<< HEAD
function wgb_body_classes( $classes ) {
=======
function lgarcia_body_classes( $classes ) {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
<<<<<<< HEAD
add_filter( 'body_class', 'wgb_body_classes' );
=======
add_filter( 'body_class', 'lgarcia_body_classes' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
<<<<<<< HEAD
	function wgb_wp_title( $title, $sep ) {
=======
	function lgarcia_wp_title( $title, $sep ) {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
<<<<<<< HEAD
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'wgb' ), max( $paged, $page ) );
=======
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'lgarcia' ), max( $paged, $page ) );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		}

		return $title;
	}
<<<<<<< HEAD
	add_filter( 'wp_title', 'wgb_wp_title', 10, 2 );
=======
	add_filter( 'wp_title', 'lgarcia_wp_title', 10, 2 );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
<<<<<<< HEAD
	function wgb_render_title() {
=======
	function lgarcia_render_title() {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
<<<<<<< HEAD
	add_action( 'wp_head', 'wgb_render_title' );
=======
	add_action( 'wp_head', 'lgarcia_render_title' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
endif;
