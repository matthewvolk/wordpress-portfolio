<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-front-page pt-1 pb-4">
  <div class="container">
    <h1 class="display-5">Hi, I'm Matt.</h1>
    <p class="lead">I write computer programs using the following technologies:</p>
    <i class="devicon-html5-plain pr-3 pb-3"></i>
    <i class="devicon-css3-plain pr-3 pb-3"></i>
    <i class="devicon-bootstrap-plain pr-3 pb-3"></i>
    <i class="devicon-angularjs-plain pr-3 pb-3"></i>
    <i class="devicon-react-original pr-3 pb-3"></i>
    <i class="devicon-javascript-plain pr-3 pb-3"></i>
    <i class="devicon-nodejs-plain pr-3 pb-3"></i>
    <i class="devicon-git-plain pr-3 pb-3"></i>
    <i class="devicon-gulp-plain pr-3 pb-3"></i>
    <i class="devicon-babel-plain pr-3 pb-3"></i>
    <i class="devicon-express-original pr-3 pb-3"></i>
    <i class="devicon-java-plain pr-3 pb-3"></i>
    <i class="devicon-amazonwebservices-original pr-3 pb-3"></i>
    <i class="devicon-linux-plain pr-3 pb-3"></i>
    <i class="devicon-ruby-plain-wordmark pr-3 pb-3"></i>
    <i class="devicon-rails-plain-wordmark pr-3 pb-3"></i>

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
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                        <p class="card-text"><?php the_content() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-dark">Read More</a>
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