<?php

/* Spacer Shortcode */
if ( ! function_exists( 'cpo_shortcode_spacer' ) ) {
	function cpo_shortcode_spacer( $atts, $content = null ) {

		$attributes = shortcode_atts(
			array(
				'height' => 'fade',
				'id'     => '',
				'class'  => '',
			),
			$atts
		);

		$element_height = '' != $attributes['height'] ? $attributes['height'] : '25';
		$element_class  = ' ' . $attributes['class'];
		$element_id     = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		$element_style = ' style="height:' . absint( $element_height ) . 'px"';

		$output = '<div class="ctsc-spacer ' . esc_attr( $element_class ) . '"' . $element_id . $element_style . '></div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'spacer', 'cpo_shortcode_spacer' );
}
