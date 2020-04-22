<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--formatted-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php /*?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        id="viewport_device">
    <?php */?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes"
        id="viewport_device">

    <script type='application/ld+json'>
    {
        "@context": "http:\/\/schema.org",
        "@type": "Organization",
        "url": "http:\/\/www.eowon.ws\/",
        "sameAs": ["https:\/\/www.facebook.com\/eowondesigns\/", "https:\/\/www.instagram.com\/eowondesigns\/"],
        "@id": "#organization",
        "name": "EOWON Designs & Architects",
        "logo": "http:\/\/www.eowon.ws\/wp-content\/uploads\/2017\/09\/eowon_logo.jpg"
    }
    </script>

    <script type='application/ld+json'>
    {
        "@context": "http:\/\/schema.org",
        "@type": "WebSite",
        "@id": "#website",
        "url": "http:\/\/www.eowon.ws\/",
        "name": "EOWON Designs & Architects",
        "alternateName": "EOWON",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "http:\/\/www.eowon.ws\/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <?php
	global $page;

	$post_url = get_permalink( $page->ID );
	$post_title = get_the_title( $page->ID );
	$post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	$post_sub_title = get_post_meta( $post->ID, 'location', true );
	$post_desc = apply_filters( 'the_content', $page->ID );
	$post_desc = strip_tags( get_post_field( 'post_content', $page->ID ) );
	?>

    <?php if(is_page() || is_archive() || is_home()){ ?>
    <?php }
	else{ ?>

    <meta itemprop="name" content="<?php echo $post_title ?> | <?php echo $post_sub_title ?>">
    <meta itemprop="description" content="<?php echo $post_desc ?>">
    <meta itemprop="image" content="<?php echo $post_thumb[0] ?>">

    <meta property="fb:app_id" content="110279775668688" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $post_url ?>" />
    <meta property="og:title" content="<?php echo $post_title ?> | <?php echo $post_sub_title ?>" />
    <meta property="og:image" content="<?php echo $post_thumb[0] ?>" />
    <meta property="og:description" content="<?php echo $post_desc ?>" />


    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $post_desc ?>" />
    <meta name="twitter:title" content="<?php echo $post_title ?>| <?php echo $post_sub_title ?>" />
    <meta name="twitter:domain" content="Eowon Designs" />
    <meta name="twitter:image" content="<?php echo $post_thumb[0] ?>" />

    <meta name="pinterest-rich-pin" content="true" />


    <meta name="description"
        content="A minimalist architecture and interior design specialist providing service for residential, commercial, industrial and hospitality projects in Penang, Malaysia." />

    <meta name="keywords"
        content="interior design, penang, penang interior design, interior design penang, interior, interiors, architecture, interior architecture, renovation, contractor, furniture" />

    <?php /*?>
    <meta property="og:title" content="<?php echo $post_title ?> <?php echo $post_sub_title ?>" />
    <meta property="og:description" content="<?php echo $post_desc ?>" />
    <meta property="og:type" content="projects" />
    <meta property="og:url" content="<?php echo $post_url ?>" />
    <meta property="og:site_name" content="Eowon Designs" />
    <meta property="og:image" content="<?php echo $post_thumb[0] ?>" />
    <?php */?>

    <?php }
?>

    <title><?php global $page, $paged;
		
		//echo bloginfo( 'name' );

		if ( is_home() || is_front_page() ) {

			echo bloginfo( 'name' );
		} else {
			echo bloginfo( 'name' );
			wp_title( '|', true, 'left' );
		};?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php /*?>
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <?php */?>
    <?php wp_head(); ?>
</head>


<body data-barba="wrapper">
    
    <!-- <div class="loading">
        <div class="loading_wrap">
            <div class="loading_logo">MILLEWN</div>
            <p class="landing_quote">Interiors that Reflect Your Individuality</p>
        </div>
    </div> -->

    <div class="loading-container">
        <div class="loading-screen">
            <div class="loading-content">
                <div class="loading_logo">MILLEWN</div>
                <!-- <p>Interiors that Reflect Your Individuality</p> -->
            </div>
        </div>
    </div>

    <div class="logo">
        <a href="<?php echo site_url(); ?>">MILLEWN</a>
    </div>

    <div class="menu">
        <ul>
            <li class="link">
                <a href="<?php echo site_url(); ?>/about">About</a>
            </li>
            <li class="link">
                <a href="<?php echo site_url(); ?>/contact">Contact</a>
            </li>
            <!-- <li class="icon">
            <a href="https://wa.me/60164844274" target="blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/whatsapp.svg" class="img-fluid icon">
            </a>    
            </li>
            <li class="icon">
            <a href="http://m.me/millewndesigns" target="blank"> 
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/messenger.svg" class="img-fluid icon">
            </a>    
            </li>
            <li class="icon">
            <a href="https://www.facebook.com/millewndesigns" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.svg" class="img-fluid icon">
            </a>    
            </li>
            <li class="icon">
            <a href="https://www.facebook.com/millewndesigns" target="_blank">    
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.svg" class="img-fluid icon">
            </a>
            </li> -->
        </ul>
    </div>