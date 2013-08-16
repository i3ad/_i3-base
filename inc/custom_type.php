<?php
/* ==========================================================================
   TABLE OF CONTENTS
   ========================================================================== 

    $ENQUEUE STYLES AND SCRIPTS
    $THEME SUPPORT - thumbnails, post-formats
    $THEME CUSTOMIZER - text-colors, logo-upload
    $REGISTER NAV MENUS - register top, main and foot-nav
    $WIDGET AREAS - sidebar, footer
    $POST / PAGE NAVIGATION - page-navigation, single-post-navigation
    $MISC - excerpt, editor-styles, etc
*/

/* ==========================================================================
   $REGISTER THE NEW POST TYPE
   ========================================================================== */

if ( ! function_exists('add_custom_type') ) {

// Register Custom Post Type
function add_custom_type() {
	$labels = array(
		'name'                => _x( 'Items', 'Post Type General Name', '_i3-base' ),
		'singular_name'       => _x( 'Item', 'Post Type Singular Name', '_i3-base' ),
		'menu_name'           => __( 'Custom Type', '_i3-base' ),
		'parent_item_colon'   => __( 'Parent Item:', '_i3-base' ),
		'all_items'           => __( 'All Items', '_i3-base' ),
		'view_item'           => __( 'View Item', '_i3-base' ),
		'add_new_item'        => __( 'Add new Item', '_i3-base' ),
		'add_new'             => __( 'New Item', '_i3-base' ),
		'edit_item'           => __( 'Edit Item', '_i3-base' ),
		'update_item'         => __( 'Update Item', '_i3-base' ),
		'search_items'        => __( 'Search Item', '_i3-base' ),
		'not_found'           => __( 'No Items found', '_i3-base' ),
		'not_found_in_trash'  => __( 'No Items found in Trash', '_i3-base' ),
	);

	$args = array(
		'label'               => __( 'custom_type', '_i3-base' ), // SLUG, is that OK here ?
		'description'         => __( 'Custom Type information pages', '_i3-base' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'          => array( 'custom_cat', 'custom_tag' ), // add category or post_tag for default post taxonomies
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5, // below "Posts"
		'menu_icon'           => get_stylesheet_directory_uri() . '/inc/img/custom-type-icon.png',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'custom_type', $args );
}

// Hook into the 'init' action
add_action( 'init', 'add_custom_type', 0 );

} 

/* ==========================================================================
   $CUSTOM CATEGORY TAXONOMY
   ========================================================================== */

if ( ! function_exists('add_custom_cat') ) {

// Register Custom Taxonomy
function add_custom_cat()  {
	$labels = array(
		'name'                       => _x( 'Custom Categories', 'Taxonomy General Name', '_i3-base' ),
		'singular_name'              => _x( 'Custom Category', 'Taxonomy Singular Name', '_i3-base' ),
		'menu_name'                  => __( 'Custom Categories', '_i3-base' ),
		'all_items'                  => __( 'All Custom Categories', '_i3-base' ),
		'parent_item'                => __( 'Parent Custom Category', '_i3-base' ),
		'parent_item_colon'          => __( 'Parent Custom Category:', '_i3-base' ),
		'new_item_name'              => __( 'New Custom Category', '_i3-base' ),
		'add_new_item'               => __( 'Add new Custom Category', '_i3-base' ),
		'edit_item'                  => __( 'Edit Custom Category', '_i3-base' ),
		'update_item'                => __( 'Update Custom Category', '_i3-base' ),
		'separate_items_with_commas' => __( 'Separate Custom Categories with commas', '_i3-base' ),
		'search_items'               => __( 'Search Custom Categories', '_i3-base' ),
		'add_or_remove_items'        => __( 'Add or remove Custom Categories', '_i3-base' ),
		'choose_from_most_used'      => __( 'Choose from the most used Custom Categories', '_i3-base' ),
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

	register_taxonomy( 'custom_cat', 'custom_type', $args );
}

// Hook into the 'init' action
add_action( 'init', 'add_custom_cat', 0 );

}

/* ==========================================================================
   $CUSTOM TAG TAXONOMY
   ========================================================================== */

if ( ! function_exists('add_custom_tag') ) {

// Register Custom Taxonomy
function add_custom_tag()  {
	$labels = array(
		'name'                       => _x( 'Custom Tags', 'Taxonomy General Name', '_i3-base' ),
		'singular_name'              => _x( 'Custom Tag', 'Taxonomy Singular Name', '_i3-base' ),
		'menu_name'                  => __( 'Custom Tags', '_i3-base' ),
		'all_items'                  => __( 'All Custom Tags', '_i3-base' ),
		'parent_item'                => __( 'Parent Custom Tag', '_i3-base' ),
		'parent_item_colon'          => __( 'Parent Custom Tag:', '_i3-base' ),
		'new_item_name'              => __( 'New Custom Tag', '_i3-base' ),
		'add_new_item'               => __( 'Add new Custom Tag', '_i3-base' ),
		'edit_item'                  => __( 'Edit Custom Tag', '_i3-base' ),
		'update_item'                => __( 'Update Custom Tag', '_i3-base' ),
		'separate_items_with_commas' => __( 'Separate Custom Tags with commas', '_i3-base' ),
		'search_items'               => __( 'Search Custom Tags', '_i3-base' ),
		'add_or_remove_items'        => __( 'Add or remove Custom Tags', '_i3-base' ),
		'choose_from_most_used'      => __( 'Choose from the most used Custom Tags', '_i3-base' ),
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

	register_taxonomy( 'custom_tag', 'custom_type', $args );
}

// Hook into the 'init' action
add_action( 'init', 'add_custom_tag', 0 );

}

/* ==========================================================================
   $CUSTOM ADMIN COLUMNS
   ========================================================================== */

/* Enable featured image for this custom type
   ========================================================================== */
// Uncomment if not set in themes functions.php
// add_theme_support( 'post-thumbnails', array( 'custom_type' ) );

/* Create custom image size
   ========================================================================== */
add_image_size( 'custom_type_thumb', 50, 50, true ); // 100 pixels wide by 100 pixels tall, hard crop mode

/* Get the featured image
   ========================================================================== */
function i3_get_featured_image($post_ID) {  
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);  
    if ($post_thumbnail_id) {  
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'custom_type_thumb');  
        return $post_thumbnail_img[0];  
    }  
}  

/* Add new admin columns
   ========================================================================== */
function i3_columns_head($defaults) { 
	//$defaults['item_id'] = __( 'ID', '_i3-base' ); // ID column
    //$defaults['featured_image'] = __( 'Featured Image', '_i3-base' ); // Featured image column

	$defaults = array(
		'cb' 					=> '<input type="checkbox" />',
		'item_id' 				=> __( 'ID', '_i3-base' ),
		'featured_image' 		=> __( 'Image', '_i3-base' ),
		'title' 				=> __( 'Title', '_i3-base' ),
		'taxonomy-custom_cat'	=> __( 'Custom Category', '_i3-base' ),
		'taxonomy-custom_tag'	=> __( 'Custom Tag', '_i3-base' ),
		'date' 					=> __( 'Date', '_i3-base' )
	);
    return $defaults;  
}  

/* Style the new columns
   ========================================================================== */ 
function i3_columns_style() {
    echo '<style type="text/css">';
    echo '.column-item_id { width: 3.5em }';
    echo '.column-featured_image { width: 5em }';
    echo '</style>';
}
add_action('admin_head', 'i3_columns_style');
  
/* Show the featured image
   ========================================================================== */ 
function i3_columns_content($column_name, $post_ID) {  
    if ($column_name == 'featured_image') {  
        $post_featured_image = i3_get_featured_image($post_ID);

        echo '<a href="post.php?post=' . $post_ID . '&action=edit">'; 

        if ($post_featured_image) {  
            // If the post has a featured image ...
            echo '<img src="' . $post_featured_image . '" />';  
        }  
        else {  
            // If there is no featured image, fallback to ... 
            echo '<img width="50px" height="50px" src="' . get_stylesheet_directory_uri() . '/inc/img/no-thumb_100x100.jpg" />'; 
        } 

        echo '</a>'; 
        
    }  
    if ($column_name == 'item_id') { 
    	 the_ID();
    }
}    
add_filter('manage_custom_type_posts_columns', 'i3_columns_head');
add_action('manage_custom_type_posts_custom_column', 'i3_columns_content', 10, 2); 

;?>