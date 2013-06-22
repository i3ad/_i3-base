<?php get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<header class="entry-header category-header">
			<h3 class="entry-title category-title">
				<?php post_type_archive_title(); ?>
			</h3>
		</header><!-- /category-header -->

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