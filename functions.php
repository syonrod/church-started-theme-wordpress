<?php 

function church_script_enqueue()
{
	wp_enqueue_style( 'churchcustomstyle' , get_template_directory_uri() . '/assets/css/churchstyle.css' , array(), '1.0.0', 'all');

	wp_enqueue_script( 'churchcustomjs' , get_template_directory_uri() . '/assets/js/churchscript.js' , array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'church_script_enqueue');


 ?>