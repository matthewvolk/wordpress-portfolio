<?php

function mjvolk_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css',false,'all');
}

add_action('wp_enqueue_scripts', 'mjvolk_resources');