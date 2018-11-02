<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

    var geocoder = new google.maps.Geocoder();
    //var address = document.getElementById("call_location").value;
    var address = "casiana, eroreco, bacolod city";

    geocoder.geocode( { 'address': address}, function(results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            document.getElementById("lat").innerHTML = latitude;
        } 
    }); 
</script>