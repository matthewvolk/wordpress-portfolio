<?php

/*------------------*\
  Utilities
\*------------------*/
/**
 * Minutes Read function
 * 
 * Use this function while in a post loop to return an integer representing
 * the number of minutes it would take to read the length of the 
 * word count assuming a read speed of at least 200 words per minute.
 * 
 * @param none
 * @return Integer
 */
function min_read() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $min_read = ceil($word_count/200);
    return $min_read;
}

/**
 * Add a Favicon to Admin Pages
 *
 * Utility function used to load your site favicon in Wordpress admin and
 * login pages.
 * 
 * @return void
 */
function add_admin_favicon() {
  $favicon_url = get_stylesheet_directory_uri() . '/favicon.png';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

/*------------------*\
  Static Files
\*------------------*/

function mjvolk_resources() {

    /**
     * @param String $handle (Required) Name of stylesheet you want to load
     * @param String $src (Optional) Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory. Default Value: ""
     * @param Array $deps (Optional) An array of registered stylesheet handles this stylesheet depends on. Default Value: array()
     * @param String $version (Optional) String specifying stylesheet version number, if it has one, which is added to the URL as a query string for cache busting purposes. Default Value: false
     */
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '13');
}

/*------------------*\
  Post Types
\*------------------*/

/**
 * Post Type Creator function
 * 
 * Function fired at application initialization to load in custom post types 
 *
 * @return void
 */
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
