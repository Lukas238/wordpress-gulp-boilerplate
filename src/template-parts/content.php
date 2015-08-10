<?php
/**
 * Template part for displaying posts.
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

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
<<<<<<< HEAD
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wgb' ), array( 'span' => array( 'class' => array() ) ) ),
=======
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lgarcia' ), array( 'span' => array( 'class' => array() ) ) ),
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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
