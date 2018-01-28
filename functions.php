<?php
add_action('get_header', 'my_filter_head');  
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function my_scripts(){
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_script( 'one', get_template_directory_uri() . '/libs/jquery-3.2.1.min.js');
	wp_enqueue_script( 'two', get_template_directory_uri() . '/libs/plugins_scroll.js');
	wp_enqueue_script( 'free', get_template_directory_uri() . '/libs/waypoints.js');
	wp_enqueue_script( 'four', get_template_directory_uri() . '/libs/jquery.hyphen.ru.js');
	wp_enqueue_script( 'five', get_template_directory_uri() . '/libs/owlcarousel/owlcarousel.js');
	wp_enqueue_script( 'six', get_template_directory_uri() . '/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'my_scripts');