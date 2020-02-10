<?php

//Define team post type
add_action( 'init', 'cpo_cpost_team' );
function cpo_cpost_team() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_TEAM' ) || cpo_get_option( 'display_team' ) ) {
		$show_ui = true;
	}
	$labels = array(
		'name'               => __( 'Team Members', 'cpo-companion' ),
		'singular_name'      => __( 'Team Member', 'cpo-companion' ),
		'add_new'            => __( 'Add Team Member', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Team Member', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Team Member', 'cpo-companion' ),
		'new_item'           => __( 'New Team Member', 'cpo-companion' ),
		'view_item'          => __( 'View Team Member', 'cpo-companion' ),
		'search_items'       => __( 'Search Team Members', 'cpo-companion' ),
		'not_found'          => __( 'No team members found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No team members found in the trash.', 'cpo-companion' ),
		'parent_item_colon'  => '',
	);

	$member_slug = cpo_get_option( 'slug_team_member' );
	if ( '' == $member_slug ) {
		$member_slug = 'cpo_team';
	}

	$fields = array(
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => $show_ui,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => apply_filters( 'cpotheme_slug_team_member', $member_slug ) ),
		'capability_type'     => 'page',
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-universal-access',
		'menu_position'       => null,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
	);

	register_post_type( 'cpo_team', $fields );

}


//Define admin columns in team post type
add_filter( 'manage_edit-cpo_team_columns', 'cpo_cpost_team_columns' );
if ( ! function_exists( 'cpo_cpost_team_columns' ) ) {
	function cpo_cpost_team_columns( $columns ) {
		$columns = array(
			'cb'             => '<input type="checkbox" />',
			'ctct-image'     => __( 'Image', 'cpo-companion' ),
			'title'          => __( 'Title', 'cpo-companion' ),
			'ctct-team-cats' => __( 'Groups', 'cpo-companion' ),
			'date'           => __( 'Date', 'cpo-companion' ),
			'author'         => __( 'Author', 'cpo-companion' ),
		);
		return $columns;
	}
}

//Define team category taxonomy
add_action( 'init', 'cpo_tax_teamcategory' );
if ( ! function_exists( 'cpo_tax_teamcategory' ) ) {
	function cpo_tax_teamcategory() {
		$labels = array(
			'name'               => __( 'Member Groups', 'cpo-companion' ),
			'singular_name'      => __( 'Member Group', 'cpo-companion' ),
			'add_new'            => __( 'New Member Group', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Member Group', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Member Group', 'cpo-companion' ),
			'new_item'           => __( 'New Member Group', 'cpo-companion' ),
			'view_item'          => __( 'View Member Group', 'cpo-companion' ),
			'search_items'       => __( 'Search Member Groups', 'cpo-companion' ),
			'not_found'          => __( 'No member groups were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No member groups were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_team_category' );
		if ( '' == $slug ) {
			$slug = 'team-group';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => false,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_team_category', $slug ) ),
			'hierarchical'      => true,
		);

		register_taxonomy( 'cpo_team_category', 'cpo_team', $fields );
	}
}
