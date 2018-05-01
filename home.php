<?php get_header(); ?>

<?php
$args = array('order' => 'DESC','post_status' => 'publish' );
  $myposts = new WP_Query($args);
	if($myposts->have_posts()):
		while($myposts->have_posts()): $myposts->the_post();
?>
 	<?php get_template_part('content', get_post_format()); ?>
 	

<?php  		
		endwhile;
	endif;
?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
