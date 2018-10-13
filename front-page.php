<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-front-page pt-1 pb-4">
  <div class="container">
    <h1 class="display-5">My name's Matt.</h1>
    <p class="lead">I write software using the following technologies:</p>
    <i class="devicon-javascript-plain px-2 py-2"></i>
    <i class="devicon-java-plain-wordmark px-2 py-2"></i>
    <i class="devicon-php-plain px-2 py-2"></i>
    <i class="devicon-python-plain px-2 py-2"></i>
    <i class="devicon-nodejs-plain px-2 py-2"></i>
    <i class="devicon-express-original px-2 py-2"></i>
    <i class="devicon-react-original px-2 py-2"></i>
    <i class="devicon-linux-plain px-2 py-2"></i>
    <i class="devicon-git-plain px-2 py-2"></i>
    <i class="devicon-gulp-plain px-2 py-2"></i>
    <i class="devicon-ruby-plain-wordmark px-2 py-2"></i>
    <i class="devicon-rails-plain-wordmark px-2 py-2"></i>


  </div>
</div>

<div class="container">
    <div class="row">
    <?php 
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

            <div class="col-sm-6">
                <div class="card mb-4">
                    <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"></a>
                    
                    <div class="card-body pt-2">
                        <a href="<?php the_permalink() ?>" class="small text-muted mb-3" style="text-decoration: none; line-height: 2rem;"> #<?php echo get_the_category()[0]->cat_name ?> </a>
                        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                        <a href="<?php the_permalink() ?>" class="" style="text-decoration: none; color: #2a2b2c">
                            <?php
                                if (has_excerpt()) { echo get_the_excerpt(); } else { echo wp_trim_words(get_the_content(), 18); }
                            ?>    
                        </a>
                        <br />
                        <div class="d-flex justify-content-between">
                            <a href="<?php the_permalink() ?>" class="btn btn-black btn-sm mt-3">Read More</a> 
                            <span class="mt-4 align-text-bottom text-muted text-right text-uppercase small"><?php echo min_read(); /* Edit this function in functions.php */ ?> min read</span> 
                        </div>
                    </div>
                </div>
            </div>
        
    <?php 
        endwhile;
        else :
        echo '<p class="ml-auto mr-auto">Nothing here yet, come back soon!</p>';
    endif; ?>

</div>
</div>




<?php get_footer(); ?>