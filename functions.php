<?php

/*------------------*\
  Utilities
\*------------------*/

function min_read() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $min_read = ceil($word_count/200);
    return $min_read;
}

/*------------------*\
  Static Files
\*------------------*/

function mjvolk_resources() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '2');
}

/*------------------*\
  Actions
\*------------------*/

add_action('wp_enqueue_scripts', 'mjvolk_resources');

/*------------------*\
  Theme Support
\*------------------*/

add_theme_support( 'post-thumbnails' );



?>