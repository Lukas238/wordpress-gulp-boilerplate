<?php
/**
 * The template used for displaying page content in page.php
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
<<<<<<< HEAD
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wgb' ),
=======
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lgarcia' ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
<<<<<<< HEAD
		<?php edit_post_link( esc_html__( 'Edit', 'wgb' ), '<span class="edit-link">', '</span>' ); ?>
=======
		<?php edit_post_link( esc_html__( 'Edit', 'lgarcia' ), '<span class="edit-link">', '</span>' ); ?>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

