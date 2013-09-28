<?php
/*
Template Name: Viewtoggle Template
*/
get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'loop', 'page' ); ?>

		<?php endwhile; endif; ?>

		<ul class="view_toggle clearfix float-right">
			<li class="btn grid_view"><span>Grid view</span></li>
			<li class="btn list_view"><span>List view</span></li>
		</ul>

		<?php // WP_Query arguments
			$args = array (
				'post_type'              => 'post',
				'post_status'            => 'publish',
				'posts_per_page'         => '-1'
			);

			// The Query
			$query = new WP_Query( $args );

		// The Loop
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php get_template_part( 'loop', 'blog' ); ?>

		<?php endwhile; ?> 

			<?php page_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; 
			// Restore original Post Data
			wp_reset_postdata(); ?>

	</div><!-- /site-content -->
		
<?php get_footer(); ?>