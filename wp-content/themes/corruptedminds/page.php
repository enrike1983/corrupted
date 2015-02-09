<?php get_header(); ?>
<div id="first-tab" data-bottom-top="background-position-y:0%;" data-top-bottom="background-position-y:100%" class="row tab auto-resize first-tab">
	<h1 id="one"></h1>
	<div id="logo" data-0="top:60px; opacity:1;" data-500="top:0px;opacity:0;"> </div>
	<?php //echo do_shortcode('[wonderplugin_audio id="1"]'); ?>
</div>
<div id="second-tab" class="row tab second-tab">
	<div class="padded-content">
		<h2 id="two">NEWS</h2>
		<div class="spacer"></div>
		<?php get_template_part('parts/news')?>
	</div>
</div>
<div id="third-tab" class="row tab auto-resize third-tab">
	<div class="padded-content">
		<h2 id="three">ABOUT</h2>
		<div class="spacer"></div>
		<?php get_template_part('content')?>
	</div>
</div>
<div id="fourth-tab" class="row tab fourth-tab auto-resize">
	<div class="padded-content">
		<h2 id="four">TOUR DATES</h2>
		<div class="spacer"></div>
		<?php get_template_part('parts/gigs') ?>
	</div>
</div>
<div id="fifth-tab" class="row tab fifth-tab">
	<div class="padded-content">
		<h2 id="five">MEDIA</h2>
		<div class="spacer"></div>
		<?php get_template_part('parts/gallery') ?>
	</div>
</div>
<div id="sixth-tab" class="row tab sixth-tab">
	<div class="padded-content">
		<h2 id="six">VIDEOS</h2>
		<div class="spacer"></div>
		<?php get_template_part('parts/videos')?>
	</div>
</div>
<div id="seventh-tab" class="row tab seventh-tab">
	<div class="padded-content">
		<h2 id="seven">CONTACTS</h2>
		<div class="spacer"></div>
		<?php get_template_part('parts/contacts')?>
	</div>
</div>
<?php get_footer(); ?>
