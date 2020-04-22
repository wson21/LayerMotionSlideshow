<?php

add_action( 'init', 'create_news' );

function create_news() {
	register_post_type( 'news',
		array(
			'labels' => array(
			'name' => 'News',
			'singular_name' => 'news',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New news',
			'edit' => 'Edit',
			'edit_item' => 'Edit news',
			'new_item' => 'New news',
			'view' => 'View',
			'view_item' => 'View news',
			'search_items' => 'Search news',
			'not_found' => 'No news found',
			'not_found_in_trash' =>'No newst found in Trash',
			'parent' => 'Parent news'),
			//'supports' => 'revisions',
			'public' => true,
			'menu_position' => 28,
			'supports' =>
			
			array( 'title', 'editor','thumbnail','revisions','page-attributes'), 
			
			'taxonomies' => array( '' ),
			
			//'menu_icon' =>'',
			//'menu_icon' =>plugins_url( 'images/image.png', __FILE__ ),
			'has_archive' => true,
			'rewrite' => true,
			//'rewrite' => array('slug'=>'project','with_front'=>false),
			)
		);
}


add_action( 'edit_form_after_editor', 'no_metabox_wspe_114084' );

add_action( 'save_post', 'save_wpse_114084', 10, 2 );

function no_metabox_wspe_114084()
{
    global $post;
    if( 'news' != $post->post_type )
        return;
		
	$thumb = get_post_meta( $post->ID, 'thumb', true);
	$sources = get_post_meta( $post->ID, 'sources', true);	
		
//  $overview = get_post_meta( $post->ID, 'overview', true);
//  $interior = get_post_meta( $post->ID, 'interior', true);
//	$features = get_post_meta( $post->ID, 'features', true);
//  $plan     = get_post_meta( $post->ID, 'plan', true);
//	$location = get_post_meta( $post->ID, 'location', true);
//	$showroom = get_post_meta( $post->ID, 'showroom', true);
//	$site = get_post_meta( $post->ID, 'site', true);

    wp_nonce_field( plugin_basename( __FILE__ ), 'wspe_114084' );	
	?>
	
	<script type="text/javascript">
    jQuery(document).ready(function($){
		$( "#tabs" ).tabs({
		  collapsible: true
		});
    });
    </script>
      
<?php /*?><div style="padding-top:50px;">
	<h2>Sources</h2>
    <input type="text" name="sources" size="100" value="<?php echo $sources ?>" />
</div>
      
<div style="padding-top:50px;">
	<h2>Add Thumbnails</h2>
	<?php echo wp_editor( $thumb, '_thumb', array( 'textarea_name' => '_thumb' ) ); ?>
</div><?php */?>



<?php		
}

function save_wpse_114084( $post_id, $post_object )
{
    if( !isset( $post_object->post_type ) || 'news' != $post_object->post_type )
        return;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    if ( !isset( $_POST['wspe_114084'] ) || !wp_verify_nonce( $_POST['wspe_114084'], plugin_basename( __FILE__ ) ) )
        return;
		
    if ( isset( $_POST['_thumb'] )  )
        update_post_meta( $post_id, 'thumb', $_POST['_thumb'] );
		
    if ( isset( $_POST['sources'] )  )
        update_post_meta( $post_id, 'sources', $_POST['sources'] );

//  if ( isset( $_POST['_overview'] ) )
//        update_post_meta( $post_id, 'overview', $_POST['_overview'] );
//
//  if ( isset( $_POST['_interior'] ) )
//        update_post_meta( $post_id, 'interior', $_POST['_interior'] );
//
//	if ( isset( $_POST['_features'] ) )
//        update_post_meta( $post_id, 'features', $_POST['_features'] );
//
//	if ( isset( $_POST['_plan'] ) )
//        update_post_meta( $post_id, 'plan', $_POST['_plan'] );
//
//  if ( isset( $_POST['_location'] ) )
//        update_post_meta( $post_id, 'location', $_POST['_location'] );
//
//  if ( isset( $_POST['_media'] ) )
//        update_post_meta( $post_id, 'media', $_POST['_media'] );
//
//	if ( isset( $_POST['_showroom'] ) )
//        update_post_meta( $post_id, 'showroom', $_POST['_showroom'] );
//
//	if ( isset( $_POST['_site'] ) )
//        update_post_meta( $post_id, 'site', $_POST['_site'] );
}



function projects_admin_script_style( $hook ) {
    global $post_type;
 
    if ( ( 'post.php' == $hook || 'post-new.php' == $hook ) && ( 'news' == $post_type ) ) {
		
	wp_enqueue_script('jquery-ui-tabs','','','',true);
	
        wp_enqueue_style(
            'tab_function',
            'http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css',
            false,
            '1.10.4',
            'all'
        );	
    }
}
add_action( 'admin_enqueue_scripts', 'projects_admin_script_style' );