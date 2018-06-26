

<?php

get_header(); ?>


<div class="jumbotron jumbotron-fluid jumbotron-post-page" style="background-color:black; background-position: center;">
  <div class="container">
    <div class="padded-multiline">
      <h1>
        <?php the_title() ?>
      </h1>
    </div>
  </div>
</div>


<div id="post-container" class="container-post-page">

  <?php  
    if (have_posts()) :
    while (have_posts()) : the_post(); ?>
          <p class="text-muted"><small>Last Updated: <?php the_modified_date('l, F jS, Y') ?></small></p>
          <p><?php the_content() ?></p>

  <?php 
    endwhile;
    else :
      echo '<p>Oops! No content found</p>';
  endif; ?>

<?php 

get_footer();?>