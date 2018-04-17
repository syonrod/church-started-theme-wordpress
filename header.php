<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title><?php bloginfo('name'); ?></title>
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


<div class="navbar-fixed">
  <nav class="teal">
    <div class="container">
      <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
    <?php wp_nav_menu(array(
        'theme_location'=>'primary', 
        'container'   => false,
        'menu_class'  => 'right hide-on-med-and-down'
        
        
        )); 
    ?>

      </div>
    </div>
  </nav>
</div>

 <?php wp_nav_menu(array(
        'theme_location'=>'primary', 
        'container'   => false,
        'menu_class'  => 'sidenav',
        'menu_id'     => 'mobile-nav'
        
        
        )); 
    ?>

<div class="col-xs-12 body__content">
