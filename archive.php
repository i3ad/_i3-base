<?php get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php
			/* Queue the first post, that way we know
			 * what archiv we're dealing with (if that is the case).
			 *
			 * We reset this later so we can run the loop
			 * properly with a call to rewind_posts().
			 */
		the_post(); ?>

		<header class="entry-header archive-header">
			<h3 class="entry-title archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', '_i3-base' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', '_i3-base' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', '_i3-base' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', '_i3-base' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', '_i3-base' ) ) . '</span>' );
					else :
						_e( 'Archives', '_i3-base' );
					endif;
				?></h3>
		</header><!-- /archive-header -->

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