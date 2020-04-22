<?php

add_action('admin_menu', 'theme_social_media');

function theme_social_media(){ 
	//add_options_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'build_options_page');
	add_options_page('About EOWON','About EOWON', 'administrator', 'options.php','theme_social_media_settings');
	}


function theme_social_media_settings() { 
	
	$intro = get_option('intro');
    $about = get_option('about');
    $services = get_option('services');
	$philosophy = get_option('philosophy');

?>
<div id="theme-options-wrap">
	<div class="icon32" id="icon-tools"> <br /> </div>
	<h2>Social Media</h2>
	<p>Update various settings throughout your website.</p>
    
    <div>
    	<form method="POST" action="">
		Intro
		<?php echo wp_editor( $intro, 'intro', array( 'textarea_name' => 'intro' ) ); ?>
        ABOUT
        <?php echo wp_editor( $about, 'about', array( 'textarea_name' => 'about' ) ); ?>
        services
        <?php echo wp_editor( $services, 'services', array( 'textarea_name' => 'services' ) ); ?>
        philosophy
        <?php echo wp_editor( $philosophy, 'philosophy', array( 'textarea_name' => 'philosophy' ) ); ?>
        Design quotes    

        
        	<input type="submit" value="Save settings" class="button-primary" name="update_1"/>
        </form>
    </div>
    
</div>

<?php }

if (isset($_POST["update_1"])) {
    
	// Do the saving
	update_option("intro", $_POST['intro']);
	update_option("about", $_POST['about']);
	update_option("services", $_POST['services']);
	update_option("philosophy", $_POST['philosophy']);

}
