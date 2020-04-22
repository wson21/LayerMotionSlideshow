<?php

add_action('admin_menu', 'theme_social_media');

function theme_social_media(){ 
	//add_options_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'build_options_page');
	add_options_page('Settings Admin','Social Media', 'administrator', 'options.php','theme_social_media_settings');
	}


function theme_social_media_settings() { ?>
<div id="theme-options-wrap">
	<div class="icon32" id="icon-tools"> <br /> </div>
	<h2>Social Media</h2>
	<p>Update various settings throughout your website.</p>
    
    <div>
    	<form method="POST" action="">
		<table width="780" class="form-table">
        
        	<tr valign="top">
            	<th scope="row">Facebook</th>
                <td><input type="text" name="facebook"  value="<?php echo get_option('facebook_url'); ?>" size="25" /></td>
            </tr>
            
        	<tr valign="top">
            	<th scope="row">Youtube</th>
                <td><input type="text" name="youtube"  value="<?php echo get_option('youtube_url'); ?>" size="25" /></td>
            </tr>
            
        	<tr valign="top">
            	<th scope="row">Instagram</th>
                <td><input type="text" name="instagram"  value="<?php echo get_option('instagram_url'); ?>" size="25" /></td>
            </tr>
            
        	<tr valign="top">
            	<th scope="row">Twitter</th>
                <td><input type="text" name="twitter"  value="<?php echo get_option('twitter_url'); ?>" size="25" /></td>
            </tr>
            
        	<tr valign="top">
            	<th scope="row">Google Plus</th>
                <td><input type="text" name="google_plus"  value="<?php echo get_option('google_plus_url'); ?>" size="25" /></td>
            </tr>
            
        	<tr valign="top">
            	<th scope="row">Pinterest</th>
                <td><input type="text" name="pinterest"  value="<?php echo get_option('pinterest_url'); ?>" size="25" /></td>
            </tr>
            
    	</table>
        
        	<input type="submit" value="Save settings" class="button-primary" name="update_1"/>
        </form>
    </div>
    
</div>

<?php }

if (isset($_POST["update_1"])) {
    
	// Do the saving
	
	update_option("facebook_url", $_POST['facebook']);
	update_option("youtube_url", $_POST['youtube']);
	update_option("instagram_url", $_POST['instagram']);
	update_option("twitter_url", $_POST['twitter']);
	update_option("google_plus_url", $_POST['google_plus']);
	update_option("pinterest_url", $_POST['pinterest']);
}
