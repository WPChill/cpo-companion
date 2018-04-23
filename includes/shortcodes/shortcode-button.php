<?php

/* Button Shortcode */
if ( ! function_exists( 'cpo_shortcode_button' ) ) {
	function cpo_shortcode_button( $atts, $content = null ) {

		$attributes = shortcode_atts(
			array(
				'url'         => '',
				'position'    => '',
				'description' => '',
				'size'        => '',
				'icon'        => '',
				'color'       => 'white',
				'background'  => 'gray',
				'gradient'    => '',
				'border'      => '',
				'target'      => '',
				'popup'       => '',
				'rel'         => '',
				'id'          => '',
				'class'       => '',
				'animation'   => '',
			),
			$atts
		);

		//Set values
		$element_class      = ' ctsc-button-' . trim( strip_tags( $attributes['size'] ) );
		$element_class     .= ' ctsc-button-' . $attributes['position'];
		$element_class     .= ' ' . $attributes['class'];
		$element_attributes = '';
		$element_style      = '';
		$element_background = '';

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

		//Popup color
		if ( '' != $attributes['popup'] ) {
			$element_class      .= ' ctsc-popup-show';
			$element_attributes .= ' data-ctsc-popup="' . $attributes['popup'] . '"';
		}

		if ( '' != $attributes['id'] ) {
			$element_attributes .= ' id="' . $attributes['id'] . '"';
		}

		if ( '' != $attributes['target'] ) {
			$element_attributes .= ' target="' . $attributes['target'] . '"';
		}

		if ( '' != $attributes['rel'] ) {
			$element_attributes .= ' rel="' . $attributes['rel'] . '"';
		}

		//Text color
		if ( '' != $attributes['color'] ) {
			$element_style .= ' color:"' . $attributes['color'] . '";';
		}

		//Border style
		if ( '' != $attributes['border'] ) {
			$element_style .= ' border:' . $attributes['border'] . ';';
		}

		if ( '' != $element_style || '' != $element_background ) {
			$element_attributes .= ' style="' . $element_background . '"';
		}

		//Icon and class
		$icon = '';
		if ( '' != $attributes['icon'] ) {
			wp_enqueue_style( 'cpo-companion-fontawesome' );
			$element_class .= ' ctsc-button-has-icon';
			$icon           = '<span class="ctsc-button-icon icon-' . htmlentities( $attributes['icon'] ) . '"></span> ';
		}

		//Entrance effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$output  = '';
		$output .= '<a class="ctsc-button' . esc_attr( $element_class ) . '" href="' . esc_url( $attributes['url'] ) . '"' . $element_attributes . '>';

		//Button contents
		$output .= '<span class="ctsc-button-content">';
		$output .= $icon;
		$output .= '<span class="ctsc-button-text">' . esc_html( $content ) . '</span>';
		if ( '' != $attributes['description'] ) {
			$output .= '<span class="ctsc-button-description">' . esc_html( $attributes['description'] ) . '</span>';
		}
		$output .= '</span>';

		$output .= '</a>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'button', 'cpo_shortcode_button' );
}
