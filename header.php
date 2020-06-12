<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--formatted-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes"id="viewport_device">

    <title><?php global $page, $paged;
		
		if ( is_home() || is_front_page() ) {
			echo bloginfo( 'name' );
		} else {
			echo bloginfo( 'name' );
            wp_title( '|', true, 'left' );
        };?>

    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>


<body data-barba="wrapper">

<section class="header">
    
    <div class="logo">
        <div class="size">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="img-fluid"></a>
        </div>
    </div>

    <div class="nav_icon">
        
        <!-- <ul>
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url(); ?>/about/">About</a></li>
            <li><a href="<?php echo site_url(); ?>/services/">Services</a></li>
            <li><a href="<?php echo site_url(); ?>/projects">Projects</a></li>
            <li><a href="<?php echo site_url(); ?>/contact/">Contact</a></li>
        </ul> -->

        <!-- <ul>
            <li id="toggle">MENU</li>
        </ul> -->
        
        <div id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>


</section>

<div class="overlay" id="overlay">
  <nav class="overlay-menu">
    <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url(); ?>/about/">About</a></li>
        <li><a href="<?php echo site_url(); ?>/services/">Services</a></li>
        <li><a href="<?php echo site_url(); ?>/projects">Projects</a></li>
        <li><a href="<?php echo site_url(); ?>/contact/">Contact</a></li>
    </ul>
  </nav>
</div>

