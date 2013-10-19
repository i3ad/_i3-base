<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="title" content="<?php bloginfo('name'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<title>
		<?php // Custom title script (http://perishablepress.com/how-to-generate-perfect-wordpress-title-tags-without-a-plugin/

			if (is_tag()) { // Tag archiv page
				wp_title(''); echo __(' Archive - ', '_i3-base'); bloginfo('name');
				
			} elseif (is_archive()) { // Category archiv page
				wp_title(''); echo __(' Archive - ', '_i3-base'); bloginfo('name');
				
			} elseif (is_search()) { // Search results page
				echo __('Search for &quot;', '_i3-base').wp_specialchars($s).'&quot; - '; bloginfo('name');
					
			} elseif (is_404()) { // 404 error
				echo __('Not Found - ', '_i3-base'); bloginfo('name');
				
			} elseif (is_single()) { // Single page
				wp_title(''); echo ' - '; bloginfo('name');
			
			} elseif (is_front_page()) { // Overrides "Normal Page" for front-page
				bloginfo('name'); echo ' - '; bloginfo('description');
				
			} elseif (is_home()) { // Blog page
				wp_title(''); echo ' - '; bloginfo('name');
				
			} elseif (is_page()) { // Normal page
				wp_title(''); echo ' - '; bloginfo('name');
				
			} else { // Fallback for everything other
				bloginfo('name'); echo ' - '; bloginfo('description');
		} ?>
	</title>

	<?php // Import main stylesheets ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

	<?php // Icons & favicons (http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<?php if ( get_theme_mod( 'custom_favicon' ) ) : ?>

		<link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'custom_favicon' ); ?>">
		<link rel="icon" href="<?php echo get_theme_mod( 'custom_favicon' ); ?>">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.ico">
		<![endif]-->
		<!-- Set favicon for IE10 -->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_theme_mod( 'custom_favicon' ); ?>">

		
	<?php else : ?>

		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.png">
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.ico">
		<![endif]-->
		<!-- Set favicon for IE10 -->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.png">
	<?php endif; ?>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- START Includes -->
		<?php wp_head(); ?>
	<!-- END Includes -->

	<?php // Connect Theme-Customizer
		$content_text_color = get_option('content_text_color');
		$content_link_color = get_option('content_link_color');
		$content_link_hover_color = get_option('content_link_hover_color');
	?>
	<style>
		body {<?php echo ( get_theme_mod( 'sticky_nav' ) ) ? 'top: 40px;' : '' ?>}
		body, select, input, textarea { color:  <?php echo $content_text_color; ?>;}
		a, .btn.link, a.btn.link, .label.link, label.link:hover, .badge.link, .badge.link:hover { color:  <?php echo $content_link_color; ?>; }
		a:hover, a:active, a:focus, button.link:hover, button.link:active, button.link:focus, .btn.link:hover, .btn.link:active, .btn.link:focus, a.btn.link:hover, a.btn.link:active, a.btn.link:focus { color:  <?php echo $content_link_hover_color; ?>; }
	</style>

</head>

<body <?php body_class(); ?>>

	<div id="top-nav-container" class="<?php echo ( get_theme_mod( 'sticky_nav' ) ) ? "sticky-nav " : "" ?>">
	
		<div class="row">

			<h1 id="site-title" class="float-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' )); echo ' - '; echo esc_attr( get_bloginfo( 'description', 'display' )); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php $top_nav = array(
				'theme_location'  => 'top_nav',
				'menu'            => '',
				'container'       => 'nav',		// wrap <ul> in <nav> container
				'container_class' => 'site-nav float-left hide-on-mobile',
				'container_id'    => 'top-nav',
				'menu_class'      => '', 		// remove the class "menu"
				'fallback_cb'     => '', 		// dont fallback on "wp_page_menu"
				'items_wrap'      => '<ul role="navigation">%3$s</ul>'
			); 
			wp_nav_menu( $top_nav ); ?><!-- /top-nav -->
			
			<?php get_search_form(); ?>
	
		</div>

	</div><!-- /top-nav-container -->

	<div id="mobile-nav-container">
		<span class="close btn">
			<?php _e('Close', '_i3-base'); ?>
		</span>

		<?php $mobile_nav = array(
			'theme_location'  => 'mobile_nav',
			'menu'            => '',
			'container'       => 'nav',		// wrap <ul> in <nav> container
			'container_class' => '',
			'container_id'    => 'mobile-nav',
			'menu_class'      => '', 		// remove the class "menu"
			'fallback_cb'     => '', 		// dont fallback on "wp_page_menu"
			'items_wrap'      => '<ul role="navigation">%3$s</ul>'
		); 
		wp_nav_menu( $mobile_nav ); ?><!-- /mobile-nav -->
	</div>

	<header id="site-header" class="row" role="header">
		
		<div class="inner clearfix">

			<hgroup>
				<?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
					<div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); echo " - "; echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'custom_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					</div>
				<?php else : ?>
					<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>
			</hgroup>
			
			<?php get_search_form(); ?>
			<?php if( is_woocommerce_activated() ) { ?>


			<div>

<?php global $woocommerce; ?>
 
<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>

			</div>

<?php } ?>
			
		</div>
	
	</header><!-- /site-header -->

	<nav id="main-nav" class="site-nav row">
		<?php $main_nav = array(
			'theme_location'  => 'main_nav',
			'menu'            => '',
			'container'       => '',		// no <nav> wrapper
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '', 		// remove the class "menu"
			'fallback_cb'     => '', 		// dont fallback on "wp_page_menu"
			'items_wrap'      => '<ul role="navigation" class="hide-on-mobile">%3$s</ul>'
		); 
		wp_nav_menu( $main_nav ); ?><!-- /main-nav -->

		<?php get_search_form(); ?>

		<button id="toggle-mobile-nav" class="float-right btn hide-on-desktop" type="submit">
			<i class="icon-reorder"></i> <?php _e('Navigation', '_i3-base'); ?>
		</button>

	</nav>

	<div id="content-container" class="row">