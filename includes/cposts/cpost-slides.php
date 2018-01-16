<?php

//Define slides post type
add_action( 'init', 'cpo_cpost_slides' );
function cpo_cpost_slides() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_SLIDES' ) || cpo_get_option( 'display_slides' ) ) {
		$show_ui = true;
	}

	//Set up labels
	$labels = array(
		'name'               => __( 'Slides', 'cpo-companion' ),
		'singular_name'      => __( 'Slide', 'cpo-companion' ),
		'add_new'            => __( 'New Slide', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Slide', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Slide', 'cpo-companion' ),
		'new_item'           => __( 'New Slide', 'cpo-companion' ),
		'view_item'          => __( 'View Slide', 'cpo-companion' ),
		'search_items'       => __( 'Search Slides', 'cpo-companion' ),
		'not_found'          => __( 'No slides were found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No slides were found in the trash.', 'cpo-companion' ),
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
		'menu_icon'          => 'dashicons-images-alt2',
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
	);

	register_post_type( 'cpo_slide', $fields );
}

//Define admin columns in slides post type
add_filter( 'manage_edit-cpo_slide_columns', 'cpo_cpost_slides_columns' );
if ( ! function_exists( 'cpo_cpost_slides_columns' ) ) {
	function cpo_cpost_slides_columns( $columns ) {
		$columns = array(
			'cb'         => '<input type="checkbox" />',
			'ctct-image' => __( 'Image', 'cpo-companion' ),
			'title'      => __( 'Title', 'cpo-companion' ),
			'date'       => __( 'Date', 'cpo-companion' ),
			'comments'   => '<span class="vers"><span title="' . __( 'Comments', 'cpo-companion' ) . '" class="comment-grey-bubble"></span></span>',
			'author'     => __( 'Author', 'cpo-companion' ),
		);
		return $columns;
	}
}

