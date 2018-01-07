<div class="container">

<?php

get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    
    
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <p><?php the_content() ?></p>
    
    

<?php 
    endwhile;
    else :
      echo '<p>Oops! No content found</p>';
  endif;

get_footer();

?>