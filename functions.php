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
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
    function is_woocommerce_activated() {
        if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
    }
}
function woocommerce_upsell_display( $posts_per_page = 4, $columns = 2, $orderby = 'rand' ) {
woocommerce_get_template( 'single-product/up-sells.php', array(
'posts_per_page' => $posts_per_page,
'orderby' => $orderby,
'columns' => $columns
) );
}
function woo_related_products_limit() {
  global $product;
    
    $args = array(
        'post_type'             => 'product',
        'no_found_rows'         => 1,
        'posts_per_page'        => 4,
        'ignore_sticky_posts'   => 1,
        'orderby'               => $orderby,
        'post__in'              => $related,
        'post__not_in'          => array($product->id)
    );
    return $args;
}
add_filter( 'woocommerce_related_products_args', 'woo_related_products_limit' );
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {

    global $woocommerce;
   
    ob_start(); ?>
        <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php $fragments['a.cart-contents'] = ob_get_clean();
    
    return $fragments;
    
}

/* ==========================================================================
   $INCLUDE FILES
   ========================================================================== */
   // The Example Custom Post Type
   require_once('inc/custom_type.php'); // you can disable this if you like
   
   // Shortcodes
   require_once('inc/shortcodes.php'); // Shortcode in here

/* ==========================================================================
   $RELATED CONTENT
   ========================================================================== */
// http://pippinsplugins.com/write-a-better-related-posts-plugin-for-custom-taxonomies/
// use like "echo related_content();" on normal loops
// and "echo related_content( 'taxonomy-name' );" on custom loops

    function related_content($taxonomy = '') {
     
        global $post;
        if($taxonomy == '') { $taxonomy = 'post_tag'; }
         
        $tags = wp_get_post_terms($post->ID, $taxonomy);
         
            if ($tags) {
                $args = array(
                    'post_type' => get_post_type($post->ID),
                    'post__not_in' => array( get_the_ID() ),
                    'posts_per_page' => 4, // change number of items
                    'tax_query' => array('relation' => 'OR' ),
                );

                foreach ( $tags as $tag ) {
                    $args['tax_query'][] = array(
                        'taxonomy' => $taxonomy,
                        'terms' => $tag->term_id,
                        'field' => 'id',
                        'operator' => 'IN',
                    );
                }

                $related = get_posts($args);
                if( $related ) {
                    $temp_post = $post;
                    $content .= '<h4>' .  __('Related Content', '_i3-base') . '</h4><ul class="related-posts-box">';
                        foreach($related as $post) : setup_postdata($post);
                                $content .= '<li><a href="' . get_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></li>';
                                    
                        endforeach;
                    $content .= '</ul>';
                    $post = $temp_post;
                }
            }
            return $content;
    }

/* ==========================================================================
   $ENQUEUE STYLES AND SCRIPTS
   ========================================================================== */

/* Enqueue styles
   ========================================================================== */
    function theme_styles() { 
        wp_register_style( 'reset', get_stylesheet_directory_uri() . '/inc/css/reset.css', array(), '1.0', 'all' );
        wp_register_style( 'base', get_stylesheet_directory_uri() . '/inc/css/base.css', array(), '1.0', 'all' );
        wp_register_style( 'grid', get_stylesheet_directory_uri() . '/inc/css/grid.css', array(), '1.0', 'all' );
        wp_register_style( 'woo', get_stylesheet_directory_uri() . '/inc/css/woo.css', array(), '1.0', 'all' );
        //wp_register_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,800'); // Bring in Open Sans from Google fonts
        wp_register_style( 'fontawesome', get_stylesheet_directory_uri() . '/inc/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all' );
        	
		
        wp_enqueue_style( 'reset' );
        wp_enqueue_style( 'base' );
        wp_enqueue_style( 'grid' );
        wp_enqueue_style( 'woo' ); // WooCommerce styling, can be disabled
        //wp_enqueue_style( 'open-sans' );
        wp_enqueue_style( 'fontawesome' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_styles' );

/* Enqueue scripts
   ========================================================================== */
    function theme_scripts() { 

        wp_register_script( 'functions', get_stylesheet_directory_uri() . '/inc/js/functions.js', array('jquery'));
    
        wp_enqueue_script( 'jquery' ); // Enable build-in jQuery
        wp_enqueue_script( 'functions' );
		
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );
	
/* Enqueue Admin scripts
   ========================================================================== */	
	#function theme_admin_scripts() {
#
	#	wp_enqueue_script( 'jquery-ui-sortable' );
	#	wp_enqueue_script( 'sneek-admin-scripts', get_template_directory_uri() . '/js/sneek-admin-scripts.js' );
	#}
	#add_action( 'admin_enqueue_scripts', 'theme_admin_scripts' );
	
 
/* Add JavaScript files if IE version is lower than 9
   ========================================================================== */
   
   /* http://wp.tutsplus.com/tutorials/theme-development/converting-wordpress-to-be-mobile-friendly/ */
	function ie_js_enhancements(){
		echo '
		<!-- Media-Queries / HTML5 -->
		<!--[if lt IE 9]>
			<script src="'.get_stylesheet_directory_uri().'/inc/js/html5shiv.js"></script>  
			<script src="'.get_stylesheet_directory_uri().'/inc/js/css3-mediaqueries.js"></script>  
		<![endif]-->
				
		<!-- FontAwesome for IE lower than 8 -->
		<!--[if IE 8]>
			<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/inc/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		';
	}
	add_action( 'wp_head', 'ie_js_enhancements' );

/* ==========================================================================
   $THEME SUPPORT
   ========================================================================== */

/* Enable thumbnails
   ========================================================================== */
    add_theme_support( 'post-thumbnails' ); // For all post-types
    // For spezific/multiple post-types:
    // add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );

/* Custom image sizes
   ========================================================================== */
#    if ( function_exists( 'add_image_size' ) ) { 
#       add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
#       add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
#   }

/* Enable custom-background (WP 3.4)
   ========================================================================== */
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

/* Add custom text colors (body, link, hover)
   ========================================================================== */
    function custom_text_colors( $wp_customize ) {
    
        $colors = array();
        $colors[] = array(
            'slug'      =>'content_text_color', 
            'default'   => '#333',
            'label'     => __('Content Text Color', '_i3-base')
        );
        $colors[] = array(
            'slug'      =>'content_link_color', 
            'default'   => '#4285f4',
            'label'     => __('Content Link Color', '_i3-base')
        );
        $colors[] = array(
            'slug'      =>'content_link_hover_color', 
            'default'   => '#76a7fa',
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

/* Custom typo options
   ========================================================================== */
    function custom_site_typo( $wp_customize ) {
        
        $wp_customize->add_section( 'custom_site_typo' , array(
		    'title'      => __( 'Typographie', '_i3-base' ),
		    'description'=> __( 'Add some bla bla here.', '_i3-base'),
		    'priority'   => 30,
		));

		$wp_customize->add_setting('txt_font_family', array(
            'default' => 'left',
        ));

		$wp_customize->add_control('txt_font_family', array(
			'label'      => __('Font Face', '_i3-base'),
			'section'    => 'custom_site_typo',
			'settings'   => 'txt_font_family',
			'type'       => 'select',
			'choices'    => array(
				'left'   => 'Left',
				'right'  => 'Right',
			),
		));

		$wp_customize->add_setting('heading_font_family', array(
			'default' => 'right',
		));

		$wp_customize->add_control('heading_font_family', array(
			'label'      => __('Heading Font Face', '_i3-base'),
			'section'    => 'custom_site_typo',
			'settings'   => 'heading_font_family',
			'type'       => 'select',
			'choices'    => array(
				'left'   => 'Left',
				'right'  => 'Right',
			),
		));


    }
    add_action('customize_register', 'custom_site_typo');   

/* Add custom site logo
   ========================================================================== */
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

/* Add custom Favicon
   ========================================================================== */
    function custom_site_favicon( $wp_customize ) {
        
        $wp_customize->add_setting( 'custom_favicon' );

        $wp_customize->add_control( 
            new WP_Customize_Image_Control( $wp_customize, 'custom_favicon', array(
                'label'    => __( 'Custom Favicon', '_i3-base' ),
                'section'  => 'title_tagline',    // Add this option to the default "Site Title & Tagline" section
                'settings' => 'custom_favicon',
            ) ) );
    }
    add_action('customize_register', 'custom_site_favicon');

/* Add sticky-nav option
   ========================================================================== */
    function add_sticky_nav( $wp_customize ) {
        
        $wp_customize->add_setting( 'sticky_nav', array(
            'default' => 0,
        ) );

        $wp_customize->add_control( 'sticky_nav', array(
            'label'     => __( 'Make Top-Nav sticky? ', '_i3-base' ),
            'type'      => 'checkbox',
            'section'   => 'nav',    // Add this option to the default "Navigation" section
            'priority'  => 1,
        ) );
    }
    add_action('customize_register', 'add_sticky_nav');

/* Add to top link
   ========================================================================== */
    function to_top_link( $wp_customize ) {
        
        $wp_customize->add_setting( 'to_top', array(
            'default' => 0,
        ) );

        $wp_customize->add_control( 'to_top', array(
            'label'     => __( 'Show to top link', '_i3-base' ),
            'type'      => 'checkbox',
            'section'   => 'nav',    // Add this option to the default "Navigation" section
        ) );
    }
    add_action('customize_register', 'to_top_link');

/* To top link text
   ========================================================================== */
    function to_top_text( $wp_customize ) {
        
        $wp_customize->add_setting( 'top_text', array(
            'default' => '',
        ) );

        $wp_customize->add_control( 'top_text', array(
            'label'     => __( 'Set "To Top" text ', '_i3-base' ),
            'section'   => 'nav',    // Add this option to the default "Navigation" section
        ) );
    }
    add_action('customize_register', 'to_top_text');

/* ==========================================================================
   $REGISTER NAV MENUS
   ========================================================================== */

	// Register navigation-menus, top-nav, main-nav, foot-nav
	register_nav_menus( array(
		'top_nav'	=> __('Top Navigation Menu', '_i3-base'),
		'main_nav'	=> __('Main Navigation Menu', '_i3-base'),
		'foot_nav'	=> __('Footer Navigation Menu', '_i3-base'),
		'mobile_nav'=> __('Mobile Navigation Menu', '_i3-base')
	));

/* ==========================================================================
   $WIDGET AREAS
   ========================================================================== */

/* Register default sidebar
   ========================================================================== */
    register_sidebar(array(
    	'id' 			=> 'sidebar-1',
    	'name' 			=> __('Sidebar 1', '_i3-base'),
    	'description' 	=> __('The first (default) sidebar.', '_i3-base'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));

/* Register footer sidebars
   ========================================================================== */
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

/* Make the Footer-Sidebar dynamic
   ========================================================================== */
    function i3_footer_sidebar_class() {
        $count = 0;

        if ( is_active_sidebar( 'footer-1' ) )
            $count++;

        if ( is_active_sidebar( 'footer-2' ) )
            $count++;

        if ( is_active_sidebar( 'footer-3' ) )
            $count++;

        $class = '';

        switch ( $count ) {
            case '1':
                $class = 'grid twelve';
                break;
            case '2':
                $class = 'grid six';
                break;
            case '3':
                $class = 'grid four';
                break;
        }

        if ( $class )
            echo $class; // no need do display "class="" here, its in the footer-sidebar
    }

/* ==========================================================================
   $POST / PAGE NAVIGATION
   ========================================================================== */

/* Single-post-navigation
   ========================================================================== */
	function single_post_navigation() {
        echo '<div class="post-navigation clearfix">';
        echo    '<div class="post-previous float-left">';
        echo        previous_post_link('%link', '<span title="'. __('Previous Post', '_i3-base') .'"><i class="icon-caret-left"></i> %title</span>');
        echo    '</div>';
        echo    '<div class="post-next float-right">';
        echo        next_post_link('%link', '<span title="'. __('Next Post', '_i3-base') .'">%title <i class="icon-caret-right"></i></span>');
        echo    '</div>';
        echo '</div> <!-- /post-navigation -->';
	}

/* Pagination
   ========================================================================== */
    function page_navigation() {
	    global $wp_rewrite, $wp_query;
	    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	    $pagination = array(
		    'base' => @add_query_arg('paged','%#%'),
		    'format' => '',
		    'total' => $wp_query->max_num_pages,
		    'current' => $current,
		    'prev_text' => __('<i class="icon-caret-left"></i> Previous', '_i3-base'),
		    'next_text' => __('Next <i class="icon-caret-right"></i>', '_i3-base'),
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
   $POST META
   ========================================================================== */
	#function twentythirteen_entry_meta() {
	#	if ( is_sticky() && is_home() && ! is_paged() )
	#		echo '<span class="author">' . __( 'Sticky', 'twentythirteen' ) . '</span>';








	#}
	#endif;
   
/* ==========================================================================
   $MISC
   ========================================================================== */

/* Add a "Read more" link to the excerpt 
   ========================================================================== */
   // This needs to change if you are using a child-theme, see http://codex.wordpress.org/Customizing_the_Read_More
   function new_excerpt_more($more) {
	   global $post;
	   return '… <a href="'. get_permalink($post->ID) . '">' . __('Read more &raquo;', '_i3-base') . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

/* Add editor styles
   ========================================================================== */
    function i3_editor_styles() {
        add_editor_style( '/inc/css/editor-style.css' );
    }
    add_action( 'init', 'i3_editor_styles' );

/* Remove WP meta generator
   ========================================================================== */
    remove_action('wp_head', 'wp_generator');

/* Switches default core markup for search form, comment form, and comments to output valid HTML5.
   ========================================================================== */	
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

/* Add Post-Formats
   ========================================================================== */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );		
	
?>