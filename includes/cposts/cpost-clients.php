<?php

//Define clients post type
add_action( 'init', 'cpo_cpost_clients' );
function cpo_cpost_clients() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_CLIENTS' ) || cpo_get_option( 'display_clients' ) ) {
		$show_ui = true;
	}

	//Set up labels
	$labels = array(
		'name'               => __( 'Clients', 'cpo-companion' ),
		'singular_name'      => __( 'Client', 'cpo-companion' ),
		'add_new'            => __( 'Add Client', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Client', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Client', 'cpo-companion' ),
		'new_item'           => __( 'New Client', 'cpo-companion' ),
		'view_item'          => __( 'View Client', 'cpo-companion' ),
		'search_items'       => __( 'Search Clients', 'cpo-companion' ),
		'not_found'          => __( 'No clients found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No clients found in the trash.', 'cpo-companion' ),
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
		'menu_icon'          => 'dashicons-businessman',
		'menu_position'      => null,
		'supports'           => array( 'title', 'excerpt', 'thumbnail', 'page-attributes' ),
	);

	register_post_type( 'cpo_client', $fields );
}


//Define admin columns in clients post type
add_filter( 'manage_edit-cpo_client_columns', 'cpo_cpost_clients_columns' );
if ( ! function_exists( 'cpo_cpost_clients_columns' ) ) {
	function cpo_cpost_clients_columns( $columns ) {
		$columns = array(
			'cb'        => '<input type="checkbox" />',
			'cpo-image' => __( 'Image', 'cpo-companion' ),
			'title'     => __( 'Title', 'cpo-companion' ),
			'date'      => __( 'Date', 'cpo-companion' ),
			'author'    => __( 'Author', 'cpo-companion' ),
		);
		return $columns;
	}
}
