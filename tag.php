<?php get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php
			/* Queue the first post, that way we know
			 * what category we're dealing with (if that is the case).
			 *
			 * We reset this later so we can run the loop
			 * properly with a call to rewind_posts().
			 */
		the_post(); ?>

		<header class="entry-header tag-header">
			<h3 class="entry-title tag-title">
				<?php printf( __( 'Tag Archives: %s', '_i3-base' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
			</h3>
			<?php if ( category_description() ) : // Show an optional tag description ?>
				<div class="entry-description tag-description"><?php echo tag_description(); ?></div>
			<?php endif; ?>
		</header><!-- /tag-header -->

		<?php
			/* Since we called the_post() above, we need to
			 * rewind the loop back to the beginning that way
			 * we can run the loop properly, in full.
			 */
		rewind_posts(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

					<p class="entry-meta head-meta">
						<time class="updated" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i:s'); ?><?php the_time('T'); //This renders "YYYY-MM-DD hh:mm:ssTZD" ?>" pubdate><?php the_time(get_option('date_format')); //Date-format set in admin interface ?></time>
						<?php __('Categories: ', '_i3-base'); the_category(', '); ?>
						<?php if ( comments_open() ) : 
							echo '<span class="comments-links">';
							comments_popup_link( __('No comments yet', '_i3-base'), __('1 comment', '_i3-base'), __('% comments', '_i3-base'), 'comments-link', __('Comments are off for this post', '_i3-base') );
							echo '</span>';
						endif; // comments_open() ?>
					</p><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content">
					<?php the_content(__('… Read more &raquo;', '_i3-base')); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer">
					<p class="entry-meta foot-meta">
						<div class="author-info">
							<h4><?php the_author_meta( 'display_name' );//Display authors name as set in profile ?></h4>
							<p><?php the_author_meta( 'description' ); ?></p>
							<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php echo __('View all posts by ','_i3-base'), the_author_meta( 'display_name' ); ?>
							</a>
						</div><!-- /author-info -->	

						<?php the_tags( __('Tags: ', '_i3-base'), ', ', ''); ?>
						<?php edit_post_link(); ?>
					</p>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; ?> 

			<?php page_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>