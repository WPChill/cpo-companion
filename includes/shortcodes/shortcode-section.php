<?php

/* Section Shortcode */
if ( ! function_exists( 'cpo_shortcode_section' ) ) {
	function cpo_shortcode_section( $atts, $content = null ) {
		wp_enqueue_script( 'cpo-companion-core' );
		$attributes = shortcode_atts(
			array(
				'title'      => '',
				'subtitle'   => '',
				'background' => '',
				'gradient'   => '',
				'video'      => '',
				'image'      => '',
				'color'      => '',
				'position'   => '',
				'padding'    => '',
				'id'         => '',
				'class'      => '',
				'animation'  => '',
			), $atts
		);

		//Set values
		$element_background = '';
		$element_class      = ' ctsc-section-' . $attributes['position'];
		$element_class     .= ' ctsc-' . $attributes['color'];
		$element_class     .= ' ' . $attributes['class'];
		$element_id         = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

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

		//Background Image
		$element_image = '';
		if ( '' != $attributes['image'] ) {
			$element_image = ' background-image:url(' . esc_url( cpo_image_url( $attributes['image'] ) ) . ');';
		}

		//Section Content Styles
		$element_padding = '';
		if ( '' != $attributes['padding'] ) {
			$padding         = str_replace( 'px', '', $attributes['padding'] );
			$element_padding = ' padding-top:' . absint( $padding ) . 'px; padding-bottom:' . absint( $padding ) . 'px;';
		}

		//Entrace effects and delay
		$anim_class = '';
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			$anim_class = ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		$background_style = ' style="' . $element_background . $element_image . '"';
		$element_style    = ' style="' . $element_padding . '"';

		//Output section
		$output  = '';
		$output .= '<div class="ctsc-section ' . esc_attr( $element_class ) . '" ' . $element_style . '>';
		//Section output
		if ( '' != $attributes['video'] ) {
			$output .= '<div class="ctsc-section-video">';
			$output .= '<video width="640" height="360" muted="muted" loop="loop" autoplay="autoplay">';
			$output .= '<source type="video/mp4" src="' . esc_url( $attributes['video'] ) . '"></source>';
			$output .= '</video>';
			$output .= '</div>';
		}
		$output .= '<div class="ctsc-section-background"' . esc_attr( $background_style ) . '></div>';
		$output .= '<div class="ctsc-section-content ' . esc_attr( $anim_class ) . '">';
		if ( '' != $attributes['title'] ) {
			$output .= '<div class="ctsc-section-heading">';
			$output .= '<h2 class="ctsc-section-title">' . esc_html( $attributes['title'] ) . '</h2>';
			if ( '' != $attributes['subtitle'] ) {
				$output .= '<div class="ctsc-section-subtitle">' . esc_html( $attributes['subtitle'] ) . '</div>';
			}
			$output .= '</div>';
		}
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '<div class="ctsc-clear"></div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'section', 'cpo_shortcode_section' );
}
