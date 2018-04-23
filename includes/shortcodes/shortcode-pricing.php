<?php

/* Pricing Item Shortcode */
if ( ! function_exists( 'cpo_shortcode_pricing' ) ) {
	function cpo_shortcode_pricing( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'type'        => 'none',
				'title'       => '',
				'subtitle'    => '',
				'description' => '',
				'price'       => '',
				'color'       => '',
				'before'      => '',
				'after'       => '',
				'id'          => '',
				'class'       => '',
				'animation'   => '',
			), $atts
		);

		//Set values
		$element_background = '';
		$element_color      = '';
		$element_type       = ' ctsc-pricing-' . $attributes['type'];
		$element_class      = ' ' . $attributes['class'];
		$element_id         = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		//Background color -- if gradient is set, add it as well
		$title_styling = '';
		if ( '' != $attributes['color'] ) {
			$title_styling = ' style="background:' . $attributes['color'] . '; color:#fff;"';
		}

		$output  = '';
		$output .= '<div class="ctsc-pricing ' . esc_attr( $element_type ) . esc_attr( $element_class ) . '"' . $element_id . '>';

		//title
		if ( '' != $attributes['title'] ) {
			$output .= '<div class="ctsc-pricing-title"' . $title_styling . '>';
			$output .= esc_html( $attributes['title'] );
			if ( '' != $attributes['subtitle'] ) {
				$output .= '<div class="ctsc-pricing-subtitle">' . esc_html( $attributes['subtitle'] ) . '</div>';
			}
			$output .= '</div>';
		}

		//Price
		if ( '' != $attributes['price'] ) {
			$output .= '<div class="ctsc-pricing-price">';
			if ( '' != $attributes['before'] ) {
				$output .= '<span class="ctsc-pricing-before">' . esc_attr( $attributes['before'] ) . '</span>';
			}
			$output .= '<span class="ctsc-pricing-price-value">' . esc_attr( $attributes['price'] ) . '</span>';
			if ( '' != $attributes['after'] ) {
				$output .= '<span class="ctsc-pricing-after">' . esc_attr( $attributes['after'] ) . '</span>';
			}
			if ( '' != $attributes['description'] ) {
				$output .= '<span class="ctsc-pricing-description">' . esc_html( $attributes['description'] ) . '</span>';
			}
			$output .= '</div>';
		}

		//Content
		$output .= '<div class="ctsc-pricing-content">';
		$output .= wp_kses_post( cpo_do_shortcode( $content ) );
		$output .= '</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'pricing', 'cpo_shortcode_pricing' );
	add_shortcode( cpo_get_shortcode_prefix() . 'pricing_item', 'cpo_shortcode_pricing' );
}
