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
			<?php if ( tag_description() ) : // Show an optional tag description ?>
				<p class="entry-description tag-description"><?php echo tag_description(); ?></p>
			<?php endif; ?>
		</header><!-- /tag-header -->

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