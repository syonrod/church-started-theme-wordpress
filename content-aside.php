<figure class="thumbnail-img"><?php the_post_thumbnail('medium_large'); ?</figure>
<h1><a href="<?php the_permalink();?>">ASIDE: <?php the_title(); ?></a></h1>
<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
<p><?php the_content(); ?></p>

<hr>
