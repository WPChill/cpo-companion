<?php

/* Recent Posts Shortcode */
if ( ! function_exists( 'cpo_shortcode_posts' ) ) {
	function cpo_shortcode_posts( $atts, $content = null ) {
		wp_enqueue_script( 'cpo-companion-waypoints' );
		wp_enqueue_script( 'cpo-companion-core' );
		wp_enqueue_style( 'cpo-companion-fontawesome' );

		$attributes = shortcode_atts(
			array(
				'type'      => 'post',
				'order'     => 'DESC',
				'orderby'   => 'date',
				'style'     => '',
				'thumbnail' => '',
				'excerpt'   => '',
				'date'      => '',
				'author'    => '',
				'comments'  => '',
				'readmore'  => '',
				'category'  => '',
				'columns'   => 3,
				'number'    => 6,
				'id'        => '',
				'class'     => '',
				'animation' => '',
			), $atts
		);

		$element_class = ' ' . $attributes['class'];
		$post_class    = '';
		$element_id    = '' != $attributes['id'] ? ' id="' . $attributes['id'] . '"' : '';

		//Layout columns
		if ( ! is_numeric( $attributes['columns'] ) ) {
			$attributes['columns']= 3;
		} elseif ( $attributes['columns'] < 1 ) {
			$attributes['columns'] = 1;
		} elseif ( $attributes['columns'] > 5 ) {
			$attributes['columns'] = 5;
		}

		//Post number
		if ( ! is_numeric( $attributes['number'] ) ) {
			$attributes['number'] = 5;
		} elseif ( $attributes['number'] < 1 ) {
			$attributes['number'] = 1;
		} elseif ( $attributes['number'] > 9999 ) {
			$attributes['number'] = 9999;
		}

		//Create the query
		$args = array(
			'post_type'           => $attributes['type'],
			'order'               => $attributes['order'],
			'orderby'             => $attributes['orderby'],
			'posts_per_page'      => $attributes['number'],
			'nopaging'            => 0,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => 1,
		);
		if ( '' != $attributes['category'] ) {
			$args['category_name'] = $attributes['category'];
		}

		$query = new WP_Query( $args );

		$output = '';
		if ( $query->have_posts() ) :

			//Entrace effects and delay
			if ( '' != $attributes['animation'] ) {
				wp_enqueue_script( 'cpo-companion-waypoints' );
				$post_class .= ' ctsc-animation ctsc-animation-' . $attributes['animation'];
			}

			$item_count = 0;
			$output     = '<div class="ctsc-postlist ctsc-postlist-' . esc_attr( $attributes['style'] ) . esc_attr( $element_class ) . '"' . $element_id . '>';
			while ( $query->have_posts() ) :
				$query->the_post();
				if ( 0 == $item_count % $attributes['columns'] && 0 != $item_count ) {
					$output .= '<div class="ctsc-clear"></div>';
				}
				$item_count++;
				if ( 0 == $item_count % $attributes['columns'] && 0 != $item_count ) {
					$col_last = ' ctsc-col-last';
				} else {
					$col_last = '';
				}
				$output .= '<div class="ctsc-column ctsc-col' . esc_attr( $attributes['columns'] ) . esc_attr( $col_last ) . '">';

				//Post Item Output
				$output .= '<div class="ctsc-post ' . esc_attr( $post_class ) . '">';
				if ( has_post_thumbnail() && 'none' != $thumbnail ) {
					$output .= '<div class="ctsc-post-thumbnail"><a href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . get_the_post_thumbnail( get_the_ID(), $attributes['thumbnail'] ) . '</a></div>';
				}
				$output .= '<div class="ctsc-post-body">';
				$output .= '<h3 class="ctsc-post-title"><a href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . esc_html( get_the_title() ) . '</a></h3>';
				$output .= '<div class="ctsc-post-byline">';
				if ( 'none' != $attributes['date'] ) {
					$output .= '<div class="ctsc-post-date">' . get_the_time( get_option( 'date_format' ) ) . '</div>';
				}
				if ( 'none' != $attributes['author'] ) {
					$output .= '<div class="ctsc-post-author"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html__( 'By', 'cpo-companion' ) . ' ' . esc_html( get_the_author() ) . '</a></div>';
				}
				$output .= '</div>';
				if ( 'list' != $attributes['style'] && 'none' != $attributes['excerpt']) {
					$output .= '<div class="ctsc-post-content">' . wp_kses_post( get_the_excerpt() ) . '</div>';
				}
				if ( '' != $attributes['readmore'] ) {
					$output .= '<a class="ctsc-post-readmore" href="' . get_permalink( get_the_ID() ) . '">' . esc_html( $attributes['readmore']) . '</a>';
				}
				$output .= '</div>';
				$output .= '</div>';
				$output .= '<div class="ctsc-clear"></div>';

				$output .= '</div>';
			endwhile;
			$output .= '<div class="ctsc-clear"></div>';
			$output .= '</div>';

			//Finish up and return output
			wp_reset_query();
			wp_reset_postdata();
		endif;

		return $output;
	}
	add_shortcode( cpo_get_shortcode_prefix() . 'posts', 'cpo_shortcode_posts' );
}
