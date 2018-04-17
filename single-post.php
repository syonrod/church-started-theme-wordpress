<?php get_header(); ?>
 
 
<?php 
the_post_thumbnail('thumbnail');
the_post();
the_title();
the_content();
 ?>
 
 
 <?php get_footer(); ?>