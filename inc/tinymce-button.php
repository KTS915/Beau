<?php
function swp1_buttons(){
	add_filter( 'mce_external_plugins', 'swp1_add_buttons' );
	add_filter( 'mce_buttons', 'swp1_register_buttons' );
}
add_action( 'after_setup_theme', 'swp1_buttons' );

function swp1_add_buttons( $plugin_array ) {
	$plugin_array['swpquote'] = get_template_directory() . '/js/tinymce-button.js';
	return $plugin_array;
}

function swp1_register_buttons( $buttons ) {
	array_push( $buttons, 'swpquote' );
	return $buttons;
}

