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
		
			$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 2,
			'menu_icon' => get_bloginfo('template_url') . '/images/post-icon.png',
			'supports' => array('title','editor','thumbnail','excerpt','comments'),
			'taxonomies' => array('category', 'post_tag')
		);
	}

	register_nav_menu('sidebar menu','Main Menu');
