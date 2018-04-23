<?php


/* ctsc-column Wrapper Shortcode - Alternate Markup */
if ( ! function_exists( 'cpo_shortcode_columns' ) ) {
	function cpo_shortcode_columns( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'number' => '2',
			), $atts
		);
		return '<div class="ctsc-columns ctsc-col' . absint( $number ) . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '<div class="ctsc-col-divide"></div></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'columns', 'cpo_shortcode_columns' );
}


/* Single ctsc-column Shortcode - Alternate Markup */
if ( ! function_exists( 'cpo_shortcode_column_single' ) ) {
	function cpo_shortcode_column_single( $atts, $content = null ) {
		return '<div class="ctsc-column">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column', 'cpo_shortcode_column_single' );
}


/* Half ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column2' ) ) {
	function cpo_shortcode_column2( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col2' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_half', 'cpo_shortcode_column2' );
}

/* Half Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column2_last' ) ) {
	function cpo_shortcode_column2_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col2 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div><div class="col-divide"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_half_last', 'cpo_shortcode_column2_last' );
}



/* Third ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column3' ) ) {
	function cpo_shortcode_column3( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col3' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_third', 'cpo_shortcode_column3' );
}

/* Two-Thirds ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column3x2' ) ) {
	function cpo_shortcode_column3x2( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col3x2' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_two_thirds', 'cpo_shortcode_column3x2' );
}

/* Third Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column3_last' ) ) {
	function cpo_shortcode_column3_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col3 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div><div class="col-divide"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_third_last', 'cpo_shortcode_column3_last' );
}

/* Two-Thirds Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column3x2_last' ) ) {
	function cpo_shortcode_column3x2_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col3x2 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div><div class="col-divide"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_two_thirds_last', 'cpo_shortcode_column3x2_last' );
}



/* Quarter ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column4' ) ) {
	function cpo_shortcode_column4( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col4' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_fourth', 'cpo_shortcode_column4' );
}

/* Three-Quarters ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column4x3' ) ) {
	function cpo_shortcode_column4x3( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col4x3' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_three_fourths', 'cpo_shortcode_column4x3' );
}

/* Quarter Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column4_last' ) ) {
	function cpo_shortcode_column4_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col4 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div><div class="col-divide"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_fourth_last', 'cpo_shortcode_column4_last' );
}

/* Three-Quarters Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column4x3_last' ) ) {
	function cpo_shortcode_column4x3_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col4x3 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div><div class="col-divide"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_three_fourths_last', 'cpo_shortcode_column4x3_last' );
}



/* Fifth ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5' ) ) {
	function cpo_shortcode_column5( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_fifth', 'cpo_shortcode_column5' );
}

/* Two-Fifths ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5x2' ) ) {
	function cpo_shortcode_column5x2( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5x2' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_two_fifths', 'cpo_shortcode_column5x2' );
}

/* Three-Fifths ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5x3' ) ) {
	function cpo_shortcode_column5x3( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5x3' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_three_fifths', 'cpo_shortcode_column5x3' );
}

/* Four-Fifths ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5x4' ) ) {
	function cpo_shortcode_column5x4( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5x4' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_four_fifths', 'cpo_shortcode_column5x4' );
}

/* Fifth Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5_last' ) ) {
	function cpo_shortcode_column5_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div><div class="col-divide"></div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_fifth_last', 'cpo_shortcode_column5_last' );
}

/* Two-Fifths Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5x2_last' ) ) {
	function cpo_shortcode_column5x2_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5x2 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_two_fifths_last', 'cpo_shortcode_column5x2_last' );
}

/* Three-Fifths Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5x3_last' ) ) {
	function cpo_shortcode_column5x3_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5x3 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_three_fifths_last', 'cpo_shortcode_column5x3_last' );
}

/* Four-Fifths Last ctsc-column Shortcode */
if ( ! function_exists( 'cpo_shortcode_column5x4_last' ) ) {
	function cpo_shortcode_column5x4_last( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'style' => '',
			), $atts
		);
		$style      = '' == $attributes['style'] ? '' : ' ctsc-column-' . $attributes['style'];
		return '<div class="ctsc-column ctsc-col5x4 ctsc-col-last' . $style . '">' . wp_kses_post( cpo_do_shortcode( $content ) ) . '</div>';
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'column_four_fifths_last', 'cpo_shortcode_column5x4_last' );
}
