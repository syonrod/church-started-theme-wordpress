<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Church Theme</title>
	<?php wp_head(); ?>
</head>

<?php 
	if( is_front_page() ){ 
		$church_classes = array('church-class', 'my-class');
	}else{
		$church_classes = array('no-church-class');
		}
 ?>
<body <?php body_class($church_classes);?> >

<?php wp_nav_menu(array('theme_location'=>'primary')); ?>