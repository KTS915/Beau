<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Susty
 */

get_header();
?>

	<div id="primary">

		<?php susty_wp_post_thumbnail(); ?>

		<main id="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<?php
		the_post_navigation( array(
			'prev_text' => '&larr; %title',
			'next_text' => '%title &rarr;',
		) );
		?>

	</div><!-- #primary -->

<?php
get_footer();
