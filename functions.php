<?php 

/*=============================================
=            Include scripts 	            =
=============================================*/

function church_script_enqueue()
{
	//CSS
	wp_enqueue_style( 'bootstrapstyle' , get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), '3.3.4', 'all');
	wp_enqueue_style( 'churchcustomstyle' , get_template_directory_uri() . '/assets/css/churchstyle.css' , array(), '1.0.0', 'all');

	//JS
	wp_enqueue_script( 'customjquery' , get_template_directory_uri() . '/assets/js/jquery.js' , array(), '3.3.1', true);
	wp_enqueue_script( 'bootstrapjs' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array(), '3.3.4', true);
	wp_enqueue_script( 'churchcustomjs' , get_template_directory_uri() . '/assets/js/churchscript.js' , array(), '1.0.0', true);

	


}

add_action('wp_enqueue_scripts', 'church_script_enqueue');



/*=============================================
=            Active menus 	            =
=============================================*/
function church_theme_setup()
{
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'church_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside','image','video'));


/*=============================================
=            Sidebar function 	            =
=============================================*/

function church_widget_setup()
{
	register_sidebar( 
		array(
			'name'			=> 	'Sidebar',
			'id'			=> 	'sidebar-1',
			'class'			=> 	'sidebar-custom',
			'description'	=>	'Standard Sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h1 class="widgettitle">',
			'after_title'   => '</h1>'
		) );
}

add_action('widgets_init', 'church_widget_setup');


 ?>