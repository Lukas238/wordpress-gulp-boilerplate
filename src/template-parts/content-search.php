<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
<<<<<<< HEAD
			<?php wgb_posted_on(); ?>
=======
			<?php lgarcia_posted_on(); ?>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
<<<<<<< HEAD
		<?php wgb_entry_footer(); ?>
=======
		<?php lgarcia_entry_footer(); ?>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

