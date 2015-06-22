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
		<div class="slideshow">



			<div id="slideshow0" class="nivoSlider" style="width: 965px; height: 355px; position: relative; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20IN12.jpg&quot;) no-repeat scroll 0% 0%;">

				<a style="display: none;" class="nivo-imageLink" href="http://3darcshop.com/3dmodel/3darcinterior-vol-13.html" title="3DARCINTERIOR VOL 13"><img style="display: none;" src="http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20IN13.jpg" alt="3DARCINTERIOR VOL 13"></a><a style="display: block;" class="nivo-imageLink" href="http://3darcshop.com/3dmodel/3darcinterior-vol-12.html" title="3DARCINTERIOR VOL 12"><img style="display: none;" src="http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20IN12.jpg" alt="3DARCINTERIOR VOL 12"></a><a style="display: none;" class="nivo-imageLink" href="http://3darcshop.com/3dmodel/3darcexterior-vol-10.html" title="3DARCEXTERIOR VOL 10-1"><img style="display: none;" src="http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg" alt="3DARCEXTERIOR VOL 10-1"></a><a style="display: none;" class="nivo-imageLink" href="http://3darcshop.com/3dmodel/3darcexterior-vol-10.html" title="3DARCEXTERIOR VOL 10-2"><img style="display: none;" src="http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-2.jpg" alt="3DARCEXTERIOR VOL 10-2"></a><a style="display: none;" class="nivo-imageLink" href="http://3darcshop.com/3dmodels/3darc-models" title="3DARCMODELS"><img style="display: none;" src="http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINKMODELS.jpg" alt="3DARCMODELS"></a>
				<div style="opacity: 0;" class="nivo-caption"><p></p></div><div style="display: block;" class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div><div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control" rel="1">2</a><a class="nivo-control active" rel="2">3</a><a class="nivo-control" rel="3">4</a><a class="nivo-control" rel="4">5</a></div><div style="opacity: 0; left: 0px; top: 0px; width: 0px; height: 0px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll 0px 0px;" class="nivo-box"></div><div style="opacity: 0.351975; left: 121px; top: 0px; width: 42.589px; height: 31.3258px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -121px 0px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.73601; left: 242px; top: 0px; width: 89.0572px; height: 65.5049px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -242px 0px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.928818; left: 363px; top: 0px; width: 112.387px; height: 82.6648px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -363px 0px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.995564; left: 484px; top: 0px; width: 120.463px; height: 88.6052px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -484px 0px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 1; left: 605px; top: 0px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -605px 0px;" class="nivo-box"></div><div style="opacity: 1; left: 726px; top: 0px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -726px 0px;" class="nivo-box"></div><div style="opacity: 1; left: 847px; top: 0px; width: 118px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -847px 0px;" class="nivo-box"></div><div style="opacity: 0.351975; left: 0px; top: 89px; width: 42.589px; height: 31.3258px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll 0px -89px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.73601; left: 121px; top: 89px; width: 89.0572px; height: 65.5049px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -121px -89px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.928818; left: 242px; top: 89px; width: 112.387px; height: 82.6648px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -242px -89px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.995564; left: 363px; top: 89px; width: 120.463px; height: 88.6052px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -363px -89px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 1; left: 484px; top: 89px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -484px -89px;" class="nivo-box"></div><div style="opacity: 1; left: 605px; top: 89px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -605px -89px;" class="nivo-box"></div><div style="opacity: 1; left: 726px; top: 89px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -726px -89px;" class="nivo-box"></div><div style="opacity: 1; left: 847px; top: 89px; width: 118px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -847px -89px;" class="nivo-box"></div><div style="opacity: 0.73601; left: 0px; top: 178px; width: 89.0572px; height: 65.5049px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll 0px -178px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.928818; left: 121px; top: 178px; width: 112.387px; height: 82.6648px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -121px -178px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.995564; left: 242px; top: 178px; width: 120.463px; height: 88.6052px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -242px -178px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 1; left: 363px; top: 178px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -363px -178px;" class="nivo-box"></div><div style="opacity: 1; left: 484px; top: 178px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -484px -178px;" class="nivo-box"></div><div style="opacity: 1; left: 605px; top: 178px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -605px -178px;" class="nivo-box"></div><div style="opacity: 1; left: 726px; top: 178px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -726px -178px;" class="nivo-box"></div><div style="opacity: 1; left: 847px; top: 178px; width: 118px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -847px -178px;" class="nivo-box"></div><div style="opacity: 0.928818; left: 0px; top: 267px; width: 112.387px; height: 82.6648px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll 0px -267px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 0.995564; left: 121px; top: 267px; width: 120.463px; height: 88.6052px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -121px -267px; overflow: hidden;" class="nivo-box"></div><div style="opacity: 1; left: 242px; top: 267px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -242px -267px;" class="nivo-box"></div><div style="opacity: 1; left: 363px; top: 267px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -363px -267px;" class="nivo-box"></div><div style="opacity: 1; left: 484px; top: 267px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -484px -267px;" class="nivo-box"></div><div style="opacity: 1; left: 605px; top: 267px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -605px -267px;" class="nivo-box"></div><div style="opacity: 1; left: 726px; top: 267px; width: 121px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -726px -267px;" class="nivo-box"></div><div style="opacity: 1; left: 847px; top: 267px; width: 118px; height: 89px; background: transparent url(&quot;http://3darcshop.com/timthumb.php?w=965&amp;h=355&amp;zc=1&amp;src=/admin/webroot/upload/image/files/SLIDESHOW/LINK%20EX10-1.jpg&quot;) no-repeat scroll -847px -267px;" class="nivo-box"></div></div><!--end #slideshow0-->



				</div><!--end slideshow-->
				<script type="text/javascript"><!--

    $(document).ready(function() {

        $('#slideshow0').nivoSlider();

    });

--></script>
			<div id="main" class="site-main">
