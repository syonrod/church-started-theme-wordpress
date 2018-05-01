<div class="frontpostcontent">
	<div class="col s12-m6 cardpapa">
			<div class="card">
				<a href="<?php echo get_permalink() ?>"><div class="card-image">
				<?php the_post_thumbnail('thumbnail'); ?>
				<span class="card-title"><?php the_title(); ?></span>
				</div></a>
				<div class="card-content">
				<?php the_excerpt(); ?>
				</div>
			</div>
			</div>
	</div>
 </div>


