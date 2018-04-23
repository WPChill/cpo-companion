<?php

/* Optin Shortcode */
if ( ! function_exists( 'cpo_shortcode_optin' ) ) {
	function cpo_shortcode_optin( $atts, $content = null ) {
		wp_enqueue_style( 'cpo-companion-fontawesome' );

		$attributes = shortcode_atts(
			array(
				'url'       => '',
				'email'     => 'Email',
				'firstname' => 'Name',
				'lastname'  => '',
				'captcha'   => '',
				'submit'    => 'Subscribe',
				'style'     => '',
				'size'      => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		//Set values
		$element_style = ' ctsc-optin-' . $attributes['style'];
		$element_size  = ' ctsc-optin-' . $attributes['size'];
		$element_class = ' ' . $attributes['class'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		$class_field  = '';
		$class_submit = '';
		if ( 'horizontal' == $attributes['style'] ) {
			$fields = 2;
			if ( '' != $attributes['firstname'] ) {
				$fields++;
			}
			if ( '' != $attributes['lastname'] ) {
				$fields++;
			}
			$class_field  = ' ctsc-column ctsc-column-narrow ctsc-col' . $fields;
			$class_submit = ' ctsc-column ctsc-column-narrow ctsc-col-last ctsc-col' . $fields;
		}

		$output  = '';
		$output .= '<form method="post" target="_blank" action="' . esc_url( $attributes['url'] ) . '" class="ctsc-optin' . esc_attr( $element_class ) . esc_attr( $element_style ) . esc_attr( $element_size ) . '" ' . $element_id . '>';
		$output .= '<div class="ctsc-optin-field' . esc_attr( $class_field ) . '"><input type="email" value="" name="EMAIL" placeholder="' . esc_attr( $attributes['email'] ) . '" class="ctsc-optin-email"></div>';
		if ( '' != $attributes['attributes']['firstname'] ) {
			$output .= '<div class="ctsc-optin-field' . esc_attr( $class_field ) . '"><input type="text" value="" placeholder="' . esc_attr( $attributes['firstname'] ) . '" name="FNAME" class="ctsc-optin-fname"></div>';
		}
		if ( '' != $attributes['lastname'] ) {
			$output .= '<div class="ctsc-optin-field' . esc_attr( $class_field ) . '"><input type="text" value="" placeholder="' . esc_attr( $attributes['lastname'] ) . '" name="FNAME" class="ctsc-optin-field ctsc-optin-lname ' . $class_field . '"></div>';
		}
		if ( '' != $attributes['captcha'] ) {
			$output .= '<div style="position:absolute; left:-5000px;"><input type="text" name="' . esc_attr( $attributes['captcha'] ) . '" tabindex="-1" value=""></div>';
		}
		$output .= '<div class="ctsc-optin-submit' . esc_attr( $class_submit ) . '"><input type="submit" value="' . esc_attr( $attributes['submit'] ) . '" name="subscribe"></div>';
		$output .= '</form>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'optin', 'cpo_shortcode_optin' );
}
