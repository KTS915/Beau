<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Susty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( is_singular() ) {

		echo '<header>';
		the_title( '<h1>', '</h1>' );

		echo '<h2><time datetime="' . esc_attr( $post->post_date ) . '">' . date( 'F j, Y', strtotime( $post->post_date ) ) . '</time></h2>';

		echo '</header>';

	}

	echo '<div>';

	if ( is_singular() ) {
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'susty' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	}

	else {
		echo '<h2><a href="' . esc_url( get_permalink( $post ) ) . '" rel="bookmark">' . esc_html( get_the_title() ) . '</a></h2>';

		echo '<time datetime="' . esc_attr( $post->post_date ) . '">' . date( 'M Y', strtotime( $post->post_date ) ) . '</time>';
	}

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'susty' ),
		'after'  => '</div>',
	) );

	echo '</div>';

	echo '<footer>';

	if ( is_singular() ) {
		susty_wp_entry_footer();
	}

	echo '</footer>';
	?>

</article><!-- #post-<?php the_ID(); ?> -->
