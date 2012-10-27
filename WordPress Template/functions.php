<?php

	add_theme_support('menus');
	add_action('init','post_init');
		function news_init(){
		}

	register_nav_menu('sidebar menu','Main Menu');
