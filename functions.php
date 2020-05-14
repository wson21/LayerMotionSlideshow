<?php

//include 'libs/gmap/googlemap.php';
//include 'libs/gmap/googlemap_admin.php';
include 'libs/projects/projects.php';
//include 'libs/slider/slider.php';
//include 'libs/news/news.php';
include 'libs/options.php';


/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute 
 */

//function ar_responsive_image($image_id,$image_size,$max_width){
//
//	// check the image ID is not blank
//	if($image_id != '') {
//
//		// set the default src image size
//		$image_src = wp_get_attachment_image_url( $image_id, $image_size );
//
//		// set the srcset with various image sizes
//		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
//
//		// generate the markup for the responsive image
//		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
//
//	}
//}

//add_filter('intermediate_image_sizes_advanced', 'ar_remove_default_image_sizes');
//
//function ar_remove_default_image_sizes( $sizes) {
//    unset( $sizes['medium_large']);
//    unset( $sizes['large']);
//    return $sizes;
//}



function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.12.4' , true);
    //wp_deregister_script( 'jquery-migrate' );
    //wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
}

add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );


function custom_scripts() {
	//wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(jquery), '2.8.3', false );
	
	//wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array(jquery), '4.1.1' );
	//wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css' );
	//wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap-theme.min.css' );

	
	//wp_enqueue_script( 'GSAP','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', array(jquery), '3.1.1', false );
	
	//wp_enqueue_script( 'ScrollMagic','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(jquery), '3.1.1', false );
	//wp_enqueue_script( 'Indicators','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js', array(jquery), '3.1.1', false );
	//wp_enqueue_script( 'Scroll_GSAP','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array(jquery), '3.1.1', false );
	
	wp_enqueue_script( 'Gsap_js', get_template_directory_uri() . '/js/gsap.min.js', array( jquery ), '1.0', true);
	//wp_enqueue_script( 'stick', get_template_directory_uri() . '/js/slick.min.js', array( jquery ), '1.0', true);
	//wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array( jquery ), '1.0', true);
	//wp_enqueue_script( 'barba', 'https://unpkg.com/@barba/core', array( jquery ), '1.0', true);
	//wp_enqueue_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js', array( jquery ), '1.0', true);
	//wp_enqueue_script( 'barba', get_template_directory_uri() . '/js/barba.min.js', array( jquery ), '1.0', true);
	//wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.min.js', array( jquery ), '1.0', true);
	
	//wp_enqueue_script( 'TweenMax','https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array(jquery), '2.1.3', false );
	
	//wp_enqueue_script( 'ScrollMagic','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(jquery), '2.0.7', false );
	//wp_enqueue_script( 'animation_gsap','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array(jquery), '2.0.7', false );
	//wp_enqueue_script( 'debug_addIndicators','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array(jquery), '2.0.7', false );

	//wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array( jquery ), '3.1.4', false );
	//wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( jquery ), '3.1.8', false );
	//wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( jquery ), '1.0.0', false );

	//wp_enqueue_script( 'mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array( jquery ), '1.0.0', false );
	//wp_enqueue_style( 'mCustomScrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css' );

	//wp_enqueue_script( 'maximage', get_template_directory_uri() . '/js/jquery.maximage.min.js', array( jquery ), '2.0', false );
	
	//wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js', array( jquery ), '2.9998', false );
	
	//wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array( jquery ), '1.8.1');
	//wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( jquery ), '1.8.1', false);
	//wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slider.js', array( jquery ), '1.8.1', true);
	//wp_enqueue_style ( 'slick-css', get_template_directory_uri() . '/css/slick.css');
	//wp_enqueue_style ( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
	
	//wp_enqueue_script('transit', get_template_directory_uri() . '/js/jquery.transit.min.js', array(jquery), '0.9.2');	
	//wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(jquery), '2.9998', false );
	//wp_enqueue_script('touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array(jquery), '0.9.2', false );

	//wp_enqueue_script( 'jpreLoader', get_template_directory_uri() . '/js/jpreLoader.js', array(), '1.0.0', false );
	//wp_enqueue_style( 'jpreloader', get_template_directory_uri() . '/css/jpreloader.css', array(), '1.0.0', false );

	//wp_enqueue_script( 'ajax-pagination',  get_template_directory_uri() . '/js/ajax-pagination.js', array( 'jquery' ), '1.0', true );

	//wp_enqueue_style( 'fonts-gilr', get_template_directory_uri() . '/fonts/gilr35w/stylesheet.css' );
	//wp_enqueue_style( 'fonts-futura', get_template_directory_uri() . '/fonts/futura/font.css' );

   // wp_localize_script( 'ajax-script', 'my_ajax_object',array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

	wp_enqueue_style( 'style-name', get_stylesheet_uri(),'2.0', true);
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css','1.0', true);
	//wp_enqueue_style( 'aos', get_template_directory_uri().'/css/aos.css','2.0', true);
	//wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', true);
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(jquery), '1.1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


// function no_dashes( $slug) {
// 	$credit = 'by Eowon Design | Architecture';
// 	$slug = str_replace( '-', ' ', $slug);
//     return $slug;
// }

// add_filter( "wp_unique_post_slug", "no_dashes", 10, 4 );

add_theme_support( 'post-thumbnails' );
add_image_size( 'news-thumb', 300, 190,true ); //300 pixels wide (and unlimited height)
add_image_size( 'home-thumb', 620, 290,true ); //300 pixels wide (and unlimited height)
add_image_size( 'index_thumb', 300, 450); //300 pixels wide (and unlimited height)

// -----  Register new taxonomy applies to attachments  ----- //
function remove_menus() {
	//remove_menu_page( 'index.php' );                  //Dashboard
	//remove_menu_page( 'edit.php' ); //Posts
	//remove_menu_page( 'upload.php' );                 //Media
	//remove_menu_page( 'media-new.php' ); //Media
	//remove_menu_page( 'edit.php?post_type=page' );    //Pages
	//remove_menu_page( 'edit-comments.php' ); //Comments
	//remove_menu_page( 'themes.php' );                 //Appearance
	//remove_menu_page( 'plugins.php' );                //Plugins
	//remove_menu_page( 'users.php' );                  //Users
	//remove_menu_page( 'tools.php' );                  //Tools
	//remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'remove_menus' );



// -----  Disable WP Emojicons  ----- //
function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );



// -----  Register new taxonomy applies to attachments  ----- //
function wptp_add_location_taxonomy() {
	$labels = array(
		'name' => 'Photo tag',
		'singular_name' => 'photo-tag',
		'search_items' => 'Search Tag',
		'all_items' => 'All Tag',
		'parent_item' => 'Parent Tag',
		'parent_item_colon' => 'Parent Tag:',
		'edit_item' => 'Edit Tag',
		'update_item' => 'Update Tag',
		'add_new_item' => 'Add New Tag',
		'new_item_name' => 'New Tag Name',
		'separate_items_with_commas' => 'Separate Tag with commas',
		'add_or_remove_items' => 'Add or remove Tag',
		'choose_from_most_used' => 'Choose from the most used Tag',
		'menu_name' => 'Photo Tag',
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'query_var' => 'photo-tag' . true,
		'rewrite' => array( 'slug' => 'photo-tag', 'with_front' => false ),
		'capabilities' => array(),
		'sort' => false,
		'show_admin_column' => 'true',
	);

	register_taxonomy( 'photo-tag', 'attachment', $args );
}

add_action( 'init', 'wptp_add_location_taxonomy' );



// -----  Admin Last Login  ----- //
add_action( 'wp_login', 'wpdb_capture_user_last_login', 10, 2 );

function wpdb_capture_user_last_login( $user_login, $user ) {
	update_user_meta( $user->ID, 'last_login', current_time( 'mysql' ) );
}

add_filter( 'manage_users_columns', 'wpdb_user_last_login_column' );

function wpdb_user_last_login_column( $columns ) {
	$columns[ 'lastlogin' ] = __( 'Last Login', 'lastlogin' );
	return $columns;
}

add_action( 'manage_users_custom_column', 'wpdb_add_user_last_login_column', 10, 3 );

function wpdb_add_user_last_login_column( $value, $column_name, $user_id ) {
	if ( 'lastlogin' != $column_name )
		return $value;

	return get_user_last_login( $user_id, false );
}

function get_user_last_login( $user_id, $echo = true ) {
	$date_format = get_option( 'date_format' ) . ' ' . get_option( 'time_format' );
	$last_login = get_user_meta( $user_id, 'last_login', true );
	$login_time = 'Never logged in';
	if ( !empty( $last_login ) ) {
		if ( is_array( $last_login ) ) {
			$login_time = mysql2date( $date_format, array_pop( $last_login ), false );
		} else {
			$login_time = mysql2date( $date_format, $last_login, false );
		}
	}
	if ( $echo ) {
		echo $login_time;
	} else {
		return $login_time;
	}
}




