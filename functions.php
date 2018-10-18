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

// Favicon for Login and Admin
function add_admin_favicon() {
  $favicon_url = get_stylesheet_directory_uri() . '/favicon.png';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

/*------------------*\
  Static Files
\*------------------*/

function mjvolk_resources() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '10');
}

/*------------------*\
  Post Types
\*------------------*/

function mjvolk_post_types() {
  register_post_type('project', array(
    'public' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project',
      'view_item' => 'View Project',
    ),
    'menu_icon' => 'dashicons-media-interactive'
  ));
}

/*------------------*\
  Actions
\*------------------*/

// Scripts/Styles
add_action('wp_enqueue_scripts', 'mjvolk_resources');

// Post Types
add_action('init', 'mjvolk_post_types');

/*------------------*\
  Theme Support
\*------------------*/

add_theme_support( 'post-thumbnails' );

// Favicon for Admin and Login
add_action('login_head', 'add_admin_favicon');
add_action('admin_head', 'add_admin_favicon');
