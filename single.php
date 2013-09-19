<?php get_header(); ?>

	<div id="site-content" class="primary grid nine" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title">
						
						<?php get_template_part( 'template-parts/post', 'format' ); ?>
						
						<?php the_title(); ?>
					</h3>

					<?php get_template_part( 'template-parts/head', 'meta' ); ?>

				</header><!-- /entry-header -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(); ?>

					<?php wp_link_pages('before=<div class="page-links clearfix"><span class="head">'. __('Pages: ', '_i3-base') .'</span>&after=</div>&next_or_number=number&pagelink=<span class="item">%</span>'); ?>
					<?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">
					<?php get_template_part( 'template-parts/foot', 'meta' ); ?>
				</footer><!-- /entry-footer -->
				
				<?php get_template_part( 'template-parts/author', 'info' ); ?>

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; ?>

			<?php #echo related_content(); ?><!-- /related content --> 

			<?php single_post_navigation(); ?><!-- /single-post-navigation --> 

			<?php comments_template(); // uncomment if you want to use them ?><!-- /comments-template --> 

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
		


