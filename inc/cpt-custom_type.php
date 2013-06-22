<?php
if ( ! function_exists('product-post-type') ) {

// Register Custom Post Type
function product_post_type() {
	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', '_i3-base' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', '_i3-base' ),
		'menu_name'           => __( 'Products', '_i3-base' ),
		'parent_item_colon'   => __( 'Parent Product:', '_i3-base' ),
		'all_items'           => __( 'All Products', '_i3-base' ),
		'view_item'           => __( 'View Product', '_i3-base' ),
		'add_new_item'        => __( 'Add New Product', '_i3-base' ),
		'add_new'             => __( 'New Product', '_i3-base' ),
		'edit_item'           => __( 'Edit Product', '_i3-base' ),
		'update_item'         => __( 'Update Product', '_i3-base' ),
		'search_items'        => __( 'Search products', '_i3-base' ),
		'not_found'           => __( 'No products found', '_i3-base' ),
		'not_found_in_trash'  => __( 'No products found in Trash', '_i3-base' ),
	);

	$args = array(
		'label'               => __( 'cpt-product', '_i3-base' ), // is that OK here ?
		'description'         => __( 'Product information pages', '_i3-base' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'product-cat', 'product-tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5, // below "Posts"
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'cpt-product', $args );
}

// Hook into the 'init' action
add_action( 'init', 'product_post_type', 0 );

} 

/////////////////////////////////////////////////////////////////////////

if ( ! function_exists('product_category_tax') ) {

// Register Custom Taxonomy
function product_category_tax()  {
	$labels = array(
		'name'                       => _x( 'Product Categories', 'Taxonomy General Name', '_i3-base' ),
		'singular_name'              => _x( 'Product Category', 'Taxonomy Singular Name', '_i3-base' ),
		'menu_name'                  => __( 'Product Categories', '_i3-base' ),
		'all_items'                  => __( 'All Product Categories', '_i3-base' ),
		'parent_item'                => __( 'Parent Product Category', '_i3-base' ),
		'parent_item_colon'          => __( 'Parent Product Category:', '_i3-base' ),
		'new_item_name'              => __( 'New Product Category', '_i3-base' ),
		'add_new_item'               => __( 'Add New Product Category', '_i3-base' ),
		'edit_item'                  => __( 'Edit Product Category', '_i3-base' ),
		'update_item'                => __( 'Update Product Category', '_i3-base' ),
		'separate_items_with_commas' => __( 'Separate Product Categories with commas', '_i3-base' ),
		'search_items'               => __( 'Search Product Categories', '_i3-base' ),
		'add_or_remove_items'        => __( 'Add or remove Product Categories', '_i3-base' ),
		'choose_from_most_used'      => __( 'Choose from the most used Product Categories', '_i3-base' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

	register_taxonomy( 'product-cat', 'cpt-product', $args );
}

// Hook into the 'init' action
add_action( 'init', 'product_category_tax', 0 );

}

//////////////////////////////////////////////////////////////////////

if ( ! function_exists('product_tag_tax') ) {

// Register Custom Taxonomy
function product_tag_tax()  {
	$labels = array(
		'name'                       => _x( 'Product Tags', 'Taxonomy General Name', '_i3-base' ),
		'singular_name'              => _x( 'Product Tag', 'Taxonomy Singular Name', '_i3-base' ),
		'menu_name'                  => __( 'Product Tags', '_i3-base' ),
		'all_items'                  => __( 'All Product Tags', '_i3-base' ),
		'parent_item'                => __( 'Parent Product Tag', '_i3-base' ),
		'parent_item_colon'          => __( 'Parent Product Tag:', '_i3-base' ),
		'new_item_name'              => __( 'New Product Tag', '_i3-base' ),
		'add_new_item'               => __( 'Add New Product Tag', '_i3-base' ),
		'edit_item'                  => __( 'Edit Product Tag', '_i3-base' ),
		'update_item'                => __( 'Update Product Tag', '_i3-base' ),
		'separate_items_with_commas' => __( 'Separate Product Tags with commas', '_i3-base' ),
		'search_items'               => __( 'Search Product Tags', '_i3-base' ),
		'add_or_remove_items'        => __( 'Add or remove Product Tags', '_i3-base' ),
		'choose_from_most_used'      => __( 'Choose from the most used Product Tags', '_i3-base' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

	register_taxonomy( 'product-tag', 'cpt-product', $args );
}

// Hook into the 'init' action
add_action( 'init', 'product_tag_tax', 0 );

}

;?>