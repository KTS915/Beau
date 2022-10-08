<?php

/* SHORTCODES FOR PREAMBLE */
function kts_start_preamble() {
	return '<aside><p class="preamble">';
}
add_shortcode( 'start_preamble', 'kts_start_preamble' );

function kts_end_preamble() {
	return '</p></aside><img class="preamble-divider" src="' . get_template_directory_uri() . '/images/2461548.svg' . '" width="200px">';
}
add_shortcode( 'end_preamble', 'kts_end_preamble' );


/* PREVENT ADDITIONAL <p> TAGS WHEN USING PREAMBLE SHORTCODES */
function kts_shortcode_unautop( $content ) {
	return str_replace( ['<p>[start_preamble]', '[end_preamble]</p>'], ['[start_preamble]', '[end_preamble]'], $content );
}
add_filter( 'the_content', 'kts_shortcode_unautop' );


/* SHORTCODES FOR PULL QUOTES */
function kts_pull_left() {
	return '<span class="pull-left">';
}
add_shortcode( 'pull_left', 'kts_pull_left' );

function kts_pull_right() {
	return '<span class="pull-right">';
}
add_shortcode( 'pull_right', 'kts_pull_right' );

function kts_end_pull() {
	return '</span>';
}
add_shortcode( 'end_pull', 'kts_end_pull' );
