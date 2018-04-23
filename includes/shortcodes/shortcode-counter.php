<?php

/* Counter Shortcode */
if ( ! function_exists( 'cpo_shortcode_counter' ) ) {
	function cpo_shortcode_counter( $atts, $content = null ) {
		wp_enqueue_style( 'cpo-companion-fontawesome' );
		$attributes = shortcode_atts(
			array(
				'title'     => '',
				'size'      => '',
				'icon'      => '',
				'color'     => '',
				'number'    => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		//Set values
		$element_class  = ' ctsc-counter-' . esc_attr( $attributes['size'] );
		$element_color  = '';
		$element_class .= ' ' . $attributes['class'];
		$element_id     = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Has icon class
		if ( '' != $attributes['icon'] ) {
			$element_class .= ' counter-has-icon';
		}

		//Icon Color
		if ( '' != $attributes['color'] ) {
			$element_color = ' style = "color:' . $attributes['color'] . ';"';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		//Element Styling
		$output = '<div class="ctsc-counter' . esc_attr( $element_class ) . '"' . $element_id . '>';
		if ( '' != $attributes['icon'] ) {
			$output .= '<div class="ctsc-counter-icon icon-' . esc_attr( $attributes['icon'] ) . '"' . $element_color . '></div>';
		}
		$output .= '<div class="ctsc-counter-body">';
		$output .= '<div class="ctsc-counter-number">' . absint( $attributes['number'] ) . '</div>';
		$output .= '<div class="ctsc-counter-title">' . esc_html( $attributes['title'] ) . '</div>';
		$output .= '</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'counter', 'cpo_shortcode_counter' );
}
