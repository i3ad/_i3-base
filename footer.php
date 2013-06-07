	<footer id="site-footer" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>

		<?php $foot_nav = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'nav',		// wrap <ul> in <nav> container
			'container_class' => 'site-nav',
			'container_id'    => 'foot-nav',
			'menu_class'      => '', 		// remove the class "menu"
			'fallback_cb'     => '', 		// dont fallback on "wp_page_menu"
			'items_wrap'      => '<ul role="navigation">%3$s</ul>',
		); 
		wp_nav_menu( $foot_nav ); ?><!-- /foot-nav -->

		<div class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>

	</footer><!-- /site-footer -->

	<!-- Import scripts -->
	<!-- <script src="<?php #echo get_stylesheet_uri(); ?>/inc/js/functions.js"></script> -->
		
</body>
</html>