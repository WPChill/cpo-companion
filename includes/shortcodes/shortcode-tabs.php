<?php

/* Tablist Shortcode */
if ( ! function_exists( 'cpo_shortcode_tablist' ) ) {
	function cpo_shortcode_tablist( $atts, $content = null ) {
		//Enqueue necessary scripts
		wp_enqueue_script( 'cpo-companion-toggles' );

		$attributes = shortcode_atts(
			array(
				'style' => 'horizontal',
			),
			$atts
		);
		$content    = trim( $content );

		$output = '<div class="ctsc-tablist ctsc-tablist-' . esc_attr( $attributes['style'] ) . '">';

		//Parse individual tab contents into tabs
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $results, PREG_OFFSET_CAPTURE );
		$tab_titles = array();
		if ( isset( $results[1] ) ) {
			$tab_titles = $results[1];
		}
		$output .= '<ul class="ctsc-tablist-nav">';
		foreach ( $tab_titles as $tab ) {
			$output .= '<li><a href="#ctsc-tab-content-' . sanitize_title( $tab[0] ) . '">' . esc_html( $tab[0] ) . '</a></li>';
		}
		$output .= '</ul>';

		if ( count( $tab_titles ) ) {
			$output .= cpo_do_shortcode( $content );
		} else {
			$output .= do_shortcode( $content );
		}

		$output .= '</div>';
		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'tabs', 'cpo_shortcode_tablist' );
}


/* Tab Shortcode */
if ( ! function_exists( 'cpo_shortcode_tab' ) ) {
	function cpo_shortcode_tab( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'title' => '(No Title)',
				'state' => '',
			),
			$atts
		);

		$content = trim( $content );

		return '<div id="ctsc-tab-content-' . sanitize_title( $attributes['title'] ) . '" class="ctsc-tab-content">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'tab', 'cpo_shortcode_tab' );
}
