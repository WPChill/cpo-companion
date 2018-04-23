<?php

/* Team Member Shortcode */
if ( ! function_exists( 'cpo_shortcode_team' ) ) {
	function cpo_shortcode_team( $atts, $content = null ) {
		$attributes = shortcode_atts(
			array(
				'name'      => '(No Name)',
				'image'     => '',
				'title'     => '',
				'facebook'  => '',
				'twitter'   => '',
				'gplus'     => '',
				'linkedin'  => '',
				'pinterest' => '',
				'tumblr'    => '',
				'web'       => '',
				'state'     => '',
				'email'     => '',
				'phone'     => '',
				'cellphone' => '',
				'fax'       => '',
				'id'        => '',
				'class'     => '',
				'animation' => '',
			),
			$atts
		);

		$content       = cpo_do_shortcode( $content );
		$element_name  = esc_attr( $attributes['name'] );
		$element_class = ' ' . $attributes['class'];
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Entrace effects and delay
		if ( '' != $attributes['animation'] ) {
			wp_enqueue_script( 'cpo-companion-waypoints' );
			wp_enqueue_script( 'cpo-companion-core' );
			$element_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
		}

		if ( '' == $attributes['image'] ) {
			$element_class .= ' ctsc-team-noimage';
		}

		$output = '<div class="ctsc-team ' . esc_attr( $element_class ) . '"' . $element_id . '>';
		if ( '' != $attributes['image'] ) {
			$output .= '<div class="ctsc-team-image">';
			$output .= '<img src="' . esc_url( cpo_image_url( $attributes['image'] ) ) . '">';
			$output .= '</div>';
		}
		$output .= '<div class="ctsc-team-body">';

		$output .= '<h4 class="ctsc-team-name">' . esc_html( $attributes['name'] ) . '</h4>';
		if ( '' != $attributes['title'] ) {
			$output .= '<span class="ctsc-team-title">' . esc_html( $attributes['title'] ) . '</span>';
		}
		$output .= '<div class="ctsc-team-content">' . wp_kses_post( $content ) . '</div>';

		$output .= '<div class="ctsc-team-social">';
		if ( '' != $attributes['web'] ) {
			$output .= '<a target="_blank" class="ctsc-team-web" href="' . esc_url( $attributes['web'] ) . '"></a>';
		}
		if ( '' != $attributes['facebook'] ) {
			$output .= '<a target="_blank" class="ctsc-team-facebook" href="' . esc_url( $attributes['facebook'] ) . '"></a>';
		}
		if ( '' != $attributes['twitter'] ) {
			$output .= '<a target="_blank" class="ctsc-team-twitter" href="' . esc_url( $attributes['twitter'] ) . '"></a>';
		}
		if ( '' != $attributes['gplus'] ) {
			$output .= '<a target="_blank" class="ctsc-team-google-plus" href="' . esc_url( $attributes['gplus'] ) . '"></a>';
		}
		if ( '' != $attributes['linkedin'] ) {
			$output .= '<a target="_blank" class="ctsc-team-linkedin" href="' . esc_url( $attributes['linkedin'] ) . '"></a>';
		}
		if ( '' != $attributes['pinterest'] ) {
			$output .= '<a target="_blank" class="ctsc-team-pinterest" href="' . esc_url( $attributes['pinterest'] ) . '"></a>';
		}
		if ( '' != $attributes['tumblr'] ) {
			$output .= '<a target="_blank" class="ctsc-team-tumblr" href="' . esc_url( $attributes['tumblr'] ) . '"></a>';
		}
		$output .= '</div>';

		$output .= '<div class="ctsc-team-meta">';
		if ( '' != $attributes['email'] ) {
			$output .= '<span class="ctsc-team-link ctsc-team-email"><a href="mailto:' . esc_url( antispambot( $attributes['email'] ) ) . '">' . esc_html( antispambot( $attributes['email'] ) ) . '</a></span>';
		}
		if ( '' != $attributes['phone'] ) {
			$output .= '<span class="ctsc-team-link ctsc-team-phone">' . esc_html( $attributes['phone'] ) . '</span>';
		}
		if ( '' != $attributes['cellphone'] ) {
			$output .= '<span class="ctsc-team-link ctsc-team-cellphone">' . esc_html( $attributes['cellphone'] ) . '</span>';
		}
		if ( '' != $attributes['fax'] ) {
			$output .= '<span class="ctsc-team-link ctsc-team-fax">' . esc_html( $attributes['fax'] ) . '</span>';
		}
		$output .= '</div>';

		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'team', 'cpo_shortcode_team' );
}
