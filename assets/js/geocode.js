var geocoder = new google.maps.Geocoder();
function codeAddress() {
    var street = document.getElementById("route").value;
    var city = document.getElementById("locality").value;
    var state = document.getElementById("administrative_area_level_1").value;
    var postcode = document.getElementById("postal_code").value;
    var country = document.getElementById("country").value;
    var address = street +"," + city + "," + state +"," + postcode + "," + country;    
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            if (marker && marker.setPosition) {
                marker.setPosition(results[0].geometry.location);
            } else {
                marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            }
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

window.onload = codeAddress; // everyload search in database of google map find the address base in MYSQL address
// global variables
var marker;
var map;
function initialize() {

    var mapOptions = {
        center: new google.maps.LatLng(10.6676534, 122.9445116),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        gestureHandling: 'greedy',
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
    }
    map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    // To add the marker to the map, use the 'map' property
    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Hello World!"
    });
}
google.maps.event.addDomListener(window, 'load', initialize);