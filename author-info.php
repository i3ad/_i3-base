<div class="author-info">
	<h4 class="author-title"><?php the_author_meta( 'display_name' );//Display authors name as set in profile ?></h4>
							
	<?php $authordesc = get_the_author_meta( 'description' ); if ( ! empty ( $authordesc ) ) { // Show an optional author description ?>
		<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
	<?php } ?>
	<a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
		<?php echo __('View all posts by ','_i3-base'), the_author_meta( 'display_name' ); ?>
	</a>
</div><!-- /author-info -->