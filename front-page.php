<?php get_header(); ?>



<div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Maranatha Canada</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">LLenando la tierra con la gloria de Dios.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h2>Dios tiene un proposito para tu vida!</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h2>Right Aligned Caption</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>This is our big Tagline!</h2>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

  <div class="frontpost">
 
  <?php
  $args = array('cat' => '1', 'posts_per_page' => '3', 'order' => 'DESC','post_status' => 'publish' );
  $casadeluzPosts = new WP_Query($args);
    if ($casadeluzPosts->have_posts()):
      while ($casadeluzPosts->have_posts()):
        $casadeluzPosts->the_post(); ?>


        <div class="col s12-m6">
          <div class="card">
            <div class="card-image">
              <?php the_post_thumbnail('thumbnail'); ?>
              <span class="card-title"><?php the_title(); ?></span>
            </div>
            <div class="card-content">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
 
          


    <?php endwhile;
    else:

  endif;
  ?>


  </div> 

<?php get_footer(); ?>


<!--  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <?php the_post_thumbnail('thumbnail'); ?>
          <span class="card-title"><?php the_title(); ?></span>
          <a href="<?php echo get_permalink() ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>  -->