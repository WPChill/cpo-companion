<?php

if ( ! function_exists( 'cpo_shortcode_slideshow' ) ) {

	function cpo_shortcode_slideshow( $atts, $content = null ) {
		wp_enqueue_script( 'cpotheme-cycle' );

		$attributes = shortcode_atts(
			array(
				'effect'     => 'fade',
				'images'     => '',
				'background' => '',
				'padding'    => '',
				'gradient'   => '',
				'speed'      => '800',
				'timeout'    => '6000',
				'navigation' => '',
				'pager'      => '',
				'state'      => '',
				'id'         => '',
				'class'      => '',
				'animation'  => '',
			),
			$atts
		);

		$element_effect     = ' data-cycle-fx = "' . esc_attr( $attributes['effect'] ) . '"';
		$element_background = '';
		$element_padding    = '';
		$element_speed      = ' data-cycle-speed = "' . esc_attr( $attributes['speed'] ) . '"';
		$element_timeout    = ' data-cycle-timeout = "' . esc_attr( $attributes['timeout'] ) . '"';
		$element_class      = ' ' . $attributes['class'];
		$element_id         = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Background color -- if gradient is set, add it as well
		if ( '' != $attributes['background'] ) {
			$element_background = ' background:' . esc_attr( $attributes['background'] ) . ';';
			if ( '' != $attributes['gradient'] ) {
				$element_background .= '
				background:-moz-linear-gradient(top, ' . esc_attr( $attributes['background'] ) . ' 0%, ' . esc_attr( $attributes['gradient'] ) . ' 100%);
				background:-webkit-linear-gradient(top, ' . esc_attr( $attributes['background'] ) . ' 0%, ' . esc_attr( $attributes['gradient'] ) . ' 100%); 
				background:linear-gradient(to bottom, ' . esc_attr( $attributes['background'] ) . ' 0%, ' . esc_attr( $attributes['gradient'] ) . ' 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . esc_attr( $attributes['background'] ) . '\', endColorstr=\'' . esc_attr( $attributes['gradient'] ) . '\',GradientType=0);';
			}
		}

		//Background color -- if gradient is set, add it as well
		if ( '' != $attributes['padding'] ) {
			$element_padding = ' padding:' . esc_attr( $attributes['padding'] ) . ';';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		$slideshow_style = ' style="' . $element_background . $element_padding . '"';

		$output  = '<div class="ctsc-slideshow ' . esc_attr( $element_class ) . '"' . $element_id . $slideshow_style . '>';
		$output .= '<div class="ctsc-slideshow-slides cycle-slideshow" data-cycle-slides=".ctsc-slideshow-slide" data-cycle-prev=".ctsc-slideshow-prev" data-cycle-next=".ctsc-slideshow-next" data-cycle-pager=".ctsc-slideshow-pages" ' . $element_effect . $element_speed . $element_timeout . '>';
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '</div>';
		if ( 'none' != $attributes['navigation'] ) {
			$output .= '<div class="ctsc-slideshow-prev"></div>';
			$output .= '<div class="ctsc-slideshow-next"></div>';
		}
		if ( 'none' != $attributes['pager'] ) {
			$output .= '<div class="ctsc-slideshow-pages pages_' . esc_attr( $attributes['pager'] ) . '"></div>';
		}
		$output .= '</div>';
		return $output;
	}

	add_shortcode( cpo_get_shortcode_prefix() . 'slideshow', 'cpo_shortcode_slideshow' );
}



if ( ! function_exists( 'cpo_shortcode_slide' ) ) {

	/* Single Slide Shortcode -- For use within the content slideshow */
	function cpo_shortcode_slide( $atts, $content = null ) {
		wp_enqueue_script( 'ctsc-core' );
		wp_enqueue_style( 'ctsc-shortcodes' );
		//wp_enqueue_script('ctsc-toggles');
		wp_enqueue_script( 'cpothemes-cycle' );

		$attributes = shortcode_atts(
			array(
				'id'    => '',
				'class' => '',
			),
			$atts
		);

		$element_class = ' ' . $attributes['class'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		$output  = '<div class="ctsc-slideshow-slide ' . esc_attr( $element_class ) . '"' . esc_attr( $element_id ) . '>';
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '</div>';
		return $output;
	}

	add_shortcode( cpo_get_shortcode_prefix() . 'slide', 'cpo_shortcode_slide' );
}
