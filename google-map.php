<?php

/*
Template Name: Map
Description: lvh
Author: lvh
Version: 1.0
*/

?>


			
<div id="map" ></div>
			
			
	<script>
	
	  var map;
	  
	  function initMap() {
		  
			map = new google.maps.Map(document.getElementById('map'), {
			  zoom:17,
			  center:new google.maps.LatLng(52.9517231,-1.1470569000000523),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			});
			
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.9517231,-1.1470569000000523)});
			
			//remove marker
			marker.setMap(null);
			
			//show address on hover
			infowindow = new google.maps.InfoWindow({content:'<strong>Cocotang</strong><br>45 Bridlesmith Gate, Nottingham, United Kingdom<br>'});
			
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
		
			//center marker on re-size
			google.maps.event.addDomListener(window, "resize", function() {
				var center = map.getCenter();
				google.maps.event.trigger(map, "resize");
				map.setCenter(center); 
			});
			
			google.maps.event.addDomListener(window, 'load', initMap);

	  }
					
				
	</script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQPVUr3e0_L2aPgwU4E-_tBHzDS6nA6jc&callback=initMap" async defer></script>




		

