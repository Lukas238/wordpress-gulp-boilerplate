<?php
/**
<<<<<<< HEAD
 * wgb Theme Customizer
 *
 * @package wgb
=======
 * lgarcia Theme Customizer
 *
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
<<<<<<< HEAD
function wgb_customize_register( $wp_customize ) {
=======
function lgarcia_customize_register( $wp_customize ) {
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
<<<<<<< HEAD
add_action( 'customize_register', 'wgb_customize_register' );
=======
add_action( 'customize_register', 'lgarcia_customize_register' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
<<<<<<< HEAD
function wgb_customize_preview_js() {
	wp_enqueue_script( 'wgb_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wgb_customize_preview_js' );
=======
function lgarcia_customize_preview_js() {
	wp_enqueue_script( 'lgarcia_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'lgarcia_customize_preview_js' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
