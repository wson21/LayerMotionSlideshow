<?php
/**
 * Contact page : google map
 */
 

function googlemap_scripts() {
	
	if( is_home() || is_front_page() || is_page("contact") ) {
	wp_register_script( 'googlemap', ( 'http://maps.google.com/maps/api/js?visual_refresh=true' ),array(),'20120313' );
	//wp_register_script( 'googlemap', ( 'http://maps.google.com/maps/api/js?key=AIzaSyAofDOAdsUsIYrQz6echyzBGlyNp7dwOcI&visual_refresh=true' ),array(),'20120313' );
	wp_enqueue_script('googlemap');
	}
	
}
	
add_action( 'wp_enqueue_scripts', 'googlemap_scripts' );	
 
 
function add_google_map() {
	//if( is_page("contact-us") ) {
	if( is_home() || is_front_page() || is_page("contact") ) {
		?>
<script>
jQuery(document).ready(function($) {
	
	
	

   var markers = new Array();
 	  var styles = [
		{featureType: "water",stylers: [{color: "#1C1C1C"}, {visibility: "on"}]}, 
		{featureType: "landscape",stylers: [{color: "#282828"}]}, 
		{featureType: "administrative",elementType: "geometry.stroke",stylers: [{color: "#4a4a4a"}, {weight: .4}]}, 
		{featureType: "poi",stylers: [{color: "#3f3f3f"}]}, 
		{featureType: "road",elementType: "geometry.fill",stylers: [{color: "#494949"}]},
		{featureType: "road",elementType: "geometry.stroke",stylers: [{color: "#a0a0a0"}, {weight: .1}, {visibility: "off"}]},
		{featureType: "road",elementType: "labels.text.stroke",stylers: [{color: "#282828"}, {weight: 4}]},
		{featureType: "road",elementType: "labels.text",stylers: [{color: "#eaeaea"}, {weight: .5}]}, {elementType: "labels.text",stylers: [{color: "#dbdbdb"}, {weight: .4}]},
		{featureType: "administrative",elementType: "labels.text",stylers: [{visibility: "on"}, {weight: .4}, {color: "#f9f9f9"}]},
		{featureType: "road.highway",elementType: "geometry",stylers: [{color: "#757575"}]},
		{featureType: "road",elementType: "labels.icon",stylers: [{visibility: "off"}]}, 
		{featureType: "transit",elementType: "labels.icon",stylers: [{visibility: "off"}]},
		{featureType: "administrative",elementType: "labels.icon",stylers: [{visibility: "off"}]}, 
		{featureType: "poi",elementType: "labels.icon",stylers: [{visibility: "off"}]},
		{featureType: "transit.line",elementType: "geometry",stylers: [{visibility: "on"}, {color: "#a0a0a0"}]},
		{featureType: "poi.medical",elementType: "labels",stylers: [{color: "#636363"}, {visibility: "off"}]}, 
		{featureType: "poi.place_of_worship",elementType: "labels",stylers: [{visibility: "off"}]}, 
		{featureType: "poi.attraction",elementType: "labels",stylers: [{visibility: "off"}]}, 
		{featureType: "poi.business",elementType: "labels",stylers: [{visibility: "off"}]}
	  ];
	
	  // Create a new StyledMapType object, passing it the array of styles,
	  // as well as the name to be displayed on the map type control.
	  var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
	  
	  
	  var LatLng = new google.maps.LatLng(5.404059, 100.303717);
	  var myOptions = {
		  zoom: 10,
		  maxZoom: 18,
		  streetViewControl:false,
    	  scaleControl: true,
    	  draggable: true,
		  disableDoubleClickZoom: false,
		  scrollwheel: false,
		  center: LatLng,
		  navigationControl: false,
		  navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		  mapTypeControl:false,
		  	mapTypeControlOptions:{style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		  panControl: true,
			panControlOptions:{position: google.maps.ControlPosition.LEFT_BOTTOM},
		  zoomControl: true,
			zoomControlOptions: {
				  style: google.maps.ZoomControlStyle.SMALL,
				  position: google.maps.ControlPosition.LEFT_BOTTOM
				},
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}; 
		
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		
		//Associate the styled map with the MapTypeId and set it to display.
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
		

	var position = new google.maps.LatLng(5.431840, 100.314306);
	
	var image = new google.maps.MarkerImage('http://eowon.ws/wp-content/themes/2016/images/eowon_map.png',
		new google.maps.Size(150, 65),
		new google.maps.Point(0,0),
		new google.maps.Point(20,45));
	
	//var location = new google.maps.LatLng(5.37972,100.35853);

  
      marker = new google.maps.Marker({
        position: position,
        map: map,
		icon: image
      });
  
	  
	  google.maps.event.addDomListener(window, 'load', function() {
				map.setCenter(LatLng);
			});
			
//		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, "resize", function() {
		 //var center = map.getCenter();
		 google.maps.event.trigger(map, "resize");
		 map.setCenter(LatLng); 
		});
			
			  
	  google.maps.event.addListener(marker, 'click', function(event) {
		map = marker.getMap();
    	map.panTo(this.getPosition());
    	map.setZoom(16);
		//smoothZoom(map, 12, map.getZoom());
  		});
		
//		$(window).on('resize', function() {
//    	var currCenter = map.getCenter();
//    	google.maps.event.trigger(map, 'resize');
//    	map.setCenter(currCenter);
//		});


});
    </script>
    <?php
	}

	
}
add_action( 'wp_head', 'add_google_map');