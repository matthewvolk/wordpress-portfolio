

<?php

get_header(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-post-page py-5" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
  <div class="container py-5">
    <div class="padded-multiline">
      <h1>
        <strong>
          <?php the_title() ?></span>
        </strong>
      </h1>
    </div>
  </div>
</div>

<div id="post-container" class="container-post-page">

  <?php  
    if (have_posts()) :
    while (have_posts()) : the_post(); ?>
          <p class="text-muted"><small><?php the_time('l, F jS, Y') ?></small></p>
          <p><?php the_content() ?></p>

  <?php 
    endwhile;
    else :
      echo '<p>Oops! No content found</p>';
  endif; ?>

<?php 

get_footer();?>