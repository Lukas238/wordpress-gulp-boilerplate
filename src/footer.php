<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lgarcia
 */

?>

		<footer id="footer">
			<div class="wrapper">
				

				
				<div class="foot">
				
					<div class="copy">&copy; Copyright 2015 | Leandro García</div>
					
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lgarcia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lgarcia' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lgarcia' ), 'lgarcia', '<a href="http://C238.com.ar" rel="designer">Lucas Dasso</a>' ); ?>
					</div><!-- .site-info -->
				
				</div><!-- .foot -->

				
				
			</div><!-- .wrapper -->
		</footer><!-- #footer-->
		
	</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
