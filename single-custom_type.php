<?php get_header(); ?>

	<div id="site-content" class="primary grid nine" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="custom_type-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php the_title(); ?></h3>

					<div class="entry-meta head-meta">
						<?php echo get_the_term_list( $post->ID, 'custom_cat', __('Custom Categories: ', '_i3-base'), ', ', '' ); ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">
						<?php get_template_part( 'author', 'info' ); ?>

						<?php echo get_the_term_list( $post->ID, 'custom_tag', __('<i class="icon-tags"></i> ', '_i3-base'), ', ', '' ); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; ?>

			<?php echo related_content( 'custom_tag' ); ?><!-- /related content --> 

			<?php single_post_navigation(); ?><!-- /single-post-navigation --> 

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
		


