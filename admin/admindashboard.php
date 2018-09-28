<!DOCTYPE html>
<?php
require '../require/logincheck.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
        <title>DRRMO | Bacolod City</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/style.min.css" rel="stylesheet" />
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <script src="../assets/plugins/pace/pace.min.js"></script>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="../assets/js/jquery.canvasjs.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"></script>
        <?php require '../assets/js/loadchart/dispatchment.php'?>
        <script>
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

            window.onload = codeAddress; // everyload dive in database of google map find the address
            // global variables
            var marker;
            var map;
            function initialize() {

                var mapOptions = {
                    center: new google.maps.LatLng(10.6676534, 122.9445116),
                    zoom: 14,
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
        </script>
        <style>
            #map-canvas {
                height: 400px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <h1 class="page-header">Dashboard</h1>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-green">
                            <?php 
    $query = $conn->query("SELECT count(*) as total FROM `users`") or die(mysqli_error());
        $fetch = $query->fetch_array();
                            ?>
                            <div class="stats-icon"><i class="fa fa-group"></i></div>
                            <div class="stats-info">
                                <h4>USERS REGISTERED</h4>
                                <p><?php echo $fetch['total']?></p>	
                            </div>
                            <div class="stats-link">
                                <a href="patientrecord.php">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-red">
                            <?php 
    $query = $conn->query("SELECT count(*) as total FROM `patient`") or die(mysqli_error());
                                    $fetch = $query->fetch_array();
                            ?>
                            <div class="stats-icon"><i class="fa fa-male"></i></div>
                            <div class="stats-info">
                                <h4>PATIENTS REGISTERED</h4>
                                <p><?php echo $fetch['total']?></p>	
                            </div>
                            <div class="stats-link">
                                <a href="patientrecord.php">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-blue">
                            <?php 
    $query = $conn->query("SELECT count(*) as total FROM `dispatch`") or die(mysqli_error());
                                    $fetch = $query->fetch_array();
                            ?>
                            <div class="stats-icon"><i class="fa fa-ambulance"></i></div>
                            <div class="stats-info">
                                <h4>TOTAL DISPATCHMENT</h4>
                                <p><?php echo $fetch['total']?></p>	
                            </div>
                            <div class="stats-link">
                                <a href="dispatchmentrecord.php">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-orange">
                            <div class="stats-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="stats-info">
                                <h4>REQUEST TRANSPORT</h4>
                                <p>3,291,922</p>	
                            </div>
                            <div class="stats-link">
                                <a href="patientrecord.php"><span class="fa fa-info-circle"></span> This Month | View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-inverse" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">DISPATCHMENT FOR THE YEAR <?php echo date('Y')?></h4>
                            </div>

                            <div class="panel-body">
                                <div id="chartContainer1" style="width: 100%; height: 400px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-inverse" >
                            <div class="panel-heading ">
                                <?php
    $query = $conn->query("SELECT * FROM `dispatch` order by `dispatch_id` DESC limit 1") or die(mysqli_error());
                                    $fetch = $query->fetch_array();
                                ?>
                                <h4 class="panel-title">LATEST DISPATCHMENT - <?php echo $fetch['date_time_call']?></h4>
                            </div>
                            <div class="panel-body">

                                <div id="map-canvas"></div>
                                <input type="hidden" id="route" placeholder="Street" value="<?php echo $fetch['call_location']?>"></input>
                            <input type="hidden" id="locality" placeholder="City" value="Bacolod City"></input>
                        <input type="hidden" id="administrative_area_level_1" placeholder="State" value="Negros Occidental"></input>
                    <input type="hidden" id="postal_code" placeholder="Postal Code" value="6100"></input>
                <input type="hidden" id="country" placeholder="Country" value="Philippines"></input>
        </div>
        </div>
    </div>
</div>
<!--    <div class="row">
<div class="col-md-3">
<div class="panel panel-primary" >
<div class="panel-heading ">
<h4 class="panel-title">DISPATCHMENT FOR THE YEAR </h4>
</div>

<div class="panel-body">
<div id="chartContainer2" style="width: 100%; height: 400px"></div>
</div>
</div>
</div>
</div>
-->

</div>
<?php require '../require/sidepanel.php'?>
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
<script type="text/javascript" src="../functions/shownotifications.js"></script>
<script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="../assets/plugins/flot/jquery.flot.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="../assets/js/dashboard.min.js"></script>
<script src="../assets/js/apps.min.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
