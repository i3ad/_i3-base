<?php
/*
Template Name: CPT-Product Template
*/
get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'loop', 'page' ); ?>

		<?php endwhile; endif; ?>

		<?php // WP_Query arguments
			$args = array (
				'post_type'              => 'cpt-product',
				'post_status'            => 'published',
				'posts_per_page'         => '-1'
			);

			// The Query
			$query = new WP_Query( $args );

		// The Loop
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php get_template_part( 'loop', 'custom_type-grid' ); ?>

		<?php endwhile; ?> 

			<?php page_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'loop', 'none' ); ?>

		<?php endif; 
			// Restore original Post Data
			wp_reset_postdata(); ?>

	</div><!-- /site-content -->
		
<?php get_footer(); ?>