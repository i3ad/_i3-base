<?php get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'loop', 'page' ); ?>

		<?php endwhile; endif; ?>

	</div><!-- /site-content -->

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>