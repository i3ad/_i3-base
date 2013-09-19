			<article <?php post_class('hentry') ?> id="post-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title">

						<?php get_template_part( 'template-parts/post', 'format' ); ?>

						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					</h3>

					<?php get_template_part( 'template-parts/head', 'meta' ); ?>

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(__('… Read more &raquo;', '_i3-base')); ?>
                    <?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta foot-meta">						
						<?php #get_template_part( 'template-parts/author', 'info' ); ?>	

						<?php get_template_part( 'template-parts/foot', 'meta' ); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->