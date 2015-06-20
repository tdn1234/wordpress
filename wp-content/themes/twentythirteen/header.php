<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
	<div style="display: block;" id="top">

		<img src="<?php echo get_template_directory_uri() . '/images/toTop.png' ; ?>">

	</div>
	<div id="container" class="hfeed site">
		<div id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
		</div><!-- #header -->	
		<div id="navbar" class="navbar">
			<nav id="site-navigation" class="navigation main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '', 'menu_id' => '' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- #navbar -->
		<div id="util">
			<div class="share">
				<ul class="social_icons">
					<li><a href="http://3darcshop.com/#" onclick="window.open('http://twitter.com/home?status '+encodeURIComponent('http://3darcshop.com/'), 'twitter-share-dialog', 'width=626,height=436'); return false;"><img src="<?php echo get_template_directory_uri() . '/images/follow_icon1.png' ; ?>" alt="" title="facebook"></a></li>
					<li><a href="http://3darcshop.com/#" onclick="window.open('https://plus.google.com/share?url='+encodeURIComponent('http://3darcshop.com/'), 'google-share-dialog', 'width=626,height=436'); return false;"><img src="<?php echo get_template_directory_uri() . '/images/follow_icon2.png' ; ?>" alt=""></a></li>
					<li><a href="http://3darcshop.com/#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://3darcshop.com/'), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img src="<?php echo get_template_directory_uri() . '/images/follow_icon3.png' ; ?>" alt=""></a></li>
				</ul>
			</div>
			<div id="search">
				<?php get_search_form(); ?>
			</div><!--end search-->
		</div><!--end util-->	
		<div id="main" class="site-main">
