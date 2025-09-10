$(function() {
	
	// GOOGLE MAP
	$(".contact-page-map").height(400);
	$(".footer-map").height(370);
	function initialize($) {
		var mapOptions = {	
			zoom: 8,
			center: new google.maps.LatLng(17.421306, 78.457553),
			disableDefaultUI: true
		};
		var map = new google.maps.Map(document.querySelector('.map, .contact-page-map, .footer-map'), mapOptions);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	
});