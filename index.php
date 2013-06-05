<!DOCTYPE html>
<html lang="de" >
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/grid.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/base.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/font-awesome.min.css" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- <script src="<?php #echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.dev.js"></script> -->
	
	
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="header" role="header">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<div class="description"><?php bloginfo( 'description' ); ?></div>
</header>

<nav id="nav" role="navigation">
	<?php wp_nav_menu( array('menu' => 'primary') ); ?>
</nav>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<p class="entry-meta meta">Posted on</p>
			</header><!-- /entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer class="entry-footer">
						<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
						<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> | 
						<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
				<?php edit_post_link(__('Edit this entry'),'','.'); ?> <?php the_tags( __('Tags: '), ', ', ''); ?>
			</footer>

		</article>
		
<footer id="footer" class="source-org vcard copyright">
	<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
</footer>

<?php get_sidebar(); ?>
		
<?php wp_footer(); ?>

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
		
</body>
  
</html>