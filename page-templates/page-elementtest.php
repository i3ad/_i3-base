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

<div class="tabbed clearfix">

	<ul class="tabs">
		<li><a href="#tab-1">This is Tab 1</a></li>
		<li><a href="#tab-2">Tab Two</a></li>
		<li><a href="#tab-3">Tab Three</a></li>
		<li><a href="#tab-4">Tab Four</a></li>
		<li><a href="#tabby5">Tab 5</a></li>
	</ul>

	<div class="tab-content" id="tab-1">
		<h3>This is a really simple tabbed interface</h3>
		<p><img src="http://papermashup.com/demos/jquery-gallery/images/t1.png" width="120" height="120" class="thumbs"/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur enim. Nullam id ligula in nisl tincidunt feugiat. Curabitur eu magna porttitor ligula bibendum rhoncus. Etiam dignissim. Duis lobortis porta risus. Quisque velit metus, dignissim in, rhoncus at, congue quis, mi. Praesent vel lorem. Suspendisse ut dolor at justo tristique dapibus. Morbi erat mi, rutrum a, aliquam nec, mattis semper, leo. Maecenas blandit risus vitae quam. Vivamus ut odio. Pellentesque mollis arcu nec metus. Nullam bibendum scelerisque turpis. Aliquam erat volutpat. <br/>
		<a href="http://feeds2.feedburner.com/AshleyFord-Papermashupcom">Subscribe to my feed here</a> </p>
	</div>

	<div class="tab-content" id="tab-2">
		<h3>Tab 2</h3>
		<p><img src="http://papermashup.com/demos/jquery-gallery/images/t2.png" width="120" height="120" class="thumbs"/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur enim. Nullam id ligula in nisl tincidunt feugiat. Curabitur eu magna porttitor ligula bibendum rhoncus. Etiam dignissim. Duis lobortis porta risus. Quisque velit metus, dignissim in, rhoncus at, congue quis, mi. Praesent vel lorem. Suspendisse ut dolor at justo tristique dapibus. Morbi erat mi, rutrum a, aliquam nec <br/>
		<a href="http://feeds2.feedburner.com/AshleyFord-Papermashupcom">Subscribe to my feed here</a></p>
   </div>

	<div class="tab-content" id="tab-3">
		<h3>Tab 3</h3>
		<p><img src="http://papermashup.com/demos/jquery-gallery/images/t3.png" width="120" height="120" class="thumbs"/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur enim. Nullam id ligula in nisl tincidunt feugiat. Curabitur eu magna porttitor ligula bibendum rhoncus. Etiam dignissim. Duis lobortis porta risus. Quisque velit metus, dignissim in, rhoncus at, congue quis, mi. Praesent vel lorem. Suspendisse ut dolor at justo tristique dapibus. Morbi erat mi, rutrum a, aliquam nec, mattis semper, leo. Maecenas blandit risus vitae quam. Vivamus ut odio.<br/>
		<a href="http://feeds2.feedburner.com/AshleyFord-Papermashupcom">Subscribe to my feed here</a></p>
   </div>

   <div class="tab-content" id="tab-4">
		<h3>Tab 4</h3>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur enim. Nullam id ligula in nisl tincidunt feugiat. Curabitur eu magna porttitor ligula bibendum rhoncus. Etiam dignissim. Duis lobortis porta risus. Quisque velit metus, dignissim in, rhoncus at, congue quis, mi. Praesent vel lorem. Suspendisse ut dolor at justo tristique dapibus. Morbi erat mi, rutrum a, aliquam nec, mattis semper, leo. Maecenas blandit risus vitae quam. Vivamus ut odio. Pellentesque mollis arcu nec metus.<br/>
		<a href="http://feeds2.feedburner.com/AshleyFord-Papermashupcom">Subscribe to my feed here</a></p>
   </div>

   <div class="tab-content" id="tabby5">
		TABBY FEIF
   </div>

</div><!-- /tabs -->

		<hr/>
		
		<h4>Buttons</h4>
		
		<h5>Button Tag</h5>
		
		<button type="button" class="btn radius">Default</button>

		<button type="button" class="btn grey">Grey</button>

		<button type="button" class="btn dark">Dark</button>

		<button type="button" class="btn blue">Blue</button>

		<button type="button" class="btn green radius">Green</button>

		<button type="button" class="btn yellow">Yellow</button>

		<button type="button" class="btn red">Red</button>

		<button type="button" class="btn disabled radius">Disabled</button>

		<button type="button" class="btn link">Link</button>
		
		<h5>A Tag</h5>
		
		<a href="#" class="btn">Default</a>

		<a href="#" class="btn grey radius">Grey</a>

		<a href="#" class="btn dark">Dark</a>
		
		<a href="#" class="btn blue">Blue</a>

		<a href="#" class="btn green">Green</a>

		<a href="#" class="btn yellow radius">Yellow</a>

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
		
		<span class="label grey radius">grey</span>
		
		<span class="label dark">dark</span>
		
		<span class="label blue">blue</span>
		
		<span class="label green radius">green</span>
		
		<span class="label yellow">yellow</span>
		
		<span class="label red">red</span>
		
		<span class="label disabled radius">disabled</span>
		
		<span class="label link">link</span>
		
		<hr/>
		
		<h4>Badges, Labels and Headings</h4>
		
		<h1>Heading 1 <span class="label green radius">green</span></h1>
		
		<h1>Heading 1 <span class="badge green">12</span></h1>
		
		<h2>Heading 2 <span class="label red">red</span></h2>
		
		<h2>Heading 2 <span class="badge red">12</span></h2>
		
		<h3>Heading 3 <span class="label dark radius">dark</span></h3>
		
		<h3>Heading 3 <span class="badge dark">12</span></h3>
		
		<h4>Heading 4 <span class="label grey">grey</span></h4>
		
		<h4>Heading 4 <span class="badge grey">12</span></h4>
		
		<h5>Heading 5 <span class="label link">link</span></h5>
		
		<h5>Heading 5 <span class="badge link">12</span></h5>
		
		<h6>Heading 6 <span class="label">12</span></h6>
		
		<h6>Heading 6 <span class="badge">12</span></h6>
		
		<hr/>
		
		<h4>Alert-Box</h4>
		
		<div class="alert-box radius">
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
		
		<div class="alert-box green radius">
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
		
		<div class="panel radius">
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
		
		<div class="panel green radius">
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
			<span class="popover-content radius">
				<span class="arrow"><i class="icon-caret-down icon-large icon-rotate-180"></i></span>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</span>
			<button type="button" class="btn radius">Popover Bottom</button>
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
		
		<dl class="toggle-box radius">
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
		
		<dl class="accordion radius">
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
	
	</div><!-- /site-content -->
		
<?php get_footer(); ?>