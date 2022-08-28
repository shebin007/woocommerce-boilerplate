<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package boilerplate
 */

?>

<footer id="colophon">
	<div>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'boilerplate' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'boilerplate' ), 'WordPress' );
			?>
		</a>
	</div>
</footer><!-- #colophon -->
