<?php get_header(); ?>

	<div id="site-content" class="primary" role="main">

			<?php if (is_category()) { ?>
				<header class="entry-header category-header">
					<h3 class="entry-title category-title">
						<span><?php _e("Posts Categorized:", "_i3-base"); ?></span> <?php single_cat_title(); ?>
					</h3>
					<?php if ( category_description() ) : // Show an optional category description ?>
						<p class="entry-description category-description"><?php echo category_description(); ?></p>
					<?php endif; ?>
				</header><!-- /category-header -->

			<?php } elseif (is_tag()) { ?>
				<header class="entry-header tag-header">
					<h3 class="entry-title tag-title">
						<span><?php _e("Posts Tagged:", "_i3-base"); ?></span> <?php single_tag_title(); ?>
					</h3>
					<?php if ( tag_description() ) : // Show an optional tag description ?>
						<p class="entry-description tag-description"><?php echo tag_description(); ?></p>
					<?php endif; ?>
				</header><!-- /tag-header -->

			<?php } elseif (taxonomy_exists($wp_query->query_vars['taxonomy'])) { ?>
					<header class="entry-header tax-header">
						<h3 class="entry-title tax-title">
							<?php if (is_term($wp_query->query_vars['term'])) { ?>
								<span><?php _e("Taxonomy Term:", "_i3-base"); ?></span> <?php echo $wp_query->query_vars['taxonomy']; ?> - <?php echo $wp_query->query_vars['term']; ?>
							<?php } else { ?>
								<span><?php _e("Taxonomy:", "_i3-base"); ?></span> <?php echo $wp_query->query_vars['taxonomy']; ?>
							<?php } ?>
						</h3>
						<?php $termDiscription = term_description( '', get_query_var( 'taxonomy' ) ); if($termDiscription != '') : ?>
							<p class="entry-description tax-description"><?php echo $termDiscription; ?></p>
						<?php endif; ?>
					</header><!-- /tax-header -->

			<?php } elseif ($post->post_type !== 'post') { ?>
				<header class="entry-header type-header">
					<h3 class="entry-title type-title">
						<span><?php _e("Post-Type:", "_i3-base"); ?></span> <?php echo $post->post_type; ?>
					</h3>
				</header><!-- /type-header -->

			<?php } elseif (is_author()) { global $post; $author_id = $post->post_author; ?>
				<header class="entry-header author-header">
					<h3 class="entry-title author-title">
						<span><?php _e("Posts By:", "_i3-base"); ?></span> <?php the_author_meta('display_name', $author_id); ?>
					</h3>
					<?php $authordesc = get_the_author_meta( 'description' ); if ( ! empty ( $authordesc ) ) { // Show an optional author description ?>
						<p class="entry-description author-description"><?php the_author_meta( 'description' ); ?></p>
					<?php } ?>
				</header><!-- /author-header -->

			<?php } elseif (is_day()) { ?>
				<header class="entry-header archive-header">
					<h3 class="entry-title archive-title">
						<span><?php _e("Daily Archives:", "_i3-base"); ?></span> <?php the_time('l, F j, Y'); ?>
					</h3>
				</header><!-- /archive-header -->

			<?php } elseif (is_month()) { ?>
				<header class="entry-header archive-header">
					<h3 class="entry-title archive-title">
						<span><?php _e("Monthly Archives:", "_i3-base"); ?></span> <?php the_time('F Y'); ?>
					</h3>
				</header><!-- /archive-header -->

			<?php } elseif (is_year()) { ?>
				<header class="entry-header archive-header">
					<h3 class="entry-title archive-title">
						<span><?php _e("Yearly Archives:", "_i3-base"); ?></span> <?php the_time('Y'); ?>
					</h3>
				</header><!-- /archive-header -->
			<?php } ?>


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