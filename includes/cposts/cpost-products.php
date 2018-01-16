<?php

//Define products post type
add_action( 'init', 'cpo_cpost_products' );
if ( ! function_exists( 'cpo_cpost_products' ) ) {
	function cpo_cpost_products() {
		$labels = array(
			'name'               => __( 'Products', 'cpo-companion' ),
			'singular_name'      => __( 'Product', 'cpo-companion' ),
			'add_new'            => __( 'Add Product', 'cpo-companion' ),
			'add_new_item'       => __( 'Add New Product', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Product', 'cpo-companion' ),
			'new_item'           => __( 'New Product', 'cpo-companion' ),
			'view_item'          => __( 'View Products', 'cpo-companion' ),
			'search_items'       => __( 'Search Products', 'cpo-companion' ),
			'not_found'          => __( 'No products found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No products found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_product' );
		if ( '' == $slug ) {
			$slug = 'product';
		}
		$fields = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => apply_filters( 'cpotheme_slug_product', $slug ) ),
			'capability_type'    => 'page',
			'hierarchical'       => false,
			'menu_icon'          => 'dashicons-cart',
			'menu_position'      => null,
			'show_in_nav_menus'  => true,
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
		);

		register_post_type( 'cpo_product', $fields );
	}
}

//Define admin columns in products post type
add_filter( 'manage_edit-cpo_product_columns', 'cpo_cpost_products_columns' );
if ( ! function_exists( 'cpo_cpost_products_columns' ) ) {
	function cpo_cpost_products_columns( $columns ) {
		$columns = array(
			'cb'               => '<input type="checkbox" />',
			'cpo-image'        => __( 'Image', 'cpo-companion' ),
			'title'            => __( 'Title', 'cpo-companion' ),
			'cpo-product-cats' => __( 'Categories', 'cpo-companion' ),
			'cpo-product-tags' => __( 'Tags', 'cpo-companion' ),
			'date'             => __( 'Date', 'cpo-companion' ),
			'comments'         => '<span class="vers"><span title="' . __( 'Comments', 'cpo-companion' ) . '" class="comment-grey-bubble"></span></span>',
			'author'           => __( 'Author', 'cpo-companion' ),
		);

		return $columns;
	}
}

//Define products category taxonomy
add_action( 'init', 'cpo_tax_productctategory' );
if ( ! function_exists( 'cpo_tax_productctategory' ) ) {
	function cpo_tax_productctategory() {
		$labels = array(
			'name'               => __( 'Product Categories', 'cpo-companion' ),
			'singular_name'      => __( 'Product Category', 'cpo-companion' ),
			'add_new'            => __( 'New Product Category', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Product Category', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Product Category', 'cpo-companion' ),
			'new_item'           => __( 'New Product Category', 'cpo-companion' ),
			'view_item'          => __( 'View Product Category', 'cpo-companion' ),
			'search_items'       => __( 'Search Product Categories', 'cpo-companion' ),
			'not_found'          => __( 'No products categories were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No products categories were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_product_category' );
		if ( '' == $slug ) {
			$slug = 'product-category';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_product_category', $slug ) ),
			'hierarchical'      => true,
		);

		register_taxonomy( 'cpo_product_category', 'cpo_product', $fields );
	}
}

//Define products tag taxonomy
add_action( 'init', 'cpo_tax_productstag' );
if ( ! function_exists( 'cpo_tax_productstag' ) ) {
	function cpo_tax_productstag() {
		//Set up labels
		$labels = array(
			'name'               => __( 'Product Tags', 'cpo-companion' ),
			'singular_name'      => __( 'Product Tag', 'cpo-companion' ),
			'add_new'            => __( 'New Product Tag', 'cpo-companion' ),
			'add_new_item'       => __( 'Add Product Tag', 'cpo-companion' ),
			'edit_item'          => __( 'Edit Product Tag', 'cpo-companion' ),
			'new_item'           => __( 'New Product Tag', 'cpo-companion' ),
			'view_item'          => __( 'View Product Tag', 'cpo-companion' ),
			'search_items'       => __( 'Search Product Tags', 'cpo-companion' ),
			'not_found'          => __( 'No product tags were found.', 'cpo-companion' ),
			'not_found_in_trash' => __( 'No product tags were found in the trash.', 'cpo-companion' ),
			'parent_item_colon'  => '',
		);

		$slug = cpo_get_option( 'slug_product_tag' );
		if ( '' == $slug ) {
			$slug = 'product-tag';
		}
		$fields = array(
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => array( 'slug' => apply_filters( 'cpotheme_slug_product_tag', $slug ) ),
			'hierarchical'      => false,
		);

		register_taxonomy( 'cpo_product_tag', 'cpo_product', $fields );
	}
}
