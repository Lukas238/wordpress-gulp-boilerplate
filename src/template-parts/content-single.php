<?php
/**
 * Template part for displaying single posts.
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

		<div class="entry-meta">
<<<<<<< HEAD
			<?php wgb_posted_on(); ?>
=======
			<?php lgarcia_posted_on(); ?>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		</div><!-- .entry-meta -->
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
		<?php wgb_entry_footer(); ?>
=======
		<?php lgarcia_entry_footer(); ?>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

