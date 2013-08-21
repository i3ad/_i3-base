<?php
/*
Template Name: Test Template
*/
get_header(); ?>

	<div id="site-content" class="primary" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'loop', 'page' ); ?>

		<?php endwhile; endif; ?>
		
		<hr/>
		
		<h3>HTML ELEMENT TEST</h3>
		
		<h4>Buttons</h4>
		
		<h5>Button Tag</h5>
		
		<button type="button" class="btn">Default</button>

		<button type="button" class="btn grey">Grey</button>

		<button type="button" class="btn dark">Dark</button>

		<button type="button" class="btn blue">Blue</button>

		<button type="button" class="btn green">Green</button>

		<button type="button" class="btn yellow">Yellow</button>

		<button type="button" class="btn red">Red</button>

		<button type="button" class="btn disabled">Disabled</button>

		<button type="button" class="btn link">Link</button>
		
		<h5>A Tag</h5>
		
		<a href="#" class="btn">Default</a>

		<a href="#" class="btn grey">Grey</a>

		<a href="#" class="btn dark">Dark</a>
		
		<a href="#" class="btn blue">Blue</a>

		<a href="#" class="btn green">Green</a>

		<a href="#" class="btn yellow">Yellow</a>

		<a href="#" class="btn red">Red</a>

		<a href="#" class="btn disabled">Disabled</a>

		<a href="#" class="btn link">Link</a>

		<hr/>
		
		<h4>Badges</h4>
		
		<span class="badge">12</span>
		
		<span class="badge grey">12</span>
		
		<span class="badge dark">12</span>
		
		<span class="badge blue">12</span>
		
		<span class="badge green">12</span>
		
		<span class="badge yellow">12</span>
		
		<span class="badge red">12</span>
		
		<span class="badge disabled">12</span>
		
		<span class="badge link">12</span>
		
		<hr/>
		
		<h4>Labels</h4>
		
		<span class="label">12</span>
		
		<span class="label grey">grey</span>
		
		<span class="label dark">dark</span>
		
		<span class="label blue">blue</span>
		
		<span class="label green">green</span>
		
		<span class="label yellow">yellow</span>
		
		<span class="label red">red</span>
		
		<span class="label disabled">disabled</span>
		
		<span class="label link">link</span>
		
		<hr/>
		
		<h4>Badges, Labels and Headings</h4>
		
		<h1>Heading 1 <span class="label green">green</span></h1>
		
		<h1>Heading 1 <span class="badge green">12</span></h1>
		
		<h2>Heading 2 <span class="label red">red</span></h2>
		
		<h2>Heading 2 <span class="badge red">12</span></h2>
		
		<h3>Heading 3 <span class="label dark">dark</span></h3>
		
		<h3>Heading 3 <span class="badge dark">12</span></h3>
		
		<h4>Heading 4 <span class="label grey">grey</span></h4>
		
		<h4>Heading 4 <span class="badge grey">12</span></h4>
		
		<h5>Heading 5 <span class="label link">link</span></h5>
		
		<h5>Heading 5 <span class="badge link">12</span></h5>
		
		<h6>Heading 6 <span class="label">12</span></h6>
		
		<h6>Heading 6 <span class="badge">12</span></h6>
		
		<hr/>
		
		<h4>Alert-Box</h4>
		
		<div class="alert-box">
			<strong>Warning!</strong>
			Your content goes here
			<span class="close"><i class="icon-remove"></i></span>
		</div>
		
		<div class="alert-box grey">
			<strong>Warning!</strong>
			Your content goes here
			<span class="close"><i class="icon-remove"></i></span>
		</div>
				
		<div class="alert-box blue">
			<strong>Warning!</strong>
			Your content goes here
			<span class="close"><i class="icon-remove"></i></span>
		</div>
		
		<div class="alert-box green">
			<strong>Warning!</strong>
			Your content goes here
			<span class="close"><i class="icon-remove"></i></span>
		</div>
		
		<div class="alert-box yellow">
			<strong>Warning!</strong>
			Your content goes here
			<span class="close"><i class="icon-remove"></i></span>
		</div>
		
		<div class="alert-box red">
			<strong>Warning!</strong>
			Your content goes here
			<span class="close"><i class="icon-remove"></i></span>
		</div>
						
		<hr/>
		
		<h4>Panels</h4>
		
		<div class="panel">
			<strong>Warning!</strong>
			Your content goes here
		</div>
		
		<div class="panel grey">
			<strong>Warning!</strong>
			Your content goes here
		</div>
				
		<div class="panel blue">
			<strong>Warning!</strong>
			Your content goes here
		</div>
		
		<div class="panel green">
			<strong>Warning!</strong>
			Your content goes here
		</div>
		
		<div class="panel yellow">
			<strong>Warning!</strong>
			Your content goes here
		</div>
		
		<div class="panel red">
			<strong>Warning!</strong>
			Your content goes here
		</div>
						
		<hr/>
		
		<h4>Popover</h4>
		
		<div class="popover">
			<div class="popover-content">
				<span class="arrow"><i class="icon-caret-down icon-large"></i></span>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</div>
			<button type="button" class="btn">Popover</button>
		</div>
		
		<h5>Popover Bottom</h5>
		
		<div class="popover bottom">
			<span class="popover-content">
				<span class="arrow"><i class="icon-caret-down icon-large icon-rotate-180"></i></span>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</span>
			<button type="button" class="btn">Popover Bottom</button>
		</div>
		
		<h5>Popover Right</h5>
		
		<div class="popover right">
			<div class="popover-content">
				<span class="arrow"><i class="icon-caret-down icon-large icon-rotate-180"></i></span>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</div>
			<button type="button" class="btn">Popover Right</button>
		</div>
		
		<hr/>
		
		<h4>Dropdown Button</h4>
		
		<div class="dropdown-btn">
			<button type="button" class="btn">Dropdown Button <i class="icon-caret-down"></i></button>
			<ul>
				<li><a href="#">First</a></li>
				<li><a href="#">Second Second Second Second Second</a></li>
				<li class="sep"><a href="#">Last</a></li>
			</ul>
		</div>
		
		<hr/>
		
		<h4>Toggle-Box</h4>

		<dl class="toggle-box">
		  <dt class="toggle"><span>Toggler <i class="icon-plus"></i></span></dt>
		  <dd class="content"><p>This is the toggable content part.here u can insert everthing u want (nearly).</p></dd>
		</dl>
		
		<hr/>
		
		<h4>Accordion</h4>
		
		<dl class="accordion">
			<dt class="toggle"><span>Panel 1 <i class="icon-plus"></i></span></dt>
			<dd class="content"><p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p></dd>

			<dt class="toggle"><span>Panel 2 <i class="icon-plus"></i></span></dt>
			<dd class="content"><p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p></dd>

			<dt class="toggle"><span>Panel 3 <i class="icon-plus"></i></span></dt>
			<dd class="content"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p></dd>
		</dl>
		
		<hr/>
		
		<h4>Accordion</h4>
		
		<dl class="accordion">
			<dt class="toggle"><span>Panel 1 <i class="icon-plus"></i></span></dt>
			<dd class="content"><p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p></dd>

			<dt class="toggle"><span>Panel 2 <i class="icon-plus"></i></span></dt>
			<dd class="content"><p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p></dd>

			<dt class="toggle"><span>Panel 3 <i class="icon-plus"></i></span></dt>
			<dd class="content"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p></dd>
		</dl>
		
		<hr/>
		
		<h4>Buttons</h4>
		
		<h5>Button Tag</h5>
		
		<button type="button" class="btn">Button</button>

		<button type="button" class="btn btn-grey">Button</button>

		<button type="button" class="btn btn-dark">Button</button>

		<button type="button" class="btn btn-light-blue">Button</button>

		<button type="button" class="btn btn-green">Button</button>

		<button type="button" class="btn btn-yellow">Button</button>

		<button type="button" class="btn btn-red">Button</button>

		<button type="button" class="btn btn-muted">Button</button>

		<button type="button" class="btn btn-link">Button</button>
		
		<h5>A Tag</h5>
		
		<a href="#" class="btn">Button</a>

		<a href="#" class="btn btn-grey">Button</a>

		<a href="#" class="btn btn-dark">Button</a>

		<a href="#" class="btn btn-light-blue">Button</a>

		<a href="#" class="btn btn-green">Button</a>

		<a href="#" class="btn btn-yellow">Button</a>

		<a href="#" class="btn btn-red">Button</a>

		<a href="#" class="btn btn-muted">Button</a>

		<a href="#" class="btn btn-link">Button</a>

		<hr/>
		
		<h4>Tabs</h4>
		
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



		
		

	</div><!-- /site-content -->
		
<?php get_footer(); ?>