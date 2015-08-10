<?php
/**
<<<<<<< HEAD
 * wgb functions and definitions
 *
 * @package wgb
 */

if ( ! function_exists( 'wgb_setup' ) ) :
=======
 * lgarcia functions and definitions
 *
 * @package lgarcia
 */

if ( ! function_exists( 'lgarcia_setup' ) ) :
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
<<<<<<< HEAD
function wgb_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wgb, use a find and replace
	 * to change 'wgb' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wgb', get_template_directory() . '/languages' );
=======
function lgarcia_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lgarcia, use a find and replace
	 * to change 'lgarcia' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'lgarcia', get_template_directory() . '/languages' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
<<<<<<< HEAD
		'primary' => esc_html__( 'Primary Menu', 'wgb' ),
=======
		'primary' => esc_html__( 'Primary Menu', 'lgarcia' ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
<<<<<<< HEAD
	add_theme_support( 'custom-background', apply_filters( 'wgb_custom_background_args', array(
=======
	add_theme_support( 'custom-background', apply_filters( 'lgarcia_custom_background_args', array(
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
<<<<<<< HEAD
endif; // wgb_setup
add_action( 'after_setup_theme', 'wgb_setup' );
=======
endif; // lgarcia_setup
add_action( 'after_setup_theme', 'lgarcia_setup' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
<<<<<<< HEAD
function wgb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wgb_content_width', 640 );
}
add_action( 'after_setup_theme', 'wgb_content_width', 0 );
=======
function lgarcia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lgarcia_content_width', 640 );
}
add_action( 'after_setup_theme', 'lgarcia_content_width', 0 );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
<<<<<<< HEAD
function wgb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wgb' ),
=======
function lgarcia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lgarcia' ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
<<<<<<< HEAD
add_action( 'widgets_init', 'wgb_widgets_init' );
=======
add_action( 'widgets_init', 'lgarcia_widgets_init' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

/**
 * Enqueue scripts and styles.
 */
<<<<<<< HEAD
function wgb_scripts() {
	wp_enqueue_style( 'wgb-style', get_template_directory_uri() . '/css/styles.css' );
	wp_enqueue_script( 'wgb-respond', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js');

}
add_action( 'wp_enqueue_scripts', 'wgb_scripts' );
=======
function lgarcia_scripts() {
	//wp_enqueue_style( 'lgarcia-style', get_stylesheet_uri() );
	wp_enqueue_style( 'lgarcia-style', get_template_directory_uri() . '/css/styles.css' );

	//wp_enqueue_script( 'lgarcia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'lgarcia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		//wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lgarcia_scripts' );
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
