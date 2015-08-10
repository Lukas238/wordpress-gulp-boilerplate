<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- STYLES -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" media="screen">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrapper">
	
		<header id="header" role="banner">
			<div class="wrapper">

					<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</div><!-- .site-branding -->

					
					<nav id="site-navigation" class="main-navigation" role="navigation">
<<<<<<< HEAD
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wgb' ); ?></button>
=======
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lgarcia' ); ?></button>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->

					
			</div><!-- .wrapper -->
		</header><!-- #header -->
		
		<main id="main" role="main">