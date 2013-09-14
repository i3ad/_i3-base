<div class="search_main clearfix">
    <form method="get" class="searchform" action="<?php echo home_url( '/' ); ?>" >
        <input type="text" class="field s" name="s" value="<?php _e( 'Search...', '_i3-base' ); ?>" onfocus="if (this.value == '<?php _e( 'Search...', '_i3-base' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'Search...', '_i3-base' ); ?>';}" />
        <input type="image" class="searchimg"src="<?php echo get_template_directory_uri(); ?>/inc/img/ico-search.png" alt="<?php _e( 'Search', '_i3-base' ); ?>" class="submit" name="submit" />
    </form>    
</div>
