<form method="get" id="searchform" role="search" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"><?php _e('Search for:','html5reset'); ?></label>
        <input type="search" name="s" id="s" value="search" placeholder="search" />
        <input type="submit" id="searchsubmit" value="<?php _e('Search','html5reset'); ?>" />
    </div>
</form>