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

			<header>
				<h1><?php esc_html( kts_front_page_header() ); ?></h1>
			</header>

			<?php
			if ( have_posts() ) :
			?>

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
