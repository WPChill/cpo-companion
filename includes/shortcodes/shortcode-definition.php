<?php
/* Definition Lists Shortcode */
if ( ! function_exists( 'cpo_shortcode_definition' ) ) {
	function cpo_shortcode_definition( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'title'     => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		//Set values
		$element_id = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';
		$content    = cpo_do_shortcode( $content );

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . esc_attr( $attributes['animation'] );
		}

		$output  = '<dl class="ctsc-definition ' . esc_attr( $attributes['class'] ) . '"' . $element_id . '>';
		$output .= '<dt class="ctsc-definition-term">' . esc_html( $title ) . '</dt>';
		$output .= '<dd class="ctsc-definition-description">' . wp_kses_post( $content ) . '</dd>';
		$output .= '</dl>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'definition', 'cpo_shortcode_definition' );
}
