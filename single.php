<?php get_header(); ?>

	<div id="site-content" class="primary grid nine" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php the_title(); ?></h3>

					<div class="entry-meta head-meta">
						<?php _e('by ', '_i3-base'); ?>
						<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							<?php the_author_meta( 'display_name' ); ?>
						</a>
						<time class="updated" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i:s'); ?><?php the_time('T'); //This renders "YYYY-MM-DD hh:mm:ssTZD" ?>" pubdate><?php the_time(get_option('date_format')); //Date-format set in admin interface ?></time>
						<?php _e('Categories: '); the_category(', '); ?>
						<?php if ( comments_open() ) : 
							echo '<span class="comments-links">';
							comments_popup_link( __('<i class="icon-comment-alt icon-large"></i> 0', '_i3-base'), __('<i class="icon-comment icon-large"></i> 1', '_i3-base'), __('<i class="icon-comments icon-large"></i> %', '_i3-base'), 'comments-link', __('', '_i3-base') );
							echo '</span>';
						endif; // comments_open() ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">
						<?php get_template_part( 'author', 'info' ); ?>

						<?php the_tags( __('<i class="icon-tags"></i> ', '_i3-base'), ', ', ''); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; ?>

			<?php echo related_content(); ?><!-- /related content --> 

			<?php single_post_navigation(); ?><!-- /single-post-navigation --> 

			<?php comments_template(); // uncomment if you want to use them ?><!-- /comments-template --> 

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
		


