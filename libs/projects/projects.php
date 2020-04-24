<?php

add_action( 'init', 'create_projects' );
function create_projects() {
	register_post_type( 'Projects',
		array(
			'labels' => array(
			'name' => 'Projects',
			'singular_name' => 'projects',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Projects',
			'edit' => 'Edit',
			'edit_item' => 'Edit Projects',
			'new_item' => 'New Projects',
			'view' => 'View',
			'view_item' => 'View Projects',
			'search_items' => 'Search Projects',
			'not_found' => 'No Projects found',
			'not_found_in_trash' =>'No Projects found in Trash',
			'parent' => 'Parent Projects'),
			//'supports' => 'revisions',
			'public' => true,
			'menu_position' =>28,
			//New interface
			'show_in_rest' => true,
			'supports' =>
			array( 'title','editor','thumbnail','revisions','excerpt'), 
			//array( 'title', 'editor','thumbnail','revisions','page-attributes'), 
			
			//'taxonomies' => array( '' ),
			
			//'menu_icon' =>'',
			//'menu_icon' =>plugins_url( 'images/image.png', __FILE__ ),
			'has_archive' => true,
			'rewrite' => true,
			//'rewrite' => array('slug'=>'project','with_front'=>false),
			)
		);
}

add_action( 'init', 'projects_category' );
function projects_category() {
    $labels = array(
        'name'              => 'Project Category',
        'singular_name'     => 'pcategory',
        'search_items'      => 'Search Category',
        'all_items'         => 'All Category',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Categorys',
        'new_item_name'     => 'New Category Name',
		'separate_items_with_commas' => 'Separate Status with commas',
		'add_or_remove_items'=> 'Add or remove Status',
		'choose_from_most_used'=>'Choose from the most used Category',
        'menu_name'         => 'Category',
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
		'public'                => true,
		'update_count_callback' => false,
		'query_var' => 'status'.true,
		//'rewrite'               => true,
        'rewrite' => array('slug' => 'pcategory','with_front'=> false),
		'capabilities'          => array(),
		'sort'                  => false,
		'show_admin_column' => false,
		//New interface
		'show_in_rest' => true,
		
		
    );
 
    register_taxonomy( 'pcategory', array('projects'), $args );
}

add_action( 'init', 'projects_clients' );
function projects_clients() {
    $labels = array(
        'name'              => 'Clients',
        'singular_name'     => 'clients',
        'search_items'      => 'Search Clients',
        'all_items'         => 'All Clients',
        'parent_item'       => 'Parent Clients',
        'parent_item_colon' => 'Parent Clients:',
        'edit_item'         => 'Edit Clients',
        'update_item'       => 'Update Clients',
        'add_new_item'      => 'Add New Clients',
        'new_item_name'     => 'New Clients Name',
		'separate_items_with_commas' => 'Separate Status with commas',
		'add_or_remove_items'=> 'Add or remove Status',
		'choose_from_most_used'=>'Choose from the most used clients',
        'menu_name'         => 'Clients',
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
		'public'                => true,
		'update_count_callback' => false,
		'query_var' => 'status'.true,
		//'rewrite'               => true,
        'rewrite' => array('slug' => 'clients','with_front'=> false),
		'capabilities'          => array(),
		'sort'                  => false,
		'show_admin_column' => false,
		//New interface
		'show_in_rest' => true,
		
		
    );
 
    register_taxonomy( 'clients', array('projects'), $args );
}


add_action( 'init', 'projects_type' );
function projects_type() {
    $labels = array(
        'name'              => 'Development Type',
        'singular_name'     => 'ptype',
        'search_items'      => 'Search Development Type',
        'all_items'         => 'All Development Type',
        'parent_item'       => 'Parent Type',
        'parent_item_colon' => 'Parent Type:',
        'edit_item'         => 'Edit Development Type',
        'update_item'       => 'Update Development Type',
        'add_new_item'      => 'Add New Development Type',
        'new_item_name'     => 'New Development Type',
		'separate_items_with_commas' => 'Separate Status with commas',
		'add_or_remove_items'=> 'Add or remove Status',
		'choose_from_most_used'=>'Choose from the most used type',
        'menu_name'         => 'Development Type',
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
		'public'                => true,
		'update_count_callback' => false,
		'query_var' => 'status'.true,
		//'rewrite'               => true,
        'rewrite' => array('slug' => 'ptype','with_front'=> false),
		'capabilities'          => array(),
		'sort'                  => false,
		'show_admin_column' => false,
		//New interface
		'show_in_rest' => true,
		
		
    );
 
    register_taxonomy( 'ptype', array('projects'), $args );
}


//add_action( 'edit_form_after_editor', 'no_metabox_wspe_1' );
function no_metabox_wspe_1(){

	global $post;
	
    if( 'projects' != $post->post_type )
		return;
		
    wp_nonce_field( plugin_basename( __FILE__ ), 'wspe_1' );	
	?>

<script type="text/javascript">
jQuery(document).ready(function($) {

    // Set variables
    var $image_slideshow_ids = $('#slideshow_images');
    var $slideshow_images = $('#slideshow_wrapper .slideshow_images');

    // Make images sortable
    $slideshow_images.sortable({
        cursor: 'move',
        items: '.image',
        update: function(event, ui) {
            var attachment_ids = '';
            $('#slideshow_wrapper ul .image').css('cursor', 'default').each(function() {
                var attachment_id = jQuery(this).attr('data-attachment_id');
                attachment_ids = attachment_ids + attachment_id + ',';
            });
            $image_slideshow_ids.val(attachment_ids);
        }
    });

    // Uploading files
    var slideshow_frame;

    jQuery('.add_slideshow_images').live('click', function(event) {

        event.preventDefault();

        // If the media frame already exists, reopen it.
        if (slideshow_frame) {
            slideshow_frame.open();
            return;
        }

        // Create the media frame.
        slideshow_frame = wp.media.frames.downloadable_file = wp.media({

            // Set the title of the modal.
            title: 'Add Images to Slideshow',

            // Set the button of the modal.
            button: {
                text: 'Add to slideshow',
            },

            states: [
                new wp.media.controller.Library({
                    library: wp.media.query({
                        type: 'image'
                    }),
                    multiple: true, // do not allow multiple files, if you want multiple, set true
                    filterable: 'all' // turn on filters
                })
            ]

            // Set to true to allow multiple files to be selected
            //multiple: true

        });

        var $el = $(this);
        var attachment_ids = $image_slideshow_ids.val();

        // When an image is selected, run a callback.
        slideshow_frame.on('select', function() {
            var selection = slideshow_frame.state().get('selection');
            selection.map(function(attachment) {
                attachment = attachment.toJSON();
                if (attachment.id) {
                    attachment_ids = attachment_ids ? attachment_ids + "," + attachment
                        .id : attachment.id;
                    $slideshow_images.append('\
								<li class="image" data-attachment_id="' + attachment.id + '">\
									<img src="' + attachment.url + '" />\
									<span><a href="#" class="delete_slide" title="Delete image">Delete</a></span>\
								</li>');
                }
            });
            $image_slideshow_ids.val(attachment_ids);
        });

        // Finally, open the modal
        slideshow_frame.open();

    });

    // Remove files
    $('#slideshow_wrapper').on('click', 'a.delete_slide', function() {

        $(this).closest('.image').remove();
        var attachment_ids = '';

        $('#slideshow_wrapper ul .image').css('cursor', 'default').each(function() {
            var attachment_id = jQuery(this).attr('data-attachment_id');
            attachment_ids = attachment_ids + attachment_id + ',';
        });

        $image_slideshow_ids.val(attachment_ids);
        return false;

    });

});
</script>

<div id="normal-sortables" class="meta-box-sortables ui-sortable">
    <div id="postexcerpt" class="postbox closed" style="display: block;">
        <button type="button" class="handlediv button-link" aria-expanded="false">
            <span class="screen-reader-text">Toggle panel: Slideshow</span><span class="toggle-indicator"
                aria-hidden="true"></span>
        </button>

        <h2 class="hndle ui-sortable-handle"><span>Slideshow</span></h2>

        <div class="inside">

            <div><?php echo $post->ID?></div>

            <p class="add_images_wrapper hide-if-no-js">
                <a href="#" class="add_slideshow_images">Add slideshow images</a>
            </p>

            <div id="slideshow_wrapper">
                <ul class="slideshow_images">
                    <?php
							if (metadata_exists('post', $post->ID, '_slideshow_images')) {
								$slideshow_images = get_post_meta($post->ID,'_slideshow_images', TRUE);
							} else {
								$attachment_ids = array_filter(array_diff(get_posts('post_parent='.$post->ID.'&numberposts=-1&post_type=attachment&orderby=menu_order&order=ASC&post_mime_type=image&fields=ids'), array(get_post_thumbnail_id())));
								$slideshow_images = implode(',', $attachment_ids);
							}

							$attachments = array_filter(explode(',', $slideshow_images));

							if ($attachments) {
								foreach ($attachments as $attachment_id) {
									
									$image_attributes = wp_get_attachment_image_src( $attachment_id );
									
									echo '<li class="image" data-attachment_id="'.$attachment_id.'"> <img src="'. $image_attributes[0] .' " class"image" alt="<?php echo $thumb_title;?>"/>

                    <span><a href="#" class="delete_slide" title="Delete image">delete</a></span>
                    </li>';

                    }
                    }
                    ?>
                </ul>
                <input type="hidden" id="slideshow_images" name="slideshow_images"
                    value="<?php echo esc_attr( $slideshow_images ); ?>" />
                <div class="clear"></div>
            </div>


        </div>
    </div>
</div>

<?php		
}

//add_action( 'save_post', 'save_wpse_1', 10, 2 );
function save_wpse_1( $post_id, $post_object )
{
    if( !isset( $post_object->post_type ) || 'projects' != $post_object->post_type )
        return;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    if ( !isset( $_POST['wspe_1'] ) || !wp_verify_nonce( $_POST['wspe_1'], plugin_basename( __FILE__ ) ) )
        return;
		
	if ( isset($_REQUEST['slideshow_images']) ) {
		$attachment_ids = array_filter(explode(',', sanitize_text_field($_REQUEST['slideshow_images'] )));
		update_post_meta($post_id, '_slideshow_images', implode(',', $attachment_ids));
	}

}


add_action( 'admin_enqueue_scripts', 'projects_admin_script_style1' );
function projects_admin_script_style1( $hook ) {
    global $post_type;
 
    if ( ( 'post.php' == $hook || 'post-new.php' == $hook ) && ( 'projects' == $post_type ) ) {
		
	//	wp_enqueue_script('jquery-ui-tabs','','','',true);
	//	
	//        wp_enqueue_style(
	//            'tab_function',
	//            'http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css',
	//            false,
	//            '1.10.4',
	//            'all'
	//        );

	wp_enqueue_script( 'projects_js', get_template_directory_uri() . '/libs/projects/js/projects.js', array(jquery), '1.0.0', true);
	wp_enqueue_style('projects_css', get_template_directory_uri() . '/libs/projects/css/projects.css' );

    }
}



add_filter( 'manage_edit-projects_columns', 'my_edit_projects_columns' ) ;
function my_edit_projects_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'thumb' => __( 'thumb' ),
		'title' => __( 'Projects' ),
		'pcategory' => __( 'Category' ),
		'ptype' => __( 'Development Type' ),
		'date' => __( 'Date' )
	);

	return $columns;
}

add_action( 'manage_projects_posts_custom_column', 'my_manage_projects_columns', 10, 2 );
function my_manage_projects_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		/* If displaying the 'duration' column. */
		case 'thumb' :

			/* Get the post meta. */
			$duration = get_post_meta( $post_id, 'duration', true );
			//$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			
			//$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium');
			$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			
			if( $image_attributes ) {?>


<img src="<?php echo $image_attributes[0]; ?>" width="80">


<?php /*?><img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>"
    height="<?php echo $image_attributes[2]; ?>"><?php */?>

<?php } ?>

<?php
			//echo '<img src="'.$url.'" width="50">';
			
			//echo $url;
			

			/* If no duration is found, output a default message. */
			//if ( empty( $duration ) )
				//echo __( 'Unknown' );

			/* If there is a duration, append 'minutes' to the text string. */
			//else
				//printf( __( '%s minutes' ), $duration );

			break;
			
			
			
			
		/* If displaying the 'type' column. */
		case 'pcategory' :

			/* Get the genres for the post. */
			$terms = get_the_terms( $post_id, 'pcategory' );

			/* If terms were found. */
			if ( !empty( $terms ) ) {

				$out = array();

				/* Loop through each term, linking to the 'edit posts' page for the specific term. */
				foreach ( $terms as $term ) {
					$out[] = sprintf( '<a href="%s">%s</a>',
						esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'pcategory' => $term->slug ), 'edit.php' ) ),
						esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'pcategory', 'display' ) )
					);
				}

				/* Join the terms, separating them with a comma. */
				echo join( ', ', $out );
			}

			/* If no terms were found, output a default message. */
			else {
				_e( 'No Specification' );
			}

			break;
			
			

		/* If displaying the 'type' column. */
		case 'ptype' :

			/* Get the genres for the post. */
			$terms = get_the_terms( $post_id, 'ptype' );

			/* If terms were found. */
			if ( !empty( $terms ) ) {

				$out = array();

				/* Loop through each term, linking to the 'edit posts' page for the specific term. */
				foreach ( $terms as $term ) {
					$out[] = sprintf( '<a href="%s">%s</a>',
						esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'ptype' => $term->slug ), 'edit.php' ) ),
						esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'ptype', 'display' ) )
					);
				}

				/* Join the terms, separating them with a comma. */
				echo join( ', ', $out );
			}

			/* If no terms were found, output a default message. */
			else {
				_e( 'No Specification' );
			}

			break;

		/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
}


add_filter( 'manage_edit-projects_sortable_columns', 'my_projects_sortable_columns' );
function my_projects_sortable_columns( $columns ) {

	//$columns['pcategory'] = 'pcategory';
	//$columns['type'] = 'Development Type';

	return $columns;
}


function get_issues() {
 $output = array();
 $hlterms = get_terms('pcategory', array('orderby' => 'id', 'order' => 'DESC','hide_empty' => false));
 foreach($hlterms as $term){
     array_push($output, $term->term_id);
 } 
 return $output;
}


function get_posts_for_current_issue() {
   $total_issues = get_issues();
   foreach($total_issues as $issue_id){
     $args = array(
     'post_type' => 'post',
         'status' => 'publish',
     'tax_query' => array(
          array(
        'taxonomy' => 'pcategory',
        'field' => 'id',
        'terms' => $issue_id
          )
           )
        );//end of args
     $current_issue_posts = get_posts($args);
     if(!is_wp_error($current_issue_posts) && count($current_issue_posts)>0){
        return $current_issue_posts; //will terminate the loop if posts found
     }
   }//end of foreach
}//end of function
 
 
/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
//add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'projects'; // change to your post type
	$taxonomy  = 'pcategory'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => __("Show All {$info_taxonomy->label}"),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}

/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
//add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'projects'; // change to your post type
	$taxonomy  = 'pcategory'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}



//init the meta box
add_action( 'after_setup_theme', 'custom_postimage_setup' );
function custom_postimage_setup(){
    add_action( 'add_meta_boxes', 'custom_postimage_meta_box' );
    add_action( 'save_post', 'custom_postimage_meta_box_save' );
}

function custom_postimage_meta_box(){

    //on which post types should the box appear?
    $post_types = array('projects');
    foreach($post_types as $pt){
        add_meta_box('custom_postimage_meta_box',__( 'Vertical Featured Images' ),'custom_postimage_meta_box_func',$pt,'side','low');
    }
}

function custom_postimage_meta_box_func($post){

    //an array with all the images (ba meta key). The same array has to be in custom_postimage_meta_box_save($post_id) as well.
    $meta_keys = array(
		'second_featured_image',
		//'third_featured_image'
	);

    foreach($meta_keys as $meta_key){
        $image_meta_val=get_post_meta( $post->ID, $meta_key, true);
        ?>
        <div class="custom_postimage_wrapper" id="<?php echo $meta_key; ?>_wrapper" style="margin-bottom:20px;">
            <img src="<?php echo ($image_meta_val!=''?wp_get_attachment_image_src( $image_meta_val)[0]:''); ?>" style="width:100%;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" alt="">

            <a class="addimage button" style="margin-top:15px;" onclick="custom_postimage_add_image('<?php echo $meta_key; ?>');"><?php _e('add image','yourdomain'); ?></a><br>
            <a class="removeimage" style="color:#a00;cursor:pointer;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" onclick="custom_postimage_remove_image('<?php echo $meta_key; ?>');"><?php _e('Remove featured image','yourdomain'); ?></a>
            <input type="hidden" name="<?php echo $meta_key; ?>" id="<?php echo $meta_key; ?>" value="<?php echo $image_meta_val; ?>" />
        </div>
    <?php } ?>
    <script>
    function custom_postimage_add_image(key){

        var $wrapper = jQuery('#'+key+'_wrapper');

        custom_postimage_uploader = wp.media.frames.file_frame = wp.media({
            title: '<?php _e('select image','yourdomain'); ?>',
            button: {
                text: '<?php _e('select image','yourdomain'); ?>'
            },
            multiple: false
        });
        custom_postimage_uploader.on('select', function() {

            var attachment = custom_postimage_uploader.state().get('selection').first().toJSON();
            var img_url = attachment['url'];
            var img_id = attachment['id'];
            $wrapper.find('input#'+key).val(img_id);
            $wrapper.find('img').attr('src',img_url);
            $wrapper.find('img').show();
            $wrapper.find('a.removeimage').show();
        });
        custom_postimage_uploader.on('open', function(){
            var selection = custom_postimage_uploader.state().get('selection');
            var selected = $wrapper.find('input#'+key).val();
            if(selected){
                selection.add(wp.media.attachment(selected));
            }
        });
        custom_postimage_uploader.open();
        return false;
    }

    function custom_postimage_remove_image(key){
        var $wrapper = jQuery('#'+key+'_wrapper');
        $wrapper.find('input#'+key).val('');
        $wrapper.find('img').hide();
        $wrapper.find('a.removeimage').hide();
        return false;
    }
    </script>
    <?php
    wp_nonce_field( 'custom_postimage_meta_box', 'custom_postimage_meta_box_nonce' );
}

function custom_postimage_meta_box_save($post_id){

    if ( ! current_user_can( 'edit_posts', $post_id ) ){ return 'not permitted'; }

    if (isset( $_POST['custom_postimage_meta_box_nonce'] ) && wp_verify_nonce($_POST['custom_postimage_meta_box_nonce'],'custom_postimage_meta_box' )){

        //same array as in custom_postimage_meta_box_func($post)
        $meta_keys = array(
			'second_featured_image',
			//'third_featured_image'
		);
        foreach($meta_keys as $meta_key){
            if(isset($_POST[$meta_key]) && intval($_POST[$meta_key])!=''){
                update_post_meta( $post_id, $meta_key, intval($_POST[$meta_key]));
            }else{
                update_post_meta( $post_id, $meta_key, '');
            }
        }
    }
}



//init the meta box
add_action( 'after_setup_theme', 'custom_slideshow_images' );

function custom_slideshow_images(){
    add_action( 'add_meta_boxes', 'custom_slideshow_images_meta_box' ); // adds meta box for new images
    add_action( 'save_post', 'custom_slideshow_images_meta_box_save' ); //action for saving new images
}

function custom_slideshow_images_meta_box(){
	
	$post_types = 'projects';

    add_meta_box('_slideshow_images','Slideshow','custom_slideshow_images_meta_box_func',$post_types);
}

function custom_slideshow_images_meta_box_func($post){?>

	
	<a href="#" class="add_slideshow_images">Add slideshow images</a>

	<div>Drag for sorting slideshow</div>
	<div class="new_sideshow">

		<div id="slideshow_wrapper">

			<ul class="slideshow_images">
				<?php
				if (metadata_exists('post', $post->ID, '_slideshow_images')) {
					$slideshow_images = get_post_meta($post->ID,'_slideshow_images', TRUE);
				} else {
					$attachment_ids = array_filter(array_diff(get_posts('post_parent='.$post->ID.'&numberposts=-1&post_type=attachment&orderby=menu_order&order=ASC&post_mime_type=image&fields=ids'), array(get_post_thumbnail_id())));
					$slideshow_images = implode(',', $attachment_ids);}

					$attachments = array_filter(explode(',', $slideshow_images));

				if ($attachments) {
					foreach ($attachments as $attachment_id) {
						$image_attributes = wp_get_attachment_image_src( $attachment_id );
										
						echo '<li class="image" data-attachment_id="'.$attachment_id.'"> <img src="'. $image_attributes[0] .' " class"image" alt="<?php echo $thumb_title;?>"/>
						<span><a href="#" class="delete_slide" title="Delete image"></a></span>
						</li>'
					;}
				}
				?>
			</ul>
			<input type="hidden" id="slideshow_images" name="slideshow_images"
			value="<?php echo esc_attr( $slideshow_images ); ?>" />
		</div>
	</div>


	<script type="text/javascript">
		jQuery(document).ready(function($) {

			// Set variables
			var $image_slideshow_ids = $('#slideshow_images');
			var $slideshow_images = $('#slideshow_wrapper .slideshow_images');

			// Make images sortable
			$slideshow_images.sortable({
				cursor: 'move',
				items: '.image',
				update: function(event, ui) {
					var attachment_ids = '';
					$('#slideshow_wrapper ul .image').css('cursor', 'default').each(function() {
						var attachment_id = jQuery(this).attr('data-attachment_id');
						attachment_ids = attachment_ids + attachment_id + ',';
					});
					$image_slideshow_ids.val(attachment_ids);
				}
			});

			// Uploading files
			var slideshow_frame;

			jQuery('.add_slideshow_images').live('click', function(event) {

				event.preventDefault();

				// If the media frame already exists, reopen it.
				if (slideshow_frame) {
					slideshow_frame.open();
					return;
				}

				// Create the media frame.
				slideshow_frame = wp.media.frames.downloadable_file = wp.media({

					// Set the title of the modal.
					title: 'Add Images to Slideshow',

					// Set the button of the modal.
					button: {
						text: 'Add to slideshow',
					},

					states: [
						new wp.media.controller.Library({
							library: wp.media.query({
								type: 'image'
							}),
							multiple: true, // do not allow multiple files, if you want multiple, set true
							filterable: 'all' // turn on filters
						})
					]

					// Set to true to allow multiple files to be selected
					//multiple: true

				});

				var $el = $(this);
				var attachment_ids = $image_slideshow_ids.val();

				// When an image is selected, run a callback.
				slideshow_frame.on('select', function() {
					var selection = slideshow_frame.state().get('selection');
					selection.map(function(attachment) {
						attachment = attachment.toJSON();
						if (attachment.id) {
							attachment_ids = attachment_ids ? attachment_ids + "," + attachment
								.id : attachment.id;
							$slideshow_images.append('\
										<li class="image" data-attachment_id="' + attachment.id + '">\
											<img src="' + attachment.url + '" />\
											<span><a href="#" class="delete_slide" title="Delete image"></a></span>\
										</li>');
						}
					});
					$image_slideshow_ids.val(attachment_ids);
				});

				// Finally, open the modal
				slideshow_frame.open();

			});

			// Remove files
			$('#slideshow_wrapper').on('click', 'a.delete_slide', function() {

				$(this).closest('.image').remove();
				var attachment_ids = '';

				$('#slideshow_wrapper ul .image').css('cursor', 'default').each(function() {
					var attachment_id = jQuery(this).attr('data-attachment_id');
					attachment_ids = attachment_ids + attachment_id + ',';
				});

				$image_slideshow_ids.val(attachment_ids);
				return false;

			});

		});
	</script>

	<?php
     wp_nonce_field( 'custom_slideshow_images_meta_box', 'custom_slideshow_images_meta_box_nonce' );
}

function custom_slideshow_images_meta_box_save($post_id){

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	return;

	if ( isset($_REQUEST['slideshow_images']) ) {
		$attachment_ids = array_filter(explode(',', sanitize_text_field($_REQUEST['slideshow_images'] )));
		update_post_meta($post_id, '_slideshow_images', implode(',', $attachment_ids));
	}	
}