<?php

//Define features post type
add_action( 'init', 'cpo_cpost_features' );
function cpo_cpost_features() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_FEATURES' ) || cpo_get_option( 'display_features' ) ) {
		$show_ui = true;
	}

	//Set up labels
	$labels = array(
		'name'               => __( 'Features', 'cpo-companion' ),
		'singular_name'      => __( 'Feature', 'cpo-companion' ),
		'add_new'            => __( 'Add Feature', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Feature', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Feature', 'cpo-companion' ),
		'new_item'           => __( 'New Feature', 'cpo-companion' ),
		'view_item'          => __( 'View Features', 'cpo-companion' ),
		'search_items'       => __( 'Search Features', 'cpo-companion' ),
		'not_found'          => __( 'No features found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No features found in the trash.', 'cpo-companion' ),
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
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
	);

	register_post_type( 'cpo_feature', $fields );
}


//Define admin columns in features post type
add_filter( 'manage_edit-cpo_feature_columns', 'cpo_cpost_features_columns' );
if ( ! function_exists( 'cpo_cpost_features_columns' ) ) {
	function cpo_cpost_features_columns( $columns ) {
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

