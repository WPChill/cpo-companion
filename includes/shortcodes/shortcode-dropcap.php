<?php

/* Dropcap Shortcode */
if ( ! function_exists( 'cpo_shortcode_dropcap' ) ) {
	function cpo_shortcode_dropcap( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
				'color' => '',
			), $atts
		);

		$color = trim( strip_tags( $attributes['color'] ) );
		$style = trim( strip_tags( $attributes['style'] ) );

		$random_id = rand();

		$output = '';

		if ( '' != $style ) {
			$color_property = 'background-';
		} else {
			$color_property = '';
		}
		if ( '' != $color ) {
			$output .= '<style>.ctsc-dropcap-' . esc_attr( $random_id ) . ' { ' . esc_attr( $color_property ) . 'color:' . esc_attr( $color ) . '; }</style>';
		}

		$output .= '<span class="ctsc-dropcap ctsc-dropcap-' . esc_attr( $random_id ) . ' ctsc-dropcap-' . esc_attr( $style ) . '">' . wp_kses_post( $content ) . '</span>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'dropcap', 'cpo_shortcode_dropcap' );
}
