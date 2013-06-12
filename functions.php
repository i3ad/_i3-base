<?php
/* ==========================================================================
   TABLE OF CONTENTS
   ========================================================================== 

    $THEME SUPPORT - thumbnails, post-formats
    $THEME CUSTOMIZER - text-colors, logo-upload
    $REGISTER NAV MENUS - register top, main and foot-nav
    $WIDGET AREAS - sidebar, footer
    $POST / PAGE NAVIGATION - page-navigation, single-post-navigation
    $MISC - excerpt, editor-styles
*/

/* ==========================================================================
   $THEME SUPPORT
   ========================================================================== */

    // Enable post-thumbnails
    add_theme_support( 'post-thumbnails' ); // For all post-types
    // For spezific/multiple post-types:
    // add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );

    // Custom image sizes
#    if ( function_exists( 'add_image_size' ) ) { 
#       add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
#       add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
#   }

    // Enable custom-background (WP 3.4)
    $custom_bg = array(
        'default-color'          => '',
        'default-image'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    global $wp_version;
    if ( version_compare( $wp_version, '3.4', '>=' ) ) 
        add_theme_support( 'custom-background', $custom_bg ); 
    else
        add_custom_background( $custom_bg );

/* ==========================================================================
   $THEME CUSTOMIZER
   ========================================================================== */

    // Add custom text colors (body, link, hover)
    function custom_text_colors( $wp_customize ) {
    
        $colors = array();
        $colors[] = array(
            'slug'      =>'content_text_color', 
            'default'   => '#333',
            'label'     => __('Content Text Color', '_i3-base')
        );
        $colors[] = array(
            'slug'      =>'content_link_color', 
            'default'   => '#03f',
            'label'     => __('Content Link Color', '_i3-base')
        );
        $colors[] = array(
            'slug'      =>'content_link_hover_color', 
            'default'   => '#69f',
            'label'     => __('Content Link Hover Color', '_i3-base')
        );
        foreach( $colors as $color ) {
            // SETTINGS
            $wp_customize->add_setting( $color['slug'], array(
                    'default'       => $color['default'],
                    'type'          => 'option', 
                    'capability'    => 'edit_theme_options'
                )
            );
            // CONTROLS
            $wp_customize->add_control(
                new WP_Customize_Color_Control( $wp_customize, $color['slug'], array(
                    'label'      => $color['label'], 
                    'section'    => 'colors',
                    'settings'   => $color['slug'])
                )
            );
        }

    }
    add_action( 'customize_register', 'custom_text_colors' );

    // Add custom site logo
    function custom_site_logo( $wp_customize ) {
        
        $wp_customize->add_setting( 'custom_logo' );

        $wp_customize->add_control( 
            new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
                'label'    => __( 'Custom Site Logo', '_i3-base' ),
                'section'  => 'title_tagline',    // Add this option to the default "Site Title & Tagline" section
                'settings' => 'custom_logo',
            ) ) );
    }
    add_action('customize_register', 'custom_site_logo');

/* ==========================================================================
   $REGISTER NAV MENUS
   ========================================================================== */

	// Register navigation-menus, top-nav, main-nav, foot-nav
	register_nav_menus( array(
		'top_nav'	=> __('Top Navigation Menu', '_i3-base'),
		'main_nav'	=> __('Main Navigation Menu', '_i3-base'),
		'foot_nav'	=> __('Footer Navigation Menu', '_i3-base')
	));

/* ==========================================================================
   $WIDGET AREAS
   ========================================================================== */

	// Register default sidebar
    register_sidebar(array(
    	'id' 			=> 'sidebar-1',
    	'name' 			=> __('Sidebar 1', '_i3-base'),
    	'description' 	=> __('The first (default) sidebar.', '_i3-base'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));

    // Register first footer-sidebar
    register_sidebar(array(
    	'id' 			=> 'footer-1',
    	'name' 			=> __('Footer 1', '_i3-base'),
    	'description' 	=> __('The first footer sidebar.', '_i3-base'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));
    // Register second footer-sidebar
    register_sidebar(array(
    	'id' 			=> 'footer-2',
    	'name' 			=> __('Footer 2', '_i3-base'),
    	'description' 	=> __('The second footer sidebar.', '_i3-base'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));
    // Register third footer-sidebar
    register_sidebar(array(
    	'id' 			=> 'footer-3',
    	'name' 			=> __('Footer 3', '_i3-base'),
    	'description' 	=> __('The third footer sidebar.', '_i3-base'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));

/* ==========================================================================
   $POST / PAGE NAVIGATION
   ========================================================================== */

    // Single-post-navigation
	function single_post_navigation() {
		echo '<div class="post-navigation single-post-navigation">';
		echo '	<div class="next-posts">'.next_post('% >', '', 'yes').'</div>';
		echo '	<div class="prev-posts">'.previous_post('< %', '', 'yes').'</div>';
		echo '</div>';
	}

    function page_navigation() {
	    global $wp_rewrite, $wp_query;
	    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	    $pagination = array(
		    'base' => @add_query_arg('paged','%#%'),
		    'format' => '',
		    'total' => $wp_query->max_num_pages,
		    'current' => $current,
		    'prev_text' => __('« Previous', '_i3-base'),
		    'next_text' => __('Next »', '_i3-base'),
		    'end_size' => 1,          // Show page 1 and the last page 
		    'mid_size' => 3,          // Show 3 pages, left and right from the current page
		    'show_all' => false,      // If set to True, then it will show all of the pages instead of a short list of the pages near the current page.
		    'type' => 'list'
	    );
	    if ( $wp_rewrite->using_permalinks() )
	    	$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	    if ( !empty( $wp_query->query_vars['s'] ) )
	    	$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	    echo '<div id="page-pagination" class="">';
	    echo paginate_links( $pagination );
	    echo '</div><!-- /page-pagination -->';
    }

/* ==========================================================================
   $MISC
   ========================================================================== */

   // Add a "Read more" link to the excerpt 
   // This needs to change if you are using a child-theme, see http://codex.wordpress.org/Customizing_the_Read_More
   function new_excerpt_more($more) {
	   global $post;
	   return '… <a href="'. get_permalink($post->ID) . '">' . __('Read more &raquo;', '_i3-base') . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

    // Add editor styles
    function my_theme_add_editor_styles() {
        add_editor_style( '/inc/css/editor-style.css' );
    }
    add_action( 'init', 'my_theme_add_editor_styles' );

    // Remove WP meta generator
    remove_action('wp_head', 'wp_generator');

    // Enqueue styles 
    function theme_styles() { 
        wp_register_style( 'reset', get_stylesheet_directory_uri() . '/inc/css/reset.css', array(), '1.0', 'all' );
        wp_register_style( 'base', get_stylesheet_directory_uri() . '/inc/css/base.css', array(), '1.0', 'all' );
        wp_register_style( 'grid', get_stylesheet_directory_uri() . '/inc/css/grid.css', array(), '1.0', 'all' );
        wp_register_style( 'fontawesome', get_stylesheet_directory_uri() . '/inc/css/font-awesome.min.css', array(), '1.0', 'all' );
        
        wp_enqueue_style( 'reset' );
        wp_enqueue_style( 'base' );
        wp_enqueue_style( 'grid' );
        wp_enqueue_style( 'fontawesome' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_styles' );


    // Enqueue scripts 
    function theme_scripts() { 

        wp_register_script( 'functions', get_stylesheet_directory_uri() . '/inc/js/functions.js', array('jquery'));
    
        wp_enqueue_script('jquery'); // Enable build in jQuery
        wp_enqueue_script( 'functions' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>