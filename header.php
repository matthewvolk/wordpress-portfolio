<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>

  <!-- Meta -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Title -->
  <title>
    <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> |
    <?php bloginfo('name'); ?>
  </title>

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <!-- Dev Icons -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <!-- Relative stylesheets -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch.png" />

  <!-- Open Graph Protocol for link previews in texts and social media posts -->
  <?php if ( is_front_page() ):
            echo '<meta property="og:title" content="Matthew Volk | Learning Software" />
                  <meta property="og:image" content="https://mjvolk.com/wp-content/themes/mjvolk/img/open-graph.png" />
                  <meta property="og:description" content="Matthew Volk | Learning Software"/>
                  <meta property="og:url" content="//www.mjvolk.com/" />';
        endif; 
  ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105119151-2"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105119151-2');
  </script>

  <!-- END HEAD -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<nav class="navbar navbar-dark navbar-expand sticky-top bg-black py-0 my-0 mx-0">
    <div class="navbar-collapse collapse justify-content-between" id="collapsingNavbar2">
        <div><!--placeholder to evenly space flexbox items and center links--></div>
        <ul class="navbar-nav ml-7">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/VolkMatthew_ResumeSept2018.pdf">Resumé</a>
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="nav-link" href="https://github.com/matthewvolk"><i class="fab fa-github"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="https://linkedin.com/in/mjvolk"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
</nav>



