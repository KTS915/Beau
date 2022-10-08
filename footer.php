<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>

	</div>

	<footer id="colophon">
		<div class="copyright">Copyright &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); esc_html_e( '. All Rights Reserved.', 'susty' ) ?></div>

		<a href="<?php echo esc_url( __( 'https://www.classicpress.net/', 'susty' ) ); ?>"><?php esc_html_e( 'Proudly powered by ClassicPress', 'susty' ); ?></a>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
