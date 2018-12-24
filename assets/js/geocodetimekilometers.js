function initMap() {

    var street = document.getElementById("route").value;
    var city = document.getElementById("locality").value;
    var state = document.getElementById("administrative_area_level_1").value;
    var postcode = document.getElementById("postal_code").value;
    var country = document.getElementById("country").value;


    var bounds = new google.maps.LatLngBounds;
    var markersArray = [];

    var origin1 = {lat: 10.6675065, lng: 122.9451055};
    var destinationA = street +"," + city + "," + state +"," + postcode + "," + country;    

    var destinationIcon = 'assets/img/pin.png';
    var originIcon = 'assets/img/ambulance.png';
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: {lat: 10.6675065, lng: 122.9451055},
        zoom: 10,
        gestureHandling: 'greedy',
        		styles: [
						{
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f5f5f5"
								}
							]
						},
						{
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#616161"
								}
							]
						},
						{
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"color": "#f5f5f5"
								}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#bdbdbd"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#eeeeee"
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#757575"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e5e5e5"
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#9e9e9e"
								}
							]
						},
						{
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#757575"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#dadada"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#616161"
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#9e9e9e"
								}
							]
						},
						{
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e5e5e5"
								}
							]
						},
						{
							"featureType": "transit.station",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#eeeeee"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#c9c9c9"
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"color": "#9e9e9e"
								}
							]
						}
					]
			

    });
    var geocoder = new google.maps.Geocoder;

    var service = new google.maps.DistanceMatrixService;
    service.getDistanceMatrix({
        origins: [origin1],
        destinations: [destinationA],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function(response, status) {
        if (status !== 'OK') {
            alert('Error was: ' + status);
        } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            deleteMarkers(markersArray);

            var showGeocodedAddressOnMap = function(asDestination) {
                var icon = asDestination ? destinationIcon : originIcon;
                return function(results, status) {
                    if (status === 'OK') {
                        map.fitBounds(bounds.extend(results[0].geometry.location));
                        markersArray.push(new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            icon: icon
                        }));
                    } else {
                        alert('Geocode was not successful due to: ' + status);
                    }
                };
            };

            for (var i = 0; i < originList.length; i++) {
                var results = response.rows[i].elements;
                geocoder.geocode({'address': originList[i]},
                                 showGeocodedAddressOnMap(false));
                for (var j = 0; j < results.length; j++) {
                    geocoder.geocode({'address': destinationList[j]},
                                     showGeocodedAddressOnMap(true));
                    outputDiv.innerHTML += ' <i class="fa fa-info-circle"></i> Estimated Distance and Time : Luzuriaga St., Old City Hall' + ' to ' + destinationList[j] +
                        ': <b>' + results[j].distance.text + ' in ' +
                        results[j].duration.text + ' </b><br>';
                }
            }
        }
    });
}

function deleteMarkers(markersArray) {
    for (var i = 0; i < markersArray.length; i++) {
        markersArray[i].setMap(null);
    }
    markersArray = [];
}