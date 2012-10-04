<?php
/**
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div>

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				Copyright © <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> — <a href="http://www.calgarydiocese.ca/">Roman Catholic Diocese of Calgary</a>
			</div>

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div>

		</div>
	</div>

</div>

<?php
	wp_footer();
?>
</body>
</html>
