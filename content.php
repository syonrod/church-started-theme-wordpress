<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="col-xs-12">
			<?php 
			the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink())),'</a></h1>'); 
		?>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
		</div>
	</header>

	<div class="row">
		<div class="col-xs-12">
			<figure class="img-responsive">
				
					<?php the_post_thumbnail('medium_large'); ?>		
			</figure>
		</div>

		<div class="col-xs-12 col-sm-8">
			<?php the_content(); ?>
		</div>
	</div>
	
<hr>
</article>



