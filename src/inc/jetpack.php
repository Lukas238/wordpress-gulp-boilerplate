<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
<<<<<<< HEAD
function wgb_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'wgb_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function wgb_jetpack_setup
add_action( 'after_setup_theme', 'wgb_jetpack_setup' );
=======
function lgarcia_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'lgarcia_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function lgarcia_jetpack_setup
add_action( 'after_setup_theme', 'lgarcia_jetpack_setup' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

/**
 * Custom render function for Infinite Scroll.
 */
<<<<<<< HEAD
function wgb_infinite_scroll_render() {
=======
function lgarcia_infinite_scroll_render() {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
<<<<<<< HEAD
} // end function wgb_infinite_scroll_render
=======
} // end function lgarcia_infinite_scroll_render
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
