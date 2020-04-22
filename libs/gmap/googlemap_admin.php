<?php

add_action( 'admin_head', 'add_google_map_script' );
function add_google_map_script() {

	// Bring the post type global into scope
	global $post_type;
	
	
	
	$types = array ('projects');

	// If the current post type doesn't match, return, ie. end execution here
	//if( $types )
		//return;

	// Else we reach this point and do whatever
	wp_register_script( 'googlemap', ( 'https://maps.google.com/maps/api/js?visual_refresh=true&libraries=geometry,places' ),array(),'20120313' );
	wp_enqueue_script('googlemap');
	
	?>
	
 	

    
    <script type="text/javascript">
	jQuery(document).ready(function($) {
	
	
	
	var map = null;
	var marker = null;
	
//	var default_lat = 5.263234100000001;
//	var default_lng = 100.48462270000005;
	var default_zoom = 12;
	var map_div = "map_canvas";
	// some google objects
	var infowindow = new google.maps.InfoWindow();
	var geocoder = new google.maps.Geocoder();


    $(".submitOn").click(function() {
        var street_address = $("#street_address").val();
        if(street_address.length > 0 ){
            // display code address
            showAddress(street_address);
        }
        
        return false;
    });



window.onload = function() {
	
	var map_val = "<?php global $post; $id = get_the_ID(); echo get_post_meta($id, 'map_val', true); ?>";
	
       if( map_val =="" ){
			var latlng = new google.maps.LatLng(5.432043,100.301744);
			//console.log('default');
			$('.map_info').html('default');
        }else{
			var latlng = new google.maps.LatLng(<?php global $post; $id = get_the_ID(); echo get_post_meta($id, 'map_val', true); ?>);
			//console.log('updated');
			$('.map_info').html('updated')
		}
	
    var mapOptions = {
        scaleControl: true,
        zoom: default_zoom,
        zoomControl: true,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        //draggableCursor: 'crosshair'
    };

    map = new google.maps.Map(document.getElementById('map_project'), mapOptions);

    showMarker();
}

function showMarker(){
    // remove all markers
    remove_all_markers();   
     
    marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
//            title: arr_markers[marker_index]["name"],
            draggable: true
    });
    
	
    build_info_window();

    google.maps.event.addListener(marker, 'click', function(event) {
        build_info_window();
    });
    
    google.maps.event.addListener(marker, "dragend", function() {
        build_info_window();
    });
    
}

function build_info_window() {
	
//	$('.cood').html(marker.getPosition().lat()+ ',' +marker.getPosition().lng());
	
	$('#map_val').val(marker.getPosition().lat()+ ',' +marker.getPosition().lng());

//    infowindow.setContent( '<div class="googleMap_infowindow">'
//+'<span class="info_details"><strong>Drag marker to required location.</strong></span>'
//+ '<span class="info_details">Latitude:</span><span class="info_details"> <input type="text" value="'+ marker.getPosition().lat() + '"/></span>'
//+ '<span class="info_details">Longitude:</span><span class="info_details"> <input type="text" value="'+ marker.getPosition().lng() + '"/></span></div>'
//+ '<span class="info_details">Sea level:</span><span class="info_details"> <input type="text" name="seaHeight" id="seaHeight" value="'+sea_level+'"/></span></div>'
//
// );
//    
//    infowindow.open(map,marker);
        
}

function remove_all_markers(){
    if(marker != null){
       marker.setMap(null); 
    }      
}


function showAddress(address) {

    geocoder.geocode( { 'address': address}, function(results, status) {
       
        if (status == google.maps.GeocoderStatus.OK) {
            // remove all markers
            remove_all_markers();
            
            map.setCenter(results[0].geometry.location);
            map.setZoom(16);

            showMarker();

        } else {
          alert(address + " not found");
        }
      });

   }	

function autocomplete(){
	
	var input = document.getElementById('street_address');
	var autocomplete = new google.maps.places.Autocomplete(input);
	}
	
google.maps.event.addDomListener(window, 'load', autocomplete);

});
    </script>    
    
    <?php
	
	
}


add_action('admin_init', 'add_google_meta_boxes', 1);

function add_google_meta_boxes() {

 $post_types = array ( 'projects' );

    foreach( $post_types as $post_type )
    {
        add_meta_box(
            'google_map', // $id
            'Google Map', // $title 
            'eowon_project_meta_box', // $callback
            $post_type,
            'normal', // $context
            'high' // $priority
        );
    }
}
 
function eowon_project_meta_box($projects) {
	global $post;
	$map_val = get_post_meta($projects->ID, 'map_val', true);
?>
 
<?php /*?> <?php echo $map_val; ?>
 <?php echo $google_map_val; ?><?php */?>
 

 
<div> 
	<div style="float:left;">
    <input id="street_address" name="street_address" type="text" class="textBefore vpsClearOnFocus" placeholder="House number, Street, City etc..." size="50" autocomplete="off">
    </div>
    <div style="float:left;"> 
    <div class="submitOn" style="padding:10px;">search</div>
    </div>
    <div style="float:right;" class="map_info"></div>
    <div style="clear:both;"></div>
</div>

<!--<div class="cood"></div>-->

<div style="padding-bottom:10px;">
	<form><input type= "text" name ="map_val" id="map_val"  value="<?php echo $map_val; ?>" size="100"></form>
</div>
<div id="map_project" style="width:100%; height:300px; background:#CCC;"></div>
 
 
	<?php
}



add_action('save_post', 'google_meta_box_save');

function google_meta_box_save($post_id) {
	
		// Store data in post meta table if present in post data
		if ( isset( $_POST['map_val'] ) && $_POST['map_val'] != '' && $_POST['map_val'] != '5.4320438861239255,100.30174432494664' ) {
			update_post_meta( $post_id, 'map_val',$_POST['map_val'] );
			}
			
		if ( isset( $_POST['google_map_val'] ) && $_POST['google_map_val'] != '' ) {
			update_post_meta( $post_id, 'google_map_val',$_POST['google_map_val'] );
			}
			
}


 
