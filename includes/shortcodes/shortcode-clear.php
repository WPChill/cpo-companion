<?php

/* Clearing Shortcode */
if ( ! function_exists( 'cpo_shortcode_clear' ) ) {
	function cpo_shortcode_clear( $atts, $content = null ) {
		return '<div style="clear:both;width:100%;"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'clear', 'cpo_shortcode_clear' );
}
