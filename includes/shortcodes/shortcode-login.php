<?php

/* Button Shortcode */
if ( ! function_exists( 'cpo_shortcode_login' ) ) {
	function cpo_shortcode_login( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'redirect'  => '',
				'username'  => __( 'Username', 'cpo-companion' ),
				'password'  => __( 'Password', 'cpo-companion' ),
				'remember'  => __( 'Remember Me', 'cpo-companion' ),
				'login'     => __( 'Log In', 'cpo-companion' ),
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		//Set values
		$element_class = ' ' . $attributes['class'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Entrance effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		$output  = '';
		$output .= '<div class="ctsc-login"' . $element_id . '>';

		if ( ! is_user_logged_in() ) {
			$args = array(
				'echo'           => false,
				'label_username' => esc_attr( $attributes['username'] ),
				'label_password' => esc_attr( $attributes['password'] ),
				'label_remember' => esc_attr( $attributes['remember'] ),
				'label_log_in'   => esc_attr( $attributes['login'] ),
			);
			if ( '' != $redirect ) {
				$args['redirect'] = esc_url( $redirect );
			}
			$output  = wp_login_form( $args );
			$output .= '<a href="' . wp_lostpassword_url() . '" class="ctsc-login-lostpassword">' . __( 'I lost my password', 'cpo-companion' ) . '</a>';

		} else {
			$output .= '<div class="ctsc-login-content">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
		}

		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'login', 'cpo_shortcode_login' );
}
