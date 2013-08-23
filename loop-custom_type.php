			<article <?php post_class('hentry') ?> id="custom_type-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

					<div class="entry-meta head-meta">
						<?php echo get_the_term_list( $post->ID, 'custom_cat', __('Custom Categories: ', '_i3-base'), ', ', '' ); ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(__('… Read more &raquo;', '_i3-base')); ?>

                    <?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">						
						<?php get_template_part( 'author', 'info' ); ?>	

						<?php echo get_the_term_list( $post->ID, 'custom_tag', __('<i class="icon-tags"></i> ', '_i3-base'), ', ', '' ); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->