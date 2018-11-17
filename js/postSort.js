$(function () {

  // https://stackoverflow.com/questions/5057191/toggleclass-and-remove-class-from-all-other-elements
  $('.post-sort-container').on('click', '.post-type-link', function(event) {
    event.preventDefault();
    $(this).addClass('active-post-type').siblings().removeClass('active-post-type');

    console.log($(this)[0].dataset.postType)
  });

 });


 const cardTemplate = `
  <div class="col-sm-6">
      <div class="card mb-4">
          <a href="<?php the_permalink() ?>">
              <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
          </a>
          
          <div class="card-body pt-2">

              <div class="d-flex justify-content-between my-2">
                  <a href="<?php the_permalink() ?>" class="badge badge-light"> #<?php echo get_the_category()[0]->cat_name ?></a>
                  <span class="small text-muted" style="text-decoration: none;">
                      <i class="fas fa-tags"></i> <?php echo ucfirst(get_post_type( get_the_ID())) ?>s <!-- Keep 's' to pluralize post type -->
                  </span>
              </div>

              <h5 class="card-title">
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h5>

              <a href="<?php the_permalink() ?>" class="" style="text-decoration: none; color: #2a2b2c">
                  <?php
                      if (has_excerpt()) { echo get_the_excerpt(); } else { echo wp_trim_words(get_the_content(), 18); }
                  ?>    
              </a>

              <br />

              <div class="d-flex justify-content-between">
                  <a href="<?php the_permalink() ?>" class="btn btn-black btn-sm mt-3">Read More</a> 
                  <a href="<?php the_permalink() ?>" class="mt-4 align-text-bottom text-muted text-right text-uppercase small" style="text-decoration: none;"><?php echo min_read(); /* Edit this function in functions.php */ ?> min read</a> 
              </div>
          </div>
      </div>
  </div>`