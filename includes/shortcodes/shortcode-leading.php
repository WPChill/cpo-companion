<?php
/* Leading Paragraph Shortcode */
if ( ! function_exists( 'cpo_shortcode_leading' ) ) {
	function cpo_shortcode_leading( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'icon' => '',
			), $atts
		);

		$output = '<span class="ctsc-leading">' . wp_kses_post( $content ) . '</span>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'leading', 'cpo_shortcode_leading' );
}
