<script>
jQuery(document).ready(function($) {
		//var myLatLng = new google.maps.LatLng(5.3335617, 100.2940852);
		var myLatLng = new google.maps.LatLng(<?php echo get_post_meta( get_the_ID(), 'google_map_val', true )?>);
		var myOptions = {
		  zoom: 15,
		  maxZoom: 18,
		  scrollwheel: false,
		  center: myLatLng,
		  mapTypeControl:false,
		  mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		  panControl: true,
		  panControlOptions: {position: google.maps.ControlPosition.RIGHT_TOP},
		  zoomControl: true,
		  	zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.RIGHT_TOP
			},
		  navigationControl: false,
		  navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		  streetViewControl:false,
		  scrollwheel: true,
    	  navigationControl: false,
    	  mapTypeControl: false,
    	  scaleControl: false,
    	  //draggable: false,
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']

		};
		
		var map = new google.maps.Map(document.getElementById("map_project"), myOptions);
		
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
		
		var image = new google.maps.MarkerImage('<?php bloginfo('template_directory'); ?>/images/wearehere.png',
		
		  new google.maps.Size(250,130),
		  new google.maps.Point(0,0),
		  new google.maps.Point(20,45));
		  
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			//icon: image,
			title:'click to zoom',
		});
	
		google.maps.event.addListener(marker, 'click', function() {
			map.setZoom(18);
			map.setCenter(marker.getPosition());
		});
		
		//google.maps.event.trigger(map, 'resize')
		  
		//google.maps.event.addDomListener(window, 'resize', function() {
		//	map.setCenter(myLatLng);
		//});
});
</script>