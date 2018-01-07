<div class="container-fluid">

<?php

get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php the_post_thumbnail(); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
          <p class="card-text"><?php the_content() ?></p>
          <a href="<?php the_permalink() ?>" class="btn btn-dark">Read More</a>
        </div>
      </div>
    

<?php 
    endwhile;
    else :
      echo '<p>Oops! No content found</p>';
  endif;

get_footer();

?>