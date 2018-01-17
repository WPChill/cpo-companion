<?php


/* Message Shortcode */
if ( ! function_exists( 'cpo_shortcode_message' ) ) {
	function cpo_shortcode_message( $atts, $content = null ) {
		wp_enqueue_style( 'cpo-companion-fontawesome' );

		$attributes = shortcode_atts(
			array(
				'type' => '',
			),
			$atts
		);

		$type = trim( strip_tags( $attributes['type'] ) );
		switch ( $type ) {
			case 'ok':
				$type = 'ctsc-message-ok';
				break;
			case 'error':
				$type = 'ctsc-message-error';
				break;
			case 'warning':
				$type = 'ctsc-message-warn';
				break;
			case 'info':
				$type = 'ctsc-message-info';
				break;
			default:
				$type = '';
				break;
		}

		return '<span class="ctsc-message ' . esc_attr( $type ) . '">' . wp_kses_post( $content ) . '</span>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'message', 'cpo_shortcode_message' );
}
