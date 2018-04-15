<?php 

function church_script_enqueue()
{
	wp_enqueue_style( 'churchcustomstyle' , get_template_directory_uri() . '/assets/css/churchstyle.css' , array(), '1.0.0', 'all');

	wp_enqueue_script( 'churchcustomjs' , get_template_directory_uri() . '/assets/js/churchscript.js' , array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'church_script_enqueue');


function church_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'church_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');







 ?>