<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>

  <!-- Meta -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Title -->
  <title>
    <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top justify-content-between">

    <!-- This div is invisible unless viewport is <= tablet, and acts as a spacer to center nav-brand.
        Change the mr- class to push the nav-brand left and right. Uncomment to center nav-brand -->
    <!-- <div class="d-md-none mr-6"></div> -->

    <!-- The nav-brand that is only visible if viewport is <= tablet. -->
    <a class="navbar-brand d-md-none" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="rounded pt-0 ml-1" alt="Site Logo" width="35" height="35">
    </a>

    <!-- The hamburger menu -->
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        <span class="sr-only">Toggle navigation</span>
    </button>

    <!-- Main navigation visible when viewport is > tablet -->
    <div class="d-md-flex d-block w-100">
        <div class="collapse navbar-collapse mx-auto w-auto justify-content-center" id="navbarResponsive">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?php echo home_url(); ?>">Home</a>
                <a class="nav-item nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/VolkMatthew_ResumeJan2019.pdf">Resumé</a>
                <a class="nav-item nav-link" href="mailto:volkmattj@gmail.com">Contact</a>
                <a class="navbar-brand mx-3 pt-0 d-none d-md-inline" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="rounded pt-0" alt="Site Logo" width="40" height="40">
                </a>
                <a class="nav-item nav-link" target="_blank" href="https://github.com/matthewvolk">GitHub</a>
                <a class="nav-item nav-link" target="_blank" href="https://linkedin.com/in/mjvolk">LinkedIn</a>
                <a class="nav-item nav-link" target="_blank" href="https://twitter.com/mjvlk">Twitter</a>
            </div>
        </div>
    </div>

    <!-- End Navigation -->
</nav>




<!-- OLD NAVIGATION -->
<!-- <nav class="navbar navbar-inverse navbar-dark navbar-expand sticky-top bg-dark box-shadow py-0 my-0 mx-0">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse justify-content-between" id="collapsingNavbar">
        <div>placeholder to evenly space flexbox items and center links</div>

        <ul class="navbar-nav ml-4">
            <li class="nav-item">
                <a class="nav-link mid-nav-link" href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/VolkMatthew_ResumeSept2018.pdf">Resumé</a>
            </li>
        </ul>

        <ul class="nav navbar-nav flex-row d-lg-none" id="social-nav">
            <li class="nav-item pr-1"><a class="nav-link" target="_blank" href="https://github.com/matthewvolk"><i class="fab fa-github"></i></a></li>
            <li class="nav-item pl-1"><a class="nav-link" target="_blank" href="https://linkedin.com/in/mjvolk"><i class="fab fa-linkedin"></i></a></li>
        </ul>

    </div>
</nav> -->