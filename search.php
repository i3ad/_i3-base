<?php wp_header(); ?>

	<div id="site-content" class="primary" role="main">

		<header class="entry-header search-header">
			<h3 class="entry-title search-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
		</header><!-- /search-header -->

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

					<p class="entry-meta head-meta">
						<time class="updated" datetime="<?php get_the_time(); ?>" pubdate><?php the_time(); ?></time>
						<?php __('Categories: '); the_category(', '); ?>
						<?php if ( comments_open() ) : ?>
							<span class="comments-link">
								<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
							</span>
						<?php endif; // comments_open() ?>
					</p><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer">
					<p class="entry-meta foot-meta">
						<?php author_info(); ?>
						<?php the_tags( __('Tags: '), ', ', ''); ?>
						<?php edit_post_link(); ?>
					</p>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; ?>

			<?php #post_pagination(); ?>
			<!-- or -->
			<?php echo paginate_links( array(
			    'current'	=> max(1, get_query_var('paged')),
			    'total' 	=> $wp_query->max_num_pages,
			    'base' 		=> get_pagenum_link(1) . '%_%',  
			    'format' 	=> '?page=%#%'
			) ); // http://wordpress.stackexchange.com/questions/52405/paginate-links-adds-empty-href-to-first-page-and-previous-link ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>
		
<?php wp_footer(); ?>

