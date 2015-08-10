<?php
/**
 * The template for displaying 404 pages (not found).
 *
<<<<<<< HEAD
 * @package wgb
=======
 * @package lgarcia
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
 */

get_header(); ?>
		<div class="wrapper">
			<div id="content">

				<div id="primary-content" class="content-area">


					<section class="error-404 not-found">
						<header class="page-header">
<<<<<<< HEAD
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wgb' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wgb' ); ?></p>
=======
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lgarcia' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'lgarcia' ); ?></p>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

<<<<<<< HEAD
							<?php if ( wgb_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'wgb' ); ?></h2>
=======
							<?php if ( lgarcia_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'lgarcia' ); ?></h2>
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->
							<?php endif; ?>

							<?php
								/* translators: %1$s: smiley */
<<<<<<< HEAD
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'wgb' ), convert_smilies( ':)' ) ) . '</p>';
=======
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'lgarcia' ), convert_smilies( ':)' ) ) . '</p>';
>>>>>>> 01876ebd690558b630978e71444aea97583c6119
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
							?>

							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

			
				</div><!-- #primary-content -->

			</div><!-- #content -->
		</div><!-- .wrapper -->

<?php get_footer(); ?>
