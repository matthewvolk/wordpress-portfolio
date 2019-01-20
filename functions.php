<?php

/*------------------*\
  Utilities
\*------------------*/

/**
 * Minutes Read function
 * 
 * Returnnumber of minutes it would take to read the length of the 
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

    $js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/postSort.js' ));
    $css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), null, true);

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '13');
    wp_enqueue_script('postSort', get_template_directory_uri() . '/js/postSort.js', array(), '1');

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
    'menu_icon' => 'dashicons-media-interactive',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    'taxonomies' => array( 'category' ),
    'show_in_rest' => true,
    'rest_base' => 'projects',
  	'rest_controller_class' => 'WP_REST_Posts_Controller'
  ));

}

/*------------------*\
  Rest API
\*------------------*/

function homepage_post_types_rest_api() {
  register_rest_field();
}

/*------------------*\
  Actions
\*------------------*/

// Scripts/Styles
add_action('wp_enqueue_scripts', 'mjvolk_resources');

// Post Types
add_action('init', 'mjvolk_post_types');

// Post Sorting AJAX
// add_action('rest_api_init', 'homepage_post_types_rest_api');

/*------------------*\
  Theme Support
\*------------------*/

add_theme_support( 'post-thumbnails' );

// Favicon for Admin and Login
add_action('login_head', 'add_admin_favicon');
add_action('admin_head', 'add_admin_favicon');
