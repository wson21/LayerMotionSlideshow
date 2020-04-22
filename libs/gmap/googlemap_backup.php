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
	if( is_page("contacts") ) {
	?>
<script>
jQuery(document).ready(function($) {

   var markers = new Array();
 	  var styles = [
		{featureType:"water",stylers:[{color:"#d5d5d5"},{visibility:"on"}]},
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
	  
	  var LatLng = new google.maps.LatLng(5.515012,100.549927);
	  var myOptions = {
		  zoom: 10,
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

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
	
	var locations = [
		['Main Office (Penang)', 'Penthouse New Bob Centre,<br/>11 Jalan Gottlieb,<br/>10350 Penang. <br/>T : 604 - 229 1111 F : 604 - 229 7777 ', '', 5.431789,100.3015958, 1],
		['Branches - Butterworth', '3-3A-B, NB Plaza, <br/>3000 Jalan Baru, <br/>13700 Prai, <br/>Seberang Prai <br/>T : 604 - 3999 111  F : 604 - 3999 777', '', 5.429571,100.38386, 2],
		['Branches - Sungai Petani', '98 & 99, 1st Floor, <br/>Jalan Legenda 1,<br/> Legenda Height 08000 <br/> Sungai Petani, Kedah <br/>T : 604 - 421 1111 F : 604 - 427 1111 ', '', 5.6567728,100.4997443, 3],
    ];


    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][3], locations[i][4]),
        map: map,
        //icon: 'images/map_'+locations[i][2]+'_image.png'
		
      });
        
      markers.push(marker);
        
      google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]+"<br /><br />"+locations[i][1]);
          infowindow.open(map, marker);
        }
      })(marker, i));
	  
	  
	  google.maps.event.addListener(marker, 'click', function(event) {
		map = marker.getMap();
    	map.panTo(this.getPosition());
    	map.setZoom(16);
		//smoothZoom(map, 12, map.getZoom());
  	});
	
// the smooth zoom function
//function smoothZoom (map, max, cnt) {
//    if (cnt >= max) {
//            return;
//        }
//    else {
//        z = google.maps.event.addListener(map, 'zoom_changed', function(event){
//            google.maps.event.removeListener(z);
//            smoothZoom(map, max, cnt + 1);
//        });
//        setTimeout(function(){map.setZoom(cnt)}, 80); // 80ms is what I found to work well on my system -- it might not work well on all systems
//    }
//}
  
}

var map2 = new google.maps.Map(document.getElementById("map_canvas2"), myOptions2);
	
//    // == shows all markers of a particular category, and ensures the checkbox is checked ==
//      function show(category) {
//        for (var i=0; i<locations.length; i++) {
//          if (locations[i][2] == category) {
//            markers[i].setVisible(true);
//          }
//        }
//      }
//
//      // == hides all markers of a particular category, and ensures the checkbox is cleared ==
//      function hide(category) {
//        for (var i=0; i<locations.length; i++) {
//          if (locations[i][2] == category) {
//            markers[i].setVisible(false);
//          }
//        }
//      }
//      
//      // == show or hide the categories initially ==
//       show("current");
//	   show("future");
//	   hide("previous");
//
//
//        $(".slideOne").click(function(){
//            var cat = $(this).attr("value");
//        
//            // If checked
//            if ($(this).is(":checked"))
//            {
//                show(cat);
//            }
//            else
//            {
//                hide(cat);
//            }
//          });
//		  
//			google.maps.event.addDomListener(window, 'resize', function() {
//				map.setCenter(LatLng);
//			});  
//		  

});
    </script>
    <?php
	}

	
}
add_action( 'wp_head', 'add_google_map');