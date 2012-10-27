<?php

	add_theme_support('menus');
	add_action('init','post_init');
		function blog_init(){
			$labels = array(
			'name' => _x('بلاگ','post type general name'),
			'singular_name' => _x('پست','post type singular name'),
			'add new' => _x('افزودن' , 'بلاگ'),
			'add_new_item' => ('پست جدید'),
			'edit_item' => ('ویرایش مطلب'),
			'new_item' => ('پست جدبد'),
			'view_item' => ('مشاهده پست'),
			'search_items' => ('جستجوی پست'),
			'not_found' => ('هیچ پستی یافت نشد'),
			'not_found_in_trash' => ('هیچ پستی در زباله دان یافت نشد'),
			'parent_item_colon' => '',
			'menu_name' => 'بلاگ'
		);
	}

	register_nav_menu('sidebar menu','Main Menu');
