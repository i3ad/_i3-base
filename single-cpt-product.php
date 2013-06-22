<?php get_header(); ?>

	<div id="site-content" class="primary grid nine" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php the_title(); ?></h3>

					<div class="entry-meta head-meta">
						<time class="updated" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i:s'); ?><?php the_time('T'); //This renders "YYYY-MM-DD hh:mm:ssTZD" ?>" pubdate><?php the_time(get_option('date_format')); //Date-format set in admin interface ?></time>
						<?php echo get_the_term_list( $post->ID, 'product-cat', _e('Product Categories: ', '_i3-base'), ', ', '' ); ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">
						<?php get_template_part( 'author', 'info' ); ?>

						<?php echo get_the_term_list( $post->ID, 'product-tag', _e('Product Tags: ', '_i3-base'), ', ', '' ); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; ?>

			<?php echo related_content( 'product-tag' ); ?><!-- /related content --> 

			<?php single_post_navigation(); ?><!-- /single-post-navigation --> 

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
		


