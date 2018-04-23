<?php

/* List Shortcode */
if ( ! function_exists( 'cpo_shortcode_list' ) ) {
	function cpo_shortcode_list( $atts, $content = null ) {
		wp_enqueue_style( 'cpo-companion-fontawesome' );
		$attributes = shortcode_atts(
			array(
				'icon'       => '',
				'style'      => 'square',
				'background' => 'gray',
				'gradient'   => '',
				'color'      => 'white',
				'id'         => '',
				'class'      => '',
				'animation'  => '',
			),
			$atts
		);

		//Set values
		$element_style = ' ctsc-list-' . esc_attr( $attributes['style'] );
		$element_class = ' ' . $attributes['class'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

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

		//Text color
		$element_color = '';
		if ( '' != $attributes['color'] ) {
			$element_color = ' color:' . $attributes['color'] . ';';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$icon_style = ' style="' . esc_attr( $element_background ) . esc_attr( $element_color ) . '"';

		$output = '<div class="ctsc-list' . esc_attr( $element_style ) . esc_attr( $element_class ) . '"' . $element_id . '>';
		if ( '' != $attributes['icon'] ) {
			$output .= '<span class="ctsc-list-icon icon-' . esc_attr( $attributes['icon'] ) . '"' . $icon_style . '></span>';
		}
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '</div>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'list', 'cpo_shortcode_list' );
}
