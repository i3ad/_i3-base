<?php get_header(); ?>

	<div id="site-content" class="primary grid nine" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'loop', 'blog' ); ?>

		<?php endwhile; ?> 

			<?php page_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>