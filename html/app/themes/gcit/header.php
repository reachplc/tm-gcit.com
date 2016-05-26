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

?>
<!DOCTYPE html>
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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="home-back">

    <div class="menu-box"></div>
    <header class="head-main nav-line animated">
       <div class="search-bar">
          <div class="wrapper">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="text" class="input" name="s" value="TYPE HERE TO SEARCH THIS SITE..." onclick="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" autocomplete="off">
                    <input  type="submit" name="submit" value="" />
                </form>
        </div>
    </div>
        <div class="wrapper">
        <div class="row" style="position:relative">


      <div class="large-4  logo">
      <a href="<?php echo esc_url( home_url( '/contentwatch/' ) ); ?>">
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
<div class="search-icon"></div>
  </div><!-- #site-navigation -->
      </div>
      </div>
    </div>
    </div><!-- #navbar -->

    </header><!-- #masthead -->
