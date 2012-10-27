<?php

	add_theme_support('menus');
	add_action('init','post_init');
		function blog_init(){
			$labels = array(
			'name' => _x('وبلاگ','post type general name'),
			'singular_name' => _x('پست','post type singular name'),
			'add new' => _x('افزودن' , 'بلاگ'),
			'add_new_item' => ('افزودن مطلب جدید'),
			'edit_item' => ('ویرایش مطلب'),
			'new_item' => ('مطلب جدبد'),
			'view_item' => ('مشاهده مطلب'),
			'search_items' => ('جستجوی مطالب'),
			'not_found' => ('هیچ مطلبی یافت نشد'),
			'not_found_in_trash' => ('هیچ مطلبی در زباله دان یافت نشد'),
			'parent_item_colon' => '',
			'menu_name' => 'وبلاگ'
		);
	}

	register_nav_menu('sidebar menu','Main Menu');
