<?php

get_header(); ?>


<div class="jumbotron jumbotron-fluid jumbotron-post-page mb-0 pt-4 pb-4 bg-light text-center">
  <div class="container">
    <div class="padded-multiline pt-3 pb-0">
      <p class="mb-1"><span class="text-muted mb-0"><?php echo min_read(); ?> minute read</span></p>
      <h1>
        <?php the_title() ?>
      </h1>
      <a href="<?php echo home_url(); ?>">
        <img class="rounded-circle mb-2" style="max-height: 40px" src="https://0.gravatar.com/avatar/01c25b1dbbdfee4c7bb58f4f87ba15e7?s=128&d=mm&r=g" />
        <!-- <?php /* echo */ esc_url( get_avatar_url( wp_get_current_user()->ID ) ); ?> -->
      </a>
      <p class="mb-3"><span class="text-primary"><?php echo get_the_date('M j, Y'); ?></span> / <span class="text-primary"><?php echo ucfirst(get_the_category()[0]->cat_name) ?></span></p>
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-via="mjvlk" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</div>


<div id="post-container" class="container-post-page mt-4">

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