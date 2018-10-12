<?php

function mjvolk_resources() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '2');
}

add_action('wp_enqueue_scripts', 'mjvolk_resources');

add_theme_support( 'post-thumbnails' );



?>