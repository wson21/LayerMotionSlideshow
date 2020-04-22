<?php
/**
 * Contact page : google map
 */
 
 
function googlemap_scripts() { 
	wp_register_script( 'googlemap', ( 'http://maps.google.com/maps/api/js?sensor=false&visual_refresh=true' ),array(),'20120313' );
	wp_enqueue_script('googlemap');
}
	
add_action( 'wp_enqueue_scripts', 'googlemap_scripts' );	
 
 
function add_google_map() {
	if( is_page("visit-us") ) {
	?>
<script>
jQuery(document).ready(function($) {

   var markers = new Array();
   
 	  var styles = [
		{featureType:"water",stylers:[{color:"#e4e4e4"},{visibility:"on"}]},
		
		{featureType:"landscape",stylers:[{color:"#e4e4e4"}]},
		
		{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#4a4a4a"},{weight:0.4}]},
		
		{featureType:"poi",stylers:[{color:"#e4e4e4"}]},
		
		{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#ccccce"}]},
		
		{featureType:"road",elementType:"geometry.stroke",stylers:[{color:"#a0a0a0"},{weight:0.1},{visibility:"off"}]},
		
		{featureType:"road",elementType:"labels.text.stroke",stylers:[{color:"#e4e4e4"},{weight:4}]},
		
		{featureType:"road",elementType:"labels.text",stylers:[{color:"#eaeaea"},{weight:0.5}]},{elementType:"labels.text",stylers:[{color:"#858585"},{weight:0.1}]},
		
		{featureType:"administrative",elementType:"labels.text",stylers:[{visibility:"on"},{weight:0.4},{color:"#868688"}]},
		
		{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#cccccc"}]},
		
		{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"transit",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"administrative",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"poi",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"transit.line",elementType:"geometry",stylers:[{visibility:"on"},{color:"#a0a0a0"}]},
		
		{featureType:"poi.medical",elementType:"labels",stylers:[{color:"#636363"},{visibility:"off"}]},
		
		{featureType:"poi.place_of_worship",elementType:"labels",stylers:[{visibility:"off"}]},
		
		{featureType:"poi.attraction",elementType:"labels",stylers:[{visibility:"off"}]},
		
		{featureType:"poi.business",elementType:"labels",stylers:[{visibility:"off"}]}
	  ];
	
	  // Create a new StyledMapType object, passing it the array of styles,
	  // as well as the name to be displayed on the map type control.
	  var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
	  
	  var LatLng = new google.maps.LatLng(5.43201,100.31059);
	  var myOptions = {
		  zoom: 14,
		  maxZoom: 18,
		  streetViewControl:false,
    	  scaleControl: true,
    	  draggable: true,
		  disableDoubleClickZoom: false,
		  scrollwheel: true,
		  center: LatLng,
		  navigationControl: false,
		  navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		  mapTypeControl:false,
		  	mapTypeControlOptions:{style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		  panControl: false,
			panControlOptions:{position: google.maps.ControlPosition.RIGHT_TOP},
		  zoomControl: false,
			zoomControlOptions: {
				  style: google.maps.ZoomControlStyle.SMALL,
				  position: google.maps.ControlPosition.RIGHT_TOP
				},
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}; 
   	
	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');


	
	var position = new google.maps.LatLng(5.43201,100.31059);
	
	var image = new google.maps.MarkerImage('<?php bloginfo('template_directory'); ?>/images/belleview_map.png',
		new google.maps.Size(150, 65),
		new google.maps.Point(0,0),
		new google.maps.Point(20,45));
	
	//var location = new google.maps.LatLng(5.37972,100.35853);

  
      marker = new google.maps.Marker({
        position: position,
        map: map,
		icon: image
      });


});
    </script>
    <?php
	}
	
	if( is_single() ) {
	?>

    <script>
	
	  // Create an array of styles.
	  var styles = [
	  
		{featureType:"water",stylers:[{color:"#e4e4e4"},{visibility:"on"}]},
		
		{featureType:"landscape",stylers:[{color:"#e4e4e4"}]},
		
		{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#4a4a4a"},{weight:0.4}]},
		
		{featureType:"poi",stylers:[{color:"#e4e4e4"}]},
		
		{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#ccccce"}]},
		
		{featureType:"road",elementType:"geometry.stroke",stylers:[{color:"#a0a0a0"},{weight:0.1},{visibility:"off"}]},
		
		{featureType:"road",elementType:"labels.text.stroke",stylers:[{color:"#e4e4e4"},{weight:4}]},
		
		{featureType:"road",elementType:"labels.text",stylers:[{color:"#eaeaea"},{weight:0.5}]},{elementType:"labels.text",stylers:[{color:"#858585"},{weight:0.1}]},
		
		{featureType:"administrative",elementType:"labels.text",stylers:[{visibility:"on"},{weight:0.4},{color:"#868688"}]},
		
		{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#cccccc"}]},
		
		{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"transit",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"administrative",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"poi",elementType:"labels.icon",stylers:[{visibility:"off"}]},
		
		{featureType:"transit.line",elementType:"geometry",stylers:[{visibility:"on"},{color:"#a0a0a0"}]},
		
		{featureType:"poi.medical",elementType:"labels",stylers:[{color:"#636363"},{visibility:"off"}]},
		
		{featureType:"poi.place_of_worship",elementType:"labels",stylers:[{visibility:"off"}]},
		
		{featureType:"poi.attraction",elementType:"labels",stylers:[{visibility:"off"}]},
		
		{featureType:"poi.business",elementType:"labels",stylers:[{visibility:"off"}]}

	  ];
	
	  // Create a new StyledMapType object, passing it the array of styles,
	  // as well as the name to be displayed on the map type control.
	  var styledMap = new google.maps.StyledMapType(styles,
		{name: "Styled Map"});
	
	  // Create a map object, and include the MapTypeId to add
	  // to the map type control.
	
    </script>

	<?php
    }
	
	
	
	
}
add_action( 'wp_head', 'add_google_map');