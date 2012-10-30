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
	
	register_post_type('news' , $args);
}
class Menu_With_Description extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ! empty($item->description) ? '<br /><span class="sub">' . $item->description . '</span>' : '';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}