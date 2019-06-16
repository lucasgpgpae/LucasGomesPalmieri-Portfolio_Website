<!--
Lucas Gomes Palmieri Website
Desenvolvedor: Lucas Gomes Palmieri
-->

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <!-- WORDPRESS -->
    <meta charset="utf-8">
    <title> <?php bloginfo('name'); ?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <?php wp_head(); ?>

    <!-- CSS Documents -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- End CSS Documents -->
    <!-- JavaScript Documents -->
    <script src="js/jquery.js"></script>
    <script src="js/textanimation.js"></script>
    <!-- End JavaScript Documents -->
    <!-- http://www.lucasgomespalmieri.tk/wp-content/themes/LucasGomesPalmieriPortfolio-THEME/css/style.css -->

  </head>

  <body>
    <!-- ----------------------------------------------------------- -->
    <!-- -----------------------START NAVBAR------------------------ -->
    <nav class="navbar navbar-settings navbar-expand-xl fixed-top pt-0">
      <a class="navbar-brand navbar-title-settings font-lobster-regular" href="#" style="color: #9a9a9a;">Lucas Gomes Palmieri</a>

      <nav class="navbar-dark" style="">
        <button class="navbar-toggler navbar-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      <div class="collapse navbar-collapse navbar-menu-space" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item navbar-separation-right">
            <a class="nav-link navbar-menu-itens font-sharetech-mono" href="/">HOME</a>
          </li>
          <li class="nav-item navbar-separation-right">
            <a class="nav-link navbar-menu-itens font-sharetech-mono" href="/aboutme">ABOUT ME</a>
          </li>
          <li class="nav-item navbar-separation-right">
            <a class="nav-link navbar-menu-itens font-sharetech-mono" href="/myprojects">MY PROJECTS</a>
          </li>
          <li class="nav-item navbar-separation-right" style="border:0;">
            <a class="nav-link navbar-menu-itens font-sharetech-mono" href="/contact">CONTACT</a>
          </li>
        </ul>

        <div class="navbar-icons-space">
          <a class="navbar-brand navbar-icons" href="https://www.linkedin.com/in/lucas-gomes-palmieri-727226188/" target="_blank">
            <img src="imgs/icons/linkedin-icon.png" width="35" height="33" alt="">
          </a>
          <a class="navbar-brand navbar-icons" href="https://steamcommunity.com/id/lucasgp/" target="_blank">
            <img src="imgs/icons/steam-icon.png" width="35" height="33" alt="">
          </a>
          <a class="navbar-brand navbar-icons" href="https://lucasgp.itch.io/" target="_blank">
            <img src="imgs/icons/itchio-icon.png" width="35" height="33" alt="">
          </a>
          <a class="navbar-brand navbar-icons" href="https://github.com/lucasgpgpae" target="_blank">
            <img src="imgs/icons/github-icon.png" width="35" height="33" alt="">
          </a>
        </div>
      </div>
    </nav>
    <!-- ------------------------END NAVBAR------------------------- -->
    <!-- ----------------------------------------------------------- -->
