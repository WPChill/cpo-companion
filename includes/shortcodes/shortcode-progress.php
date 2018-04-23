<?php

/* Progress Bar Shortcode */
if ( ! function_exists( 'cpo_shortcode_bar' ) ) {
	function cpo_shortcode_bar( $atts, $content = null ) {
		wp_enqueue_script( 'cpo-companion-waypoints' );
		wp_enqueue_script( 'cpo-companion-core' );
		wp_enqueue_style( 'cpo-companion-fontawesome' );

		$attributes = shortcode_atts(
			array(
				'style'      => '',
				'title'      => '',
				'value'      => '100',
				'size'       => '',
				'icon'       => '',
				'color'      => 'white',
				'background' => 'green',
				'gradient'   => '',
				'direction'  => '',
				'id'         => '',
				'class'      => '',
				'animation'  => '',
			),
			$atts
		);

		//Set values
		$element_size       = ' ctsc-progress-' . trim( strip_tags( $attributes['size'] ) );
		$element_background = '';
		$element_color      = '';
		$element_direction  = '' != $attributes['direction'] ? ' ctsc-progress-' . trim( strip_tags( $attributes['direction'] ) ) : '';
		$element_class      = ' ' . $attributes['class'];
		$element_id         = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Background color -- if gradient is set, add it as well
		if ( '' != $attributes['background'] ) {
			$element_background = ' background:' . $attributes['background'] . ';';
			if ( '' != $attributes['gradient'] ) {
				$gradient_direction     = 'left';
				$gradient_direction_old = 'to right';
				if ( 'left' == $direction ) {
					$gradient_direction     = 'right';
					$gradient_direction_old = 'to left';
				}
				$element_background .= '
				background:-moz-linear-gradient(' . esc_attr( $gradient_direction ) . ', ' . esc_attr( $attributes['background'] ) . ' 0%, ' . esc_attr( $attributes['gradient'] ) . ' 100%);
				background:-webkit-linear-gradient(' . esc_attr( $gradient_direction ) . ', ' . esc_attr( $attributes['background'] ) . ' 0%, ' . esc_attr( $attributes['gradient'] ) . ' 100%); 
				background:linear-gradient(' . esc_attr( $gradient_direction_old ) . ', ' . esc_attr( $attributes['background'] ) . ' 0%, ' . esc_attr( $attributes['gradient'] ) . ' 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . esc_attr( $attributes['background'] ) . '\', endColorstr=\'' . esc_attr( $attributes['gradient'] ) . '\',GradientType=0);';
			}
		}

		//Text color
		if ( '' != $attributes['color'] ) {
			$element_color = ' color:' . esc_attr( $attributes['color'] ) . ';';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		//Progress bar values
		$value = htmlentities( $attributes['value'] );
		if ( $value < 0 ) {
			$value = 0;
		}
		if ( $value > 100 ) {
			$value = 100;
		}

		//Bar icon
		if ( '' != $attributes['icon'] ) {
			$icon = '<span class="bar-icon icon-' . htmlentities( $attributes['icon'] ) . '"></span> ';
		}

		$element_style = ' style="' . $element_color . '"';
		$bar_style     = ' style="' . $element_background . $element_color . '"';

		$output  = '';
		$output .= '<div class="ctsc-progress' . esc_attr( $element_direction ) . esc_attr( $element_size ) . ' ' . esc_attr( $element_class ) . '"' . $element_style . $element_id . '>';
		$output .= '<div class="bar-content" data-value="' . esc_attr( absint( $value ) ) . '"' . $bar_style . '>';
		if ( '' != $attributes['title'] ) {
			$output .= '<div class="bar-title">' . $icon . ' ' . esc_html( $attributes['title'] ) . '</div>';
		}
		$output .= '</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'progress', 'cpo_shortcode_bar' );
}
