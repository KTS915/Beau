<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Susty
 */

get_header();
?>

	<div id="primary">
		<main id="main">

			<?php
			if ( have_posts() ) :
			?>

				<header>
					<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<div>', '</div>' );
					?>
				</header>

				<ul class="list">

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>

						<li>

						<?php
						get_template_part( 'template-parts/content', get_post_type() );
						?>

						</li>

					<?php
					endwhile;
					?>

				</ul>

				<?php
				the_posts_navigation( array(
					'prev_text' => '&larr; Older posts',
					'next_text' => 'Newer posts &rarr;',
				) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
