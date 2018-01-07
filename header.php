<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <script src="https://use.fontawesome.com/141f709aa0.js"></script>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-dark navbar-expand bg-dark py-0 my-0 justify-content-between">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between" id="collapsingNavbar2">
        <div><!--placeholder to evenly space flexbox items and center links--></div>
        <ul class="navbar-nav ml-5">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Resumé</a>
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="nav-link" href="https://github.com/matthewvolk"><i class="fa fa-github"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="https://twitter.com/thisisntaresume"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
</nav>



