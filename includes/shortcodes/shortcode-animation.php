<?php

/* Area/Region Shortcode */
if ( ! function_exists( 'cpo_shortcode_area' ) ) {
	function cpo_shortcode_area( $atts, $content = null ) {
		wp_enqueue_script( 'cpo-companion-waypoints' );
		wp_enqueue_script( 'cpo-companion-core' );

		$attributes = shortcode_atts(
			array(
				'delay'     => '',
				'animation' => '',
			), $atts
		);

		$animation = '';
		if ( '' != $attributes['animation'] ) {
			$animation = ' ctsc-animation-' . $attributes['animation'];
		}

		$delay = '';
		if ( '' != $attributes['delay'] ) {
			$delay = ' data-delay="' . $attributes['delay'] . '"';
		}

		$output  = '';
		$output .= '<div class="ctsc-animation ctsc-animation' . esc_attr( $animation ) . '"' . $delay . '>';
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'area', 'cpo_shortcode_area' );
	add_shortcode( cpo_get_shortcode_prefix() . 'animation', 'cpo_shortcode_area' );
}
