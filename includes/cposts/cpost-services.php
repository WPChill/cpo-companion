<?php

//Define services post type
add_action( 'init', 'cpo_cpost_services' );
function cpo_cpost_services() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_SERVICES' ) || cpo_get_option( 'display_services' ) ) {
		$show_ui = true;
	}

	//Set up labels
	$labels = array(
		'name'               => __( 'Services', 'cpo-companion' ),
		'singular_name'      => __( 'Services', 'cpo-companion' ),
		'add_new'            => __( 'Add Service', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Service', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Service', 'cpo-companion' ),
		'new_item'           => __( 'New Service', 'cpo-companion' ),
		'view_item'          => __( 'View Service', 'cpo-companion' ),
		'search_items'       => __( 'Search Services', 'cpo-companion' ),
		'not_found'          => __( 'No services found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No services found in the trash.', 'cpo-companion' ),
		'parent_item_colon'  => '',
	);

	$slug = cpo_get_option( 'slug_service' );
	if ( '' == $slug ) {
		$slug = 'service';
	}
	$fields = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => $show_ui,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => apply_filters( 'cpotheme_slug_service', $slug ) ),
		'capability_type'    => 'page',
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-archive',
		'menu_position'      => null,
		'show_in_nav_menus'  => true,
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
	);

	register_post_type( 'cpo_service', $fields );
}


//Define admin columns in services post type
add_filter( 'manage_edit-cpo_service_columns', 'cpo_cpost_services_columns' );
if ( ! function_exists( 'cpo_cpost_services_columns' ) ) {
	function cpo_cpost_services_columns( $columns ) {
		$columns = array(
			'cb'               => '<input type="checkbox" />',
			'cpo-image'        => __( 'Image', 'cpo-companion' ),
			'title'            => __( 'Title', 'cpo-companion' ),
			'cpo-service-cats' => __( 'Categories', 'cpo-companion' ),
			'cpo-service-tags' => __( 'Tags', 'cpo-companion' ),
			'date'             => __( 'Date', 'cpo-companion' ),
			'comments'         => '<span class="vers"><span title="' . __( 'Comments', 'cpo-companion' ) . '" class="comment-grey-bubble"></span></span>',
			'author'           => __( 'Author', 'cpo-companion' ),
		);
		return $columns;
	}
}

//Define services category taxonomy
add_action( 'init', 'cpo_tax_servicescategory' );
if ( ! function_exists( 'cpo_tax_servicescategory' ) ) {
	function cpo_tax_servicescategory() {
		$labels = array(
			'name'               => __( 'Service Categories', 'cpo-companion' ),
			'singular_name'      => __( 'Service Category', 'cpo-companion' ),
			'add_new'            => __( 'New Service Category', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Service Category', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Service Category', 'cpo-companion' ),
			'new_item'           => __( 'New Service Category', 'cpo-companion' ),
			'view_item'          => __( 'View Service Category', 'cpo-companion' ),
			'search_items'       => __( 'Search Service Categories', 'cpo-companion' ),
			'not_found'          => __( 'No services categories were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No services categories were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_service_category' );
		if ( '' == $slug ) {
			$slug = 'service-category';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_service_category', $slug ) ),
			'hierarchical'      => true,
		);

		register_taxonomy( 'cpo_service_category', 'cpo_service', $fields );
	}
}

//Define services tag taxonomy
add_action( 'init', 'cpo_tax_servicestag' );
if ( ! function_exists( 'cpo_tax_servicestag' ) ) {
	function cpo_tax_servicestag() {
		//Set up labels
		$labels = array(
			'name'               => __( 'Service Tags', 'cpo-companion' ),
			'singular_name'      => __( 'Service Tag', 'cpo-companion' ),
			'add_new'            => __( 'New Service Tag', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Service Tag', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Service Tag', 'cpo-companion' ),
			'new_item'           => __( 'New Service Tag', 'cpo-companion' ),
			'view_item'          => __( 'View Service Tag', 'cpo-companion' ),
			'search_items'       => __( 'Search Service Tags', 'cpo-companion' ),
			'not_found'          => __( 'No services tags were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No services tags were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_service_tag' );
		if ( '' == $slug ) {
			$slug = 'service-tag';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_service_tag', $slug ) ),
			'hierarchical'      => false,
		);

		register_taxonomy( 'cpo_service_tag', 'cpo_service', $fields );
	}
}
