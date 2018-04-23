<?php

/* focus Shortcode */
if ( ! function_exists( 'cpo_shortcode_focus' ) ) {
	function cpo_shortcode_focus( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style'      => '',
				'color'      => '',
				'background' => '',
				'gradient'   => '',
				'id'         => '',
				'class'      => '',
				'animation'  => '',
			),
			$atts
		);

		//Set values
		$element_background = '';
		$element_class      = ' ctsc-focus-' . $attributes['style'];
		$element_class     .= ' ' . $attributes['class'];
		$element_id         = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Text color
		if ( 'dark' == $attributes['color'] ) {
			$element_class .= ' ctsc-dark';
		}

		//Background color -- if gradient is set, add it as well
		if ( '' != $attributes['background'] ) {
			$element_background = ' background:' . $attributes['background'] . ';';
			if ( '' != $attributes['gradient'] ) {
				$element_background .= '
				background:-moz-linear-gradient(top, ' . $attributes['background'] . ' 0%, ' . $attributes['gradient'] . ' 100%);
				background:-webkit-linear-gradient(top, ' . $attributes['background'] . ' 0%, ' . $attributes['gradient'] . ' 100%); 
				background:linear-gradient(to bottom, ' . $attributes['background'] . ' 0%, ' . $attributes['gradient'] . ' 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $attributes['background'] . '\', endColorstr=\'' . $attributes['gradient'] . '\',GradientType=0);';
			}
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'ctsc-waypoints' );
			wp_enqueue_script( 'ctsc-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$element_styling = ' style="' . $element_background . '"';

		$output  = '<div class="ctsc-focus' . esc_attr( $element_class ) . '"' . $element_id . $element_styling . '>';
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'focus', 'cpo_shortcode_focus' );
	add_shortcode( cpo_get_shortcode_prefix() . 'notice', 'cpo_shortcode_focus' );
}
