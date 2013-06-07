<?php 
/*
This is the 404 Template
*/
get_header(); ?>

	<div id="site-content" class="primary" role="main">

			<article class="404 not-found" id="page-404-error" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php _e('Error 404 - Page Not Found','html5reset'); ?></h3>
				</header><!-- /entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
				
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

			</article><!-- /page-404-error  -->

	</div><!-- /site-content -->

<?php get_sidebar(); ?>
		
<?php wp_footer(); ?>

