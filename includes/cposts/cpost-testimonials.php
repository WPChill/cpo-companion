<?php

//Define testimonials post type
add_action( 'init', 'cpo_cpost_testimonials' );
function cpo_cpost_testimonials() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) || cpo_get_option( 'display_testimonials' ) ) {
		$show_ui = true;
	}

	//Set up labels
	$labels = array(
		'name'               => __( 'Testimonials', 'cpo-companion' ),
		'singular_name'      => __( 'Testimonial', 'cpo-companion' ),
		'add_new'            => __( 'Add Testimonial', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Testimonial', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Testimonial', 'cpo-companion' ),
		'new_item'           => __( 'New Testimonial', 'cpo-companion' ),
		'view_item'          => __( 'View Testimonial', 'cpo-companion' ),
		'search_items'       => __( 'Search Testimonials', 'cpo-companion' ),
		'not_found'          => __( 'No testimonials found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No testimonials found in the trash.', 'cpo-companion' ),
		'parent_item_colon'  => '',
	);

	$fields = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => $show_ui,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'page',
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-format-chat',
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
	);

	register_post_type( 'cpo_testimonial', $fields );
}

//Define admin columns in testimonials post type
add_filter( 'manage_edit-cpo_testimonial_columns', 'cpo_cpost_testimonials_columns' );
if ( ! function_exists( 'cpo_cpost_testimonials_columns' ) ) {
	function cpo_cpost_testimonials_columns( $columns ) {
		$columns = array(
			'cb'         => '<input type="checkbox" />',
			'ctct-image' => __( 'Image', 'cpo-companion' ),
			'title'      => __( 'Title', 'cpo-companion' ),
			'date'       => __( 'Date', 'cpo-companion' ),
			'author'     => __( 'Author', 'cpo-companion' ),
		);
		return $columns;
	}
}
