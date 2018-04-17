<a href="<?php echo get_permalink() ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
	the_post_thumbnail('thumbnail'); //Left
	?>

	<div class="post__title__right">
		<?php 
			the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>'); //Right
		?>
		<small><p>Posted on: <?php 
					the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in<?php the_category(); 
			?></p> 
			
		</small> <!-- Right -->
	</div>
	

	<!-- <?php //the_content(); ?> -->
<hr>
</article></a>



