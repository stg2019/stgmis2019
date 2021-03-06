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
        zoom: 13,
        streetViewControl: false,
        gestureHandling: 'greedy',
        mapTypeId: google.maps.MapTypeId.HYBRID,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.TOP_CENTER
        },
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_TOP
        }

    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('EMT Rescue Team Current Location');
            infoWindow.open(map);
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }


    var geocoder = new google.maps.Geocoder;

    var trafficLayer = new google.maps.TrafficLayer();
    trafficLayer.setMap(map);

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
                    outputDiv.innerHTML +=results[j].distance.text + 's. in ' +
                        results[j].duration.text;
                    //  outputDiv.innerHTML += ' <i class="fa fa-info-circle"></i> Estimated Distance and Time : Luzuriaga St., Old City Hall' + ' to ' + destinationList[j] +
                    //      ': <b>' + results[j].distance.text + ' in ' +
                    //      results[j].duration.text + ' </b><br>';
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