<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/zepto.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/back-slide.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts.js"></script>
	<title>CyrusB-Photography</title>
</head>
<body>
	<div class="container">
		<aside class="sidebar">
			<header>
				<hgroup>
					<h1 class="logo"><a href="index.php"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="150" height="124" alt="cyrusb-photography"/></a></h1>
					<h1 class="slogan"></h1>    
				</hgroup>
				<nav>
					<menu>
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'sidebar menu',
								'container'       => false, 
								'container_class' => '', 
								'menu_class'      => '', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '<br /><span>درباره هر منو</span>',
								'items_wrap'      => '<menu>%3$s</menu>'
							));
						?>
					</menu>
				</nav>
			</header>
			<div id="hide-sidebar">
				<a href="#" class="click-hide">
					<img src="<?php bloginfo('template_url'); ?>/images/menu_hide_arrow_top.png" alt="click-hide" />
				</a>
			</div>
		</aside>