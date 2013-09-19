<span class="subheader format-mark">
	<?php if ( is_sticky() ) {
		echo '<i class="icon-pushpin"></i>';
							
	} elseif ( has_post_format( 'image' )) {
	  	echo '<i class="icon-picture"></i>';

	} elseif ( has_post_format( 'gallery' )) {
		echo '<i class="icon-eye-open"></i>';

	} elseif ( has_post_format( 'audio' )) {
		echo '<i class="icon-music"></i>';

	} elseif ( has_post_format( 'video' )) {
		echo '<i class="icon-film"></i>';

	} elseif ( has_post_format( 'link' )) {
		echo '<i class="icon-link"></i>';

	} elseif ( has_post_format( 'quote' )) {
		echo '<i class="icon-quote-left"></i>';

	} elseif ( has_post_format( 'chat' )) {
		echo '<i class="icon-comments-alt"></i>';

	} elseif ( has_post_format( 'status' )) {
		echo '<i class="icon-info"></i>';

	} elseif ( has_post_format( 'aside' )) {
		echo '<i class="icon-asterisk"></i>';

	}; ?>
</span>