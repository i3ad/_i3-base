			<article <?php post_class('hentry grid three') ?> id="custom_type-<?php the_ID(); ?>" role="article">

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

					<div class="entry-meta head-meta">
						<time class="updated" datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i:s'); ?><?php the_time('T'); //This renders "YYYY-MM-DD hh:mm:ssTZD" ?>" pubdate><?php the_time(get_option('date_format')); //Date-format set in admin interface ?></time>
						<?php _e('Categories: ', '_i3-base'); the_category(', '); ?>
						<?php if ( comments_open() ) : 
							echo '<span class="comments-links">';
							comments_popup_link( __('No comments yet', '_i3-base'), __('1 comment', '_i3-base'), __('% comments', '_i3-base'), 'comments-link', __('Comments are off for this post', '_i3-base') );
							echo '</span>';
						endif; // comments_open() ?>
					</div><!-- /head-meta -->

				</header><!-- /entry-header -->

				<div class="entry-content clearfix">
					<?php the_content(__('… Read more &raquo;', '_i3-base')); ?>


<div class="alert-box">
<strong>Warning!</strong>
Your content goes here
<span class="close" href="#">
<i class="icon-remove"></i>
</span>
</div>


<div class="popover">
	<div class="popover-content">
		<span class="arrow"><i class="icon-caret-down icon-large"></i></span>
		
		<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
		<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
	</div>

<button type="button" class="btn">Pop</button>

</div>



<div class="dropdown-btn">

<button type="button" class="btn">
Dropdown Button <i class="icon-caret-down"></i>
</button>

<ul>
<li><a href="#">First</a></li>
<li><a href="#">Second Second Second Second Second</a></li>
<li class="sep"><a href="#">Last</a></li>
</ul>

</div>
<hr/>

<button type="button" class="btn">Button</button>

<button type="button" class="btn btn-grey">Button</button>

<button type="button" class="btn btn-dark">Button</button>

<button type="button" class="btn btn-light-blue">Button</button>

<button type="button" class="btn btn-green">Button</button>

<button type="button" class="btn btn-yellow">Button</button>

<button type="button" class="btn btn-red">Button</button>

<button type="button" class="btn btn-muted">Button</button>

<button type="button" class="btn btn-link">Button</button>

<hr/>


<div class="tabbed clearfix">
	<!-- The tabs -->
	<ul class="tabs">
	<li class="t1"><a class="t1 tab" title="<?php _e('Tab 1'); ?>"><?php _e('Tab 1'); ?></a></li>
	<li class="t2"><a class="t2 tab" title="<?php _e('Tab 2'); ?>"><?php _e('Tab 2'); ?></a></li>
	<li class="t3"><a class="t3 tab" title="<?php _e('Tab 3'); ?>"><?php _e('Tab 3'); ?></a></li>
	<li class="t4"><a class="t4 tab" title="<?php _e('Tab 4'); ?>"><?php _e('Tab 4'); ?></a></li>
	</ul>

	<!-- tab 1 -->
	<div class="t1">
	<!-- Put what you want in here.  For the sake of this tutorial, we'll make a list.  -->
	<ul>
		<li>List item</li>
		<li>List item</li>
		<li>List item</li>
		<li>List item</li>
		<li>List item</li>
	</ul>
	</div>

	<!-- tab 2 -->
	<div class="t2">
	<!-- Or, we could put a paragraph -->
		<p>This is a paragraph about the jQuery tabs tutorial.</p>
	</div>

	<!-- tab 3 -->
	<div class="t3">
	<!-- Or, we could add a div -->
		<div>Something needs to go in here!</div>
	</div>

	<!-- tab 4 -->
	<div class="t4">
	<!-- Why not put a few images in here? -->
		<p>
			<img src="image.gif" alt="Sample" />
			<img src="image.gif" alt="Sample" />
			<img src="image.gif" alt="Sample" />
		</p>
	</div>

</div><!-- tabbed -->


                    <?php edit_post_link(); ?>
				</div><!-- /entry-content -->

				<footer class="entry-footer entry-meta">						
						<?php get_template_part( 'author', 'info' ); ?>	

						<?php the_tags( __('Tags: ', '_i3-base'), ', ', ''); ?>
				</footer><!-- /entry-footer -->

			</article><!-- /post-<?php the_ID(); ?>  -->