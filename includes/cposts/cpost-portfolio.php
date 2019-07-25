<?php

//Define portfolio post type
add_action( 'init', 'cpo_cpost_portfolio' );
function cpo_cpost_portfolio() {
	$show_ui = false;
	if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) || cpo_get_option( 'display_portfolio' ) ) {
		$show_ui = true;
	}

	//Set up labels
	$labels = array(
		'name'               => __( 'Portfolio', 'cpo-companion' ),
		'singular_name'      => __( 'Portfolio', 'cpo-companion' ),
		'add_new'            => __( 'Add Portfolio Item', 'cpo-companion' ),
		'add_new_item'       => __( 'Add New Portfolio Item', 'cpo-companion' ),
		'edit_item'          => __( 'Edit Portfolio Item', 'cpo-companion' ),
		'new_item'           => __( 'New Portfolio Item', 'cpo-companion' ),
		'view_item'          => __( 'View Portfolio', 'cpo-companion' ),
		'search_items'       => __( 'Search Portfolio', 'cpo-companion' ),
		'not_found'          => __( 'No portfolio items found.', 'cpo-companion' ),
		'not_found_in_trash' => __( 'No portfolio items found in the trash.', 'cpo-companion' ),
		'parent_item_colon'  => '',
	);

	$slug = cpo_get_option( 'slug_portfolio' );
	if ( '' == $slug ) {
		$slug = 'portfolio-item';
	}
	$fields = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => $show_ui,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => apply_filters( 'cpotheme_slug_portfolio', $slug ) ),
		'capability_type'    => 'page',
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-portfolio',
		'show_in_nav_menus'  => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'comments' ),
	);

	register_post_type( 'cpo_portfolio', $fields );
}


//Define admin columns in portfolio post type
add_filter( 'manage_edit-cpo_portfolio_columns', 'cpo_cpost_portfolio_columns' );
if ( ! function_exists( 'cpo_cpost_portfolio_columns' ) ) {
	function cpo_cpost_portfolio_columns( $columns ) {
		$columns = array(
			'cb'                  => '<input type="checkbox" />',
			'ctct-image'          => __( 'Image', 'cpo-companion' ),
			'title'               => __( 'Title', 'cpo-companion' ),
			'ctct-portfolio-cats' => __( 'Categories', 'cpo-companion' ),
			'ctct-portfolio-tags' => __( 'Tags', 'cpo-companion' ),
			'date'                => __( 'Date', 'cpo-companion' ),
			'comments'            => '<span class="vers"><span title="' . __( 'Comments', 'cpo-companion' ) . '" class="comment-grey-bubble"></span></span>',
			'author'              => __( 'Author', 'cpo-companion' ),
		);
		return $columns;
	}
}

//Define portfolio category taxonomy
add_action( 'init', 'cpo_tax_portfoliocategory' );
if ( ! function_exists( 'cpo_tax_portfoliocategory' ) ) {
	function cpo_tax_portfoliocategory() {
		$labels = array(
			'name'               => __( 'Portfolio Categories', 'cpo-companion' ),
			'singular_name'      => __( 'Portfolio Category', 'cpo-companion' ),
			'add_new'            => __( 'New Portfolio Category', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Portfolio Category', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Portfolio Category', 'cpo-companion' ),
			'new_item'           => __( 'New Portfolio Category', 'cpo-companion' ),
			'view_item'          => __( 'View Portfolio Category', 'cpo-companion' ),
			'search_items'       => __( 'Search Portfolio Categories', 'cpo-companion' ),
			'not_found'          => __( 'No portfolio categories were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No portfolio categories were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_portfolio_category' );
		if ( '' == $slug ) {
			$slug = 'portfolio-category';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_portfolio_category', $slug ) ),
			'hierarchical'      => true,
		);

		register_taxonomy( 'cpo_portfolio_category', 'cpo_portfolio', $fields );
	}
}

//Define portfolio tag taxonomy
add_action( 'init', 'cpo_tax_portfoliotag' );
if ( ! function_exists( 'cpo_tax_portfoliotag' ) ) {
	function cpo_tax_portfoliotag() {
		//Set up labels
		$labels = array(
			'name'               => __( 'Portfolio Tags', 'cpo-companion' ),
			'singular_name'      => __( 'Portfolio Tag', 'cpo-companion' ),
			'add_new'            => __( 'New Portfolio Tag', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Portfolio Tag', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Portfolio Tag', 'cpo-companion' ),
			'new_item'           => __( 'New Portfolio Tag', 'cpo-companion' ),
			'view_item'          => __( 'View Portfolio Tag', 'cpo-companion' ),
			'search_items'       => __( 'Search Portfolio Tags', 'cpo-companion' ),
			'not_found'          => __( 'No portfolio tags were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No portfolio tags were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_portfolio_tag' );
		if ( '' == $slug ) {
			$slug = 'portfolio-tag';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_portfolio_tag', $slug ) ),
			'hierarchical'      => false,
		);

		register_taxonomy( 'cpo_portfolio_tag', 'cpo_portfolio', $fields );
	}
}

//Modify main query on portfolio categories and tags, to change number of posts equal to number of columns
add_action( 'pre_get_posts', 'cpo_tax_portfolio_query' );
if ( ! function_exists( 'cpo_tax_portfolio_query' ) ) {
	function cpo_tax_portfolio_query( $query ) {
		if ( $query->is_main_query() && ! is_admin() && ( is_tax( 'cpo_portfolio_category' ) && is_tax( 'cpo_portfolio_tag' ) ) ) {
			$columns = cpo_get_option( 'portfolio_columns' );
			if ( '' != $columns && $columns > 0 ) {
				$post_number = cpo_get_option( 'portfolio_columns' ) * 4;
				$query->set( 'posts_per_page', $post_number );
			}
		}
	}
}
