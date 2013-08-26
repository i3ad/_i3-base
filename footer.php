</div><!-- /content-container -->

	<footer id="site-footer" class="row" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>

		<div class="footer-content inner clearfix">

			<div class="copyright float-left">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>

			<a href="#" id="to-top" title="<?php _e('to top', '_i3-base'); ?>" class="float-right" <?php echo ( get_theme_mod( 'to_top' ) ) ? "" : "style='display:none;'" ?>>
	            <span></span> <i class="icon-chevron-sign-up icon-large"></i>
	        </a>

			<?php $foot_nav = array(
				'theme_location'  => 'foot_nav',
				'menu'            => '',
				'container'       => 'nav',		// wrap <ul> in <nav> container
				'container_class' => 'site-nav float-right hide-on-mobile',
				'container_id'    => 'foot-nav',
				'menu_class'      => '', 		// remove the class "menu"
				'fallback_cb'     => '', 		// dont fallback on "wp_page_menu", insstead display nothing
				'items_wrap'      => '<ul role="navigation">%3$s</ul>',
				'depth'           => 1
			); 
			wp_nav_menu( $foot_nav ); ?><!-- /foot-nav -->

		</div>

	</footer><!-- /site-footer -->

 <?php wp_footer(); ?> 

</body>
</html>