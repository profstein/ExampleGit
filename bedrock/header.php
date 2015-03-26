<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

        <!-- Create a header -->
		<header>

			<h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>

			<!-- Create a navigation -->
        <div align="center">
			<ul id="menu-short" class="navlist">
				<li ><a href="home.html">Home</a></li>
				<li ><a href="http://wpmmp.bmcc.cuny.edu/~cstein/portfolio/?page_id=18 ">About</a></li>
				<li ><a href="#">Work</a></li>
                <li ><a href="#">Contact</a></li>
			</ul>
        </div>
		</header>


<!-- Start the main container -->
<div class="container" role="document">
