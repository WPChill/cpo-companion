<?php

/* Google Map Shortcode */
if ( ! function_exists( 'cpo_shortcode_map' ) ) {
	function cpo_shortcode_map( $atts, $content = null ) {
		wp_enqueue_script( 'ctsc-core' );
		wp_enqueue_style( 'ctsc-shortcodes' );
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
			wp_enqueue_script( 'ctsc-waypoints' );
			wp_enqueue_script( 'ctsc-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), false, true );
		$output = '<div class="ctsc-map ' . esc_attr( $element_class ) . '" ' . esc_attr( $element_id ) . ' data-lat="' . esc_attr( $attributes['latitude'] ) . '" data-lng="' . esc_attr( $attributes['longitude'] ) . '" data-color="' . esc_attr( $attributes['color'] ) . '" style="height:' . absint( $attributes['height'] ) . 'px"></div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'map', 'cpo_shortcode_map' );
}
