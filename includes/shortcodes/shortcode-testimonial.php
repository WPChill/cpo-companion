<?php

/* Testimonial Shortcode */
if ( ! function_exists( 'cpo_shortcode_testimonial' ) ) {
	function cpo_shortcode_testimonial( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'name'      => '(No Name)',
				'image'     => '',
				'style'     => 'left',
				'title'     => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		$element_class = ' ' . $attributes['class'];
		$element_style = ' ctsc-testimonial-' . $attributes['style'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';
		$content       = trim( $content );

		if ( '' != $element_style ) {
			$element_class .= $element_style;
		}

		if ( '' == $attributes['image'] ) {
			$element_class .= ' ctsc-testimonial-noimage';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		$output  = '<div class="ctsc-testimonial' . esc_attr( $element_class ) . '"' . $element_id . '>';
		$output .= '<div class="ctsc-testimonial-content">';
		$output .= wp_kses_post( $content );
		$output .= '</div>';
		if ( '' != $attributes['image'] ) {
			$output .= '<img src="' . esc_url( cpo_image_url( $attributes['image'], 'thumbnail' ) ) . '" class="ctsc-testimonial-image">';
		}
		$output .= '<div class="ctsc-testimonial-meta">';
		$output .= '<div class="ctsc-testimonial-name">' . esc_html( $attributes['name'] ) . '</div>';
		if ( '' != $attributes['title'] ) {
			$output .= '<span class="ctsc-testimonial-title">' . esc_html( $attributes['title'] ) . '</span>';
		}
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	add_shortcode( cpo_get_shortcode_prefix() . 'testimonial', 'cpo_shortcode_testimonial' );
}
