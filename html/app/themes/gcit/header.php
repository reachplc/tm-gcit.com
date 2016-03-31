<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage GCIT
 * @since GCIT 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>" type="image/x-icon">
  <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon.png' ); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/152x152-precomposed.png' ); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/114x114-precomposed.png' ); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/72x72-precomposed.png' ); ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/60x60-precomposed.png' ); ?>">
  <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icons/speeddial-160x160.png' ); ?>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() . '/js/html5.js' ); ?>"></script>
  <![endif]-->
  <?php wp_head(); ?>
     <script src="<?php echo esc_url( get_template_directory_uri() . '/js/modernizr.js' ); ?>"></script>


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>


</head>

<body <?php body_class(); ?>>

  <div id="home-back">

    <div class="menu-box"></div>
    <header class="head-main nav-line animated">
        <div class="wrapper">
        <div class="row" style="position:relative">
          <div class="search-icon"></div>
          <div class="search-bar">
    <form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
      <div>
        <input id="s" class="text" type="text" name="s" placeholder="Search">
        <div class="submit-icon">
          <input class="submit" type="submit" name="submit" value="">
        </div>
      </div>
    </form>
  </div>
      <div class="large-4 columns logo">
      <a href="<?php get_template(); ?>">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>" />
      </a>
      </div>
       <div class="large-8 columns small-menu">
       <div class="navbar">
        <!-- #navigation -->
        <div class="nav">

<div class="navicon ms_hidden ls_hidden" id="js-navicon" >
<span></span>
<span></span>
<span></span>
</div>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>

  </div><!-- #site-navigation -->
      </div>
      </div>
    </div>
    </div><!-- #navbar -->

    </header><!-- #masthead -->
