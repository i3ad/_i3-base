			<article <?php post_class('hentry') ?> id="page-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><?php the_title(); ?></h3>
				</header><!-- /entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer">
					<?php edit_post_link(); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->