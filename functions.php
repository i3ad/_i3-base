<?php
	// Register default sidebar
    register_sidebar(array(
    	'id' 			=> 'sidebar-1',
    	'name' 			=> __('Sidebar 1', 'bonestheme'),
    	'description' 	=> __('The first (primary) sidebar.', 'bonestheme'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));

    // Register first footer-sidebar
    register_sidebar(array(
    	'id' 			=> 'footer-1',
    	'name' 			=> __('Footer 1', 'bonestheme'),
    	'description' 	=> __('The first footer sidebar.', 'bonestheme'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));
    // Register second footer-sidebar
    register_sidebar(array(
    	'id' 			=> 'footer-2',
    	'name' 			=> __('Footer 2', 'bonestheme'),
    	'description' 	=> __('The second footer sidebar.', 'bonestheme'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));
    // Register third footer-sidebar
    register_sidebar(array(
    	'id' 			=> 'footer-3',
    	'name' 			=> __('Footer 3', 'bonestheme'),
    	'description' 	=> __('The third footer sidebar.', 'bonestheme'),
    	'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h4 class="widgettitle">',
    	'after_title' 	=> '</h4>',
    ));

	// Post-navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="post-navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
		echo '</div><!-- /post-navigation -->';
	}

	// Post-Pagination (http://www.kriesi.at/archives/how-to-build-a-wordpress-post-pagination-without-plugin)
	function post_pagination($pages = '', $range = 2) {  
    	$showitems = ($range * 2)+1;  

	    global $paged;
	    if(empty($paged)) $paged = 1;

	    if($pages == '')
	    {
	        global $wp_query;
	        $pages = $wp_query->max_num_pages;
	        if(!$pages)
	        {
	            $pages = 1;
	        }
	    }   

	    if(1 != $pages)
	    {
	        echo "<div class='pagination'>";
	        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
	        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

	        for ($i=1; $i <= $pages; $i++)
	        {
	            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	            {
	                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
	            }
	        }

	        if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
	        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
	        echo "</div>\n";
	    }
	}

	// Display the author info
	function author_info() {
		echo '<div class="author-info">';
		echo '	<h4>'.$author = get_the_author().'</h4>';
		echo '	<p>'.the_author_meta( 'description' ).'</p>';
		echo '	<a class="author-link" href="'.echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">';
		printf( __( 'View all posts by ', 'twentytwelve' ), get_the_author());
		echo '	</a></div><!-- /author-info -->';
	}

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}

?>