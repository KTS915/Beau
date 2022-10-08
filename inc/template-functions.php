<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Susty
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function susty_wp_body_classes( $classes ) {

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'susty_wp_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function susty_wp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'susty_wp_pingback_header' );


/* Customize appearance of comments */
function kts_better_comments( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'comment';
	}
	?>
 
	<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">

	<?php
	if ( 'div' !== $args['style'] ) {
	?>

	<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">

	<?php
    }
    ?>
        <div class="comment-author vcard boldish">

			<?php
            if ( $args['avatar_size'] !== 0 ) {
				$avatar_size = ! empty( $args['avatar_size'] ) ? $args['avatar_size'] : 32; // set default avatar size
                echo get_avatar( $comment, $args['avatar_size'] ) ?: '<img alt="" src="' . esc_url( get_template_directory_uri() . '/images/anonymous.svg' ) . '" width="32" height="32" aria-hidden="true" role="presentation">';
			}
            echo get_comment_author_link();
            ?>

        </div>

		<?php 
        if ( $comment->comment_approved === '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        }
        ?>
 
        <div class="comment-meta commentmetadata">
			<?php
			/* translators: 1: date, 2: time */
			printf( 
				__('%1$s'), 
				get_comment_date()
			);
			?>
        </div>

        <?php comment_text(); ?>

        <div class="reply">
			<?php 
			comment_reply_link( 
				array_merge( 
					$args, 
					array(
						'add_below' => $add_below, 
						'depth'     => $depth, 
						'max_depth' => $args['max_depth'] 
					) 
				) 
			);
			?>
        </div>

	<?php 
    if ( 'div' !== $args['style'] ) {
	?>

	</div>

	<?php 
	}
}
