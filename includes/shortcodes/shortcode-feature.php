<?php

/* Feature Block Shortcode */
if ( ! function_exists( 'cpo_shortcode_feature' ) ) {
	function cpo_shortcode_feature( $atts, $content = null ) {
		wp_enqueue_style( 'cpo-companion-fontawesome' );

		$attributes = shortcode_atts(
			array(
				'title'      => '(No Title)',
				'icon'       => '',
				'color'      => '',
				'image'      => '',
				'background' => '',
				'gradient'   => '',
				'border'     => '',
				'size'       => '',
				'style'      => '',
				'layout'     => '',
				'url'        => '',
				'id'         => '',
				'class'      => '',
				'animation'  => '',
			),
			$atts
		);

		//Set values
		$element_class      = ' ctsc-feature-' . trim( strip_tags( $attributes['size'] ) );
		$element_class     .= ' ctsc-feature-' . $attributes['style'];
		$element_class     .= ' ' . $attributes['class'];
		$element_image      = '';
		$element_background = '';
		$element_color      = '';
		$element_border     = '';
		$element_id         = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Background color -- if gradient is set, add it as well
		if ( '' != $attributes['image'] ) {
			$element_image  = cpo_image_url( $attributes['image'] );
			$element_class .= ' ctsc-feature-has-image';
		}
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
		if ( '' != $attributes['color'] ) {
			$element_color = ' color:' . $attributes['color'] . ';';
		}

		//Border style
		if ( '' != $attributes['border'] ) {
			$element_border = ' border:' . $attributes['border'] . ';';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$element_icon_style = ' style="' . $element_background . $element_color . $element_border . '"';

		$output = '<div class="ctsc-feature ' . esc_attr( $element_class ) . '"' . $element_id . '>';
		if ( '' != $attributes['image'] ) {
			$output .= '<div class="ctsc-feature-image"><img src="' . esc_url( $element_image ) . '"></div>';
		} elseif ( '' != $attributes['icon'] ) {
			wp_enqueue_style( 'style_fontawesome' );
			$output .= '<div class="ctsc-feature-icon"' . $element_icon_style . '><span class="icon-' . esc_attr( $attributes['icon'] ) . '"></span></div>';
		}
		$output .= '<div class="ctsc-feature-body">';
		$output .= '<h4 class="ctsc-feature-title">';

		if ( '' != $attributes['url'] ) {
			$output .= '<a href="' . esc_url( $attributes['url'] ) . '">';
		}
		$output .= esc_html( $attributes['title'] );
		if ( '' != $attributes['url'] ) {
			$output .= '</a>';
		}
		$output .= '</h4>';
		$output .= '<div class="ctsc-feature-content">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
		$output .= '</div>';

		$output .= '</div>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'feature', 'cpo_shortcode_feature' );
}
