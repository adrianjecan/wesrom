<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="">

  <header id="masterhead" class="site-header" role="banner">
      <div class="logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }else { ?>
          <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/layout/"></a>
        <?php } ?>
      </div>
      <div id="main-menu" class="main-menu">
           <?php wp_nav_menu(array('theme_location' => 'wesrom-custom-menu')); ?>
      </div>
  </header>

	<div class="site-content-contain">
		<div id="main" class="site-content">
