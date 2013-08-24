			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title">
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						<?php if ( is_sticky() ) {?>
							<span class="subhead sticky-mark"><i class="icon-pushpin"></i></span>
						<?php } ?>
					</h3>

					<div class="entry-meta head-meta">
						
							
						
						<span class="author">
							<?php _e('by ', '_i3-base'); ?>
							<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>, 
						</span>
						<span class="date">
							<?php _e('on ', '_i3-base'); ?>
							<time class="updated" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i:s'); ?><?php the_time('T'); //This renders "YYYY-MM-DD hh:mm:ssTZD" ?>" pubdate><?php the_time(get_option('date_format')); //Date-format set in admin interface ?>, </time>
						</span>
						<span class="category">
							<?php _e('in ', '_i3-base'); ?>
							<?php the_category(', '); ?>
						</span>
						<?php if ( comments_open() ) : 
							echo '<span class="comments-links">';
							comments_popup_link( __('<i class="icon-comment-alt icon-large"></i> 0', '_i3-base'), __('<i class="icon-comment icon-large"></i> 1', '_i3-base'), __('<i class="icon-comments icon-large"></i> %', '_i3-base'), 'comments-link', __('', '_i3-base') );
							echo '</span>';
						endif; // comments_open() ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(__('… Read more &raquo;', '_i3-base')); ?>
                    <?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">						
						<?php #get_template_part( 'author', 'info' ); ?>	

						<span class="tags" title="<?php _e('Tags', '_i3-base'); ?>"><?php the_tags( __('<i class="icon-tags"></i> ', '_i3-base'), ', ', ''); ?></span>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->