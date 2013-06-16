<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!-- Custom title script (http://perishablepress.com/how-to-generate-perfect-wordpress-title-tags-without-a-plugin/) -->
	<title><?php if (function_exists('is_tag') && is_tag()) { echo __('Tag Archive for &quot;', '_i3-base').$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo __(' Archive - ', '_i3-base'); } elseif (is_search()) { echo __('Search for &quot;', '_i3-base').wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo __('Not Found - ', '_i3-base'); } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>

	<!-- Import main stylesheets -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

	<!-- Icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon.ico">
	<![endif]-->
	<!-- Set favicon for IE10 -->
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/win8-tile-icon.png">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php // Loads HTML5 Shiv JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!-- Connect theme-customizer -->
	<?php
		$content_text_color = get_option('content_text_color');
		$content_link_color = get_option('content_link_color');
		$content_link_hover_color = get_option('content_link_hover_color');
	?>
	<style>
		body, select, input, textarea { color:  <?php echo $content_text_color; ?>; }
		a, a:link, a:visited { color:  <?php echo $content_link_color; ?>; }
		a:hover, a:active, a:focus { color:  <?php echo $content_link_hover_color; ?>; }
	</style>

</head>

<body <?php body_class(); ?>>

	<div id="top-nav-container" class="row">

		<h1 id="site-title" class="float-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' )); echo ' - '; echo esc_attr( get_bloginfo( 'description', 'display' )); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<?php $top_nav = array(
			'theme_location'  => 'top_nav',
			'menu'            => '',
			'container'       => 'nav',		// wrap <ul> in <nav> container
			'container_class' => 'site-nav float-right',
			'container_id'    => 'top-nav',
			'menu_class'      => '', 		// remove the class "menu"
			'fallback_cb'     => '', 		// dont fallback on "wp_page_menu"
			'items_wrap'      => '<ul role="navigation">%3$s</ul>'
		); 
		wp_nav_menu( $top_nav ); ?><!-- /top-nav -->

	</div><!-- /top-nav-container -->

	<header id="site-header" class="row" role="header">

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
	
	</header><!-- /site-header -->

	<?php $main_nav = array(
		'theme_location'  => 'main_nav',
		'menu'            => '',
		'container'       => 'nav',		// wrap <ul> in <nav> container
		'container_class' => 'site-nav row',
		'container_id'    => 'main-nav',
		'menu_class'      => '', 		// remove the class "menu"
		'fallback_cb'     => '', 		// dont fallback on "wp_page_menu"
		'items_wrap'      => '<ul role="navigation">%3$s</ul>'
	); 
	wp_nav_menu( $main_nav ); ?><!-- /main-nav -->

	<div id="content-container" class="row">