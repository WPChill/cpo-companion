<?php

//Abstracted function for retrieving specific options inside option arrays
function cpo_get_option( $option_name = '', $option_array = 'ctct_settings' ) {
	//Determines whether to grab current language, or original language's option
	$option_list_name = $option_array;
	$option_list      = get_option( $option_list_name, false );
	if ( $option_list && isset( $option_list[ $option_name ] ) ) {
		$option_value = $option_list[ $option_name ];
	} else {
		$option_value = false;
	}

	return $option_value;
}

//Custom function to do some cleanup on nested shortcodes
//Used for columns and layout-related shortcodes
function cpo_do_shortcode( $content ) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace( '#^<\/p>|^<br\s?\/?>|<p>$|<p>\s*(&nbsp;)?\s*<\/p>#', '', $content );

	return $content;
}

//Returns the appropriate URL, either from a string or a post ID
function cpo_image_url( $id, $size = 'full' ) {
	$url = '';
	if ( is_numeric( $id ) ) {
		$url = wp_get_attachment_image_src( $id, $size );
		$url = $url[0];
	} else {
		$url = $id;
	}

	return $url;
}

function cpo_get_shortcode_prefix() {
	$prefix = cpo_get_option( 'shortcode_prefix', 'ctsc_settings' );
	if ( '' != $prefix ) {
		$prefix = esc_attr( $prefix ) . '_';
	}

	return $prefix;
}
