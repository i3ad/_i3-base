<?php
/*
Template Name: Fullwidth Page
*/
wp_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('hentry') ?> id="page-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php the_title(); ?></h3>
				</header><!-- /entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer">
					<p class="entry-meta foot-meta">
						<?php edit_post_link(); ?>
					</p>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->

		<?php endwhile; endif; ?>

	</div><!-- /site-content -->
		
<?php wp_footer(); ?>