<form method="get" id="searchform" role="search" action="<?php echo home_url( '/' ); ?>">
    <div>
    	<label class="screen-reader-text" for="s"><?php _e('Search for:','_i3-base'); ?></label>
        <input type="search" name="s" id="s" placeholder="<?php _e(' search','_i3-base'); ?>"/>
        <input type="submit" id="searchsubmit" class="btn" value="<?php _e('Search','_i3-base'); ?>" />
    </div>
</form>