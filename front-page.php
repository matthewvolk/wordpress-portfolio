<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-front-page pt-1 pb-4 bg-dark mb-4">
  <div class="container">
    <h1 class="display-5">My name's Matt.</h1>
    <p class="lead">San Diego based project manager + web developer using the following technologies:</p>

    <i class="devicon-javascript-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="Javascript ES5/6/7"></i>
    <i class="devicon-nodejs-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="Node.js"></i>
    <i class="devicon-php-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="PHP"></i>
    <i class="devicon-python-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="Python"></i>
    <i class="devicon-express-original px-2 py-2" data-toggle="tooltip" data-placement="top" title="Express.js"></i>
    <i class="devicon-linux-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="Linux"></i>
    <i class="devicon-git-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="Git"></i>
    <i class="devicon-gulp-plain px-2 py-2" data-toggle="tooltip" data-placement="top" title="Gulp.js"></i>
    <i class="devicon-react-original px-2 py-2" data-toggle="tooltip" data-placement="top" title="React.js"></i>
    <i class="devicon-java-plain-wordmark px-2 py-2" data-toggle="tooltip" data-placement="top" title="Java"></i>
  </div>
</div>

<div class="container post-loop">

    <div class="post-sort-container text-center mb-4">
        <a href="#" data-post-type="post" class="h5 mx-3 post-type-link" style="font-weight:700;">Posts</a>
        <a href="#" data-post-type="project" class="h5 mx-3 post-type-link" style="font-weight:700;">Projects</a>
        <a href="#" data-post-type="post project" class="h5 mx-3 post-type-link active-post-type" style="font-weight:700;">All</a>
    </div>

    <!-- <pre>
        <?php 
            print_r(get_post_type_object('project'))
        ?>
    </pre> -->

    <div class="row">
    <?php 

        $homepagePosts = new WP_Query(array(
            'post_type' => array('post', 'project')
        ));

        if ($homepagePosts->have_posts()) :
            while ($homepagePosts->have_posts()) : $homepagePosts->the_post(); ?>

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
            </div>
    <?php 
        endwhile;
        else :
        echo '<p class="ml-auto mr-auto">Nothing here yet, come back soon!</p>';
    endif; 
    
    wp_reset_query();

    ?>

</div>
</div>




<?php get_footer(); ?>