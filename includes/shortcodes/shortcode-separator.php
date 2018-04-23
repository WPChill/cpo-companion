<?php

/* Separator Shortcode */
if ( ! function_exists( 'cpo_shortcode_separator' ) ) {
	function cpo_shortcode_separator( $atts, $content = null ) {
		wp_enqueue_style( 'cpo-companion-fontawesome' );
		wp_enqueue_script( 'cpo-companion-core' );

		$attributes = shortcode_atts(
			array(
				'style'     => '',
				'title'     => '',
				'color'     => '',
				'top'       => '',
				'icon'      => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			), $atts
		);

		$element_class  = ' ctsc-separator-' . esc_attr( $attributes['style'] );
		$element_class .= ' ' . $attributes['class'];
		$element_id     = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$icon_styling = '';
		if ( '' != $attributes['color'] ) {
			$icon_styling = ' style="color:' . $attributes['color'] . '"';
		}

		//Icon
		if ( '' != $attributes['icon'] ) {
			$element_class .= ' ctsc-separator-has-icon';
		}

		$output  = '<div class="ctsc-separator' . esc_attr( $element_class ) . '"' . $element_id . '>';
		$output .= '<div class="ctsc-separator-line"></div>';
		if ( '' != $attributes['icon'] ) {
			$output .= '<div class="ctsc-separator-icon icon-' . esc_attr( $attributes['icon'] ) . '"' . $icon_styling . '></div>';
		}
		if ( '' != $attributes['top'] ) {
			$output .= '<a class="ctsc-separator-top ctsc-back-top" href="#top" rel="top">' . esc_html( $attributes['top'] ) . '</a>';
		}
		if ( '' != $attributes['title'] ) {
			$output .= '<div class="ctsc-separator-title">' . esc_html( $attributes['title'] ) . '</div>';
		}
		$output .= '<div class="clear"></div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'separator', 'cpo_shortcode_separator' );
}
