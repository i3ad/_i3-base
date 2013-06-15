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

		<header class="entry-header category-header">
			<h3 class="entry-title category-title">
				<?php printf( __( 'Category Archives: %s', '_i3-base' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
			</h3>
			<?php if ( category_description() ) : // Show an optional category description ?>
				<p class="entry-description category-description"><?php echo category_description(); ?></p>
			<?php endif; ?>
		</header><!-- /category-header -->

		<?php
			/* Since we called the_post() above, we need to
			 * rewind the loop back to the beginning that way
			 * we can run the loop properly, in full.
			 */
		rewind_posts(); ?>

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