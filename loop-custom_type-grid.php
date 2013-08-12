			<article <?php post_class('hentry grid three') ?> id="custom_type-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

					<div class="entry-meta head-meta">
						<time class="updated" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i:s'); ?><?php the_time('T'); //This renders "YYYY-MM-DD hh:mm:ssTZD" ?>" pubdate><?php the_time(get_option('date_format')); //Date-format set in admin interface ?></time>
						<?php _e('Categories: ', '_i3-base'); the_category(', '); ?>
						<?php if ( comments_open() ) : 
							echo '<span class="comments-links">';
							comments_popup_link( __('No comments yet', '_i3-base'), __('1 comment', '_i3-base'), __('% comments', '_i3-base'), 'comments-link', __('Comments are off for this post', '_i3-base') );
							echo '</span>';
						endif; // comments_open() ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(__('… Read more &raquo;', '_i3-base')); ?>

                    <?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">						
						<?php get_template_part( 'author', 'info' ); ?>	

						<?php the_tags( __('Tags: ', '_i3-base'), ', ', ''); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->