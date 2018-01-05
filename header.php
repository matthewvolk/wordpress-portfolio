<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <script src="https://use.fontawesome.com/141f709aa0.js"></script>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<ul class="main-nav" role="navigation">
    <li><a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-file-text-o"></i>Resume</a></li>
    <li><a href="#"><i class="fa fa-rss"></i>Articles</a></li>
    <li><a href="#"><i class="fa fa-youtube-play"></i>Videos</a></li>
</ul>



<div class="main-container">