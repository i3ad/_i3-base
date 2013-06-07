<?php
/*
The template for displaying a "No posts found" message.
*/
?>
			<article class="no-results not-found" id="post-0" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h3>
				</header><!-- /entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					
					<?php get_search_form(); ?>

					<?php $args = array(
					    'depth'       => 0,
						'sort_column' => 'menu_order, post_title',
						'menu_class'  => 'menu',
						'include'     => '',
						'exclude'     => '',
						'echo'        => true,
						'show_home'   => false,
						'link_before' => '',
						'link_after'  => '' 
					); wp_page_menu( $args ); ?>

				</div><!-- /entry-content -->

			</article><!-- /post-0  -->