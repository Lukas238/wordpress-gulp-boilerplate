<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package lgarcia
 */

get_header(); ?>
		<div class="wrapper">
			<div id="content">

				<div id="primary-content" class="content-area">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>

				</div><!-- #primary-content -->

				<?php get_sidebar(); ?>
				
			</div><!-- #content -->
		</div><!-- .wrapper -->

<?php get_footer(); ?>
