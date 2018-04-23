<?php

/* Google Map Shortcode */
if ( ! function_exists( 'cpo_shortcode_map' ) ) {
	function cpo_shortcode_map( $atts, $content = null ) {
		wp_enqueue_script( 'cpo-companion-core' );
		$attributes = shortcode_atts(
			array(
				'color'     => '',
				'height'    => '400',
				'latitude'  => '',
				'longitude' => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		//Set values
		$element_class = ' ' . $attributes['class'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		wp_enqueue_script( 'google-maps' );
		$output = '<div class="ctsc-map ' . esc_attr( $element_class ) . '" ' . $element_id . ' data-lat="' . esc_attr( $attributes['latitude'] ) . '" data-lng="' . esc_attr( $attributes['longitude'] ) . '" data-color="' . esc_attr( $attributes['color'] ) . '" style="height:' . absint( $attributes['height'] ) . 'px"></div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'map', 'cpo_shortcode_map' );
}
