	<figure class="thumbnail-img"><?php the_post_thumbnail('medium_large'); ?></figure>
	<h1>STANDAR: <?php the_title(); ?></h1>
	<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	<p><?php the_content(); ?></p>

	<hr>

