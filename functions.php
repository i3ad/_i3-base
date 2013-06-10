<?php
	// Register navigation-menus, top-nav, main-nav, foot-nav
	register_nav_menus( array(
		'top_nav'	=> __('Top Navigation Menu', '_i3-base'),
		'main_nav'	=> __('Main Navigation Menu', '_i3-base'),
		'foot_nav'	=> __('Footer Navigation Menu', '_i3-base')
	));

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

    // Single-post-navigation
	function single_post_navigation() {
		echo '<div class="post-navigation single-post-navigation">';
		echo '	<div class="next-posts">'.next_post('% >', '', 'yes').'</div>';
		echo '	<div class="prev-posts">'.previous_post('< %', '', 'yes').'</div>';
		echo '</div>';
	}

	// Post-navigation - update coming from twentythirteen
	#function post_navigation() {
	#	echo '<div class="post-navigation">';
	#	echo '	<div class="next-posts">'.get_next_posts_link( __('&laquo; Older Entries', '_i3-base')).'</div>';
	#	echo '	<div class="prev-posts">'.get_previous_posts_link( __('Newer Entries &raquo;', '_i3-base')).'</div>';
	#	echo '</div><!-- /post-navigation -->';
	#}

    function page_navigation() {
	    global $wp_rewrite, $wp_query;
	    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	    $pagination = array(
		    'base' => @add_query_arg('paged','%#%'),
		    'format' => '',
		    'total' => $wp_query->max_num_pages,
		    'current' => $current,
		    'prev_text' => __('« Previous'),
		    'next_text' => __('Next »'),
		    'end_size' => 1,
		    'mid_size' => 2,
		    'show_all' => true,
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

    // Add a "Read more" link to the excerpt 
    // This needs to change if you are using a child-theme, see http://codex.wordpress.org/Customizing_the_Read_More
   function new_excerpt_more($more) {
	   global $post;
	   return '… <a href="'. get_permalink($post->ID) . '">' . __('Read more &raquo;', '_i3-base') . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

?>