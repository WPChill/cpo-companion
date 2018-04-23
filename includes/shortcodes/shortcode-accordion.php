<?php

/* Accordion Shortcode */
if ( ! function_exists( 'cpo_shortcode_accordion' ) ) {
	function cpo_shortcode_accordion( $atts, $content = null ) {
		//Enqueue necessary scripts
		wp_enqueue_script( 'cpo-companion-toggles' );

		$attributes = shortcode_atts(
			array(
				'title'     => '(No Title)',
				'icon'      => '',
				'style'     => '',
				'state'     => '',
				'group'     => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		//Set default values
		$element_icon    = '';
		$element_class   = $attributes['class'];
		$element_class  .= ' ctsc-accordion-' . $attributes['style'];
		$element_group   = '' != $attributes['group'] ? ' data-group="' . $attributes['group'] . '"' : '';
		$element_display = ' style="display:none;"';
		$element_id      = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Accordion Icon
		if ( '' != $attributes['icon'] ) {
			$element_icon = '<span class="ctsc-accordion-icon primary_color icon-' . esc_attr( $attributes['icon'] ) . '"></span> ';
			wp_enqueue_style( 'cpo-companion-fontawesome' );
		}

		//Accordion State
		if ( 'open' == $attributes['state'] ) {
			$element_class  .= ' ctsc-accordion-open';
			$element_display = '';
		}

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$output  = '<div class="ctsc-accordion ' . esc_attr( $element_class ) . '"' . $element_id . $element_group . '>';
		$output .= '<h4 class="ctsc-accordion-title">' . $element_icon . esc_html( $attributes['title'] ) . '</h4>';
		$output .= '<div class="ctsc-accordion-content"' . $element_display . '>' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
		$output .= '</div>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'accordion', 'cpo_shortcode_accordion' );
}
