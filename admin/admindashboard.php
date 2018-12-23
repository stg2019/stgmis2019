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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/style.min.css" rel="stylesheet" />
        <link href="../assets/css/custom.css" rel="stylesheet"/>
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <script src="../assets/plugins/pace/pace.min.js"></script>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="../assets/js/jquery.canvasjs.min.js"></script>
        <?php require '../assets/js/loadchart/dashboard/dashboardgraphs.php'?>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"></script>
        <script src="../assets/js/geocodetimekilometers.js"></script>
        <style>
            #map-canvas {
                height: 500px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <h1 class="page-header">Dashboard</h1>
                <!--
<div class="row">
<div class="col-md-12">
<div class="col-md-3">
<?php 
    $query = $conn->query("SELECT count(*) as total FROM `users`") or die(mysqli_error());
        $fetch = $query->fetch_array();
?>
<div class="widget widget-stats bg-gradient-primary" onclick="location.href='emtaccount.php';"style="cursor:pointer;">
<div class="stats-icon"><i class="fa fa-group"></i></div>
<div class="stats-info">
<h4>Total Users</h4>
<p><?php echo $fetch['total']?></p>	
</div>
</div>
</div>
<div class="col-md-3">
<?php 
    $query = $conn->query("SELECT count(*) as total FROM `patient`") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<div class="widget widget-stats bg-gradient-pink" onclick="location.href='patientrecord.php';"style="cursor:pointer;">
<div class="stats-icon"><i class="fa fa-male"></i></div>
<div class="stats-info">
<h4>Patients Registered this Year</h4>
<p><?php echo $fetch['total']?></p>	
</div>
</div>
</div>
<div class="col-md-3">
<?php 
    $query = $conn->query("SELECT count(*) as total FROM `dispatch`") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<div class="widget widget-stats bg-gradient-light-blue" onclick="location.href='dispatchmentrecord.php';"style="cursor:pointer;">
<div class="stats-icon"><i class="fa fa-ambulance"></i></div>
<div class="stats-info">
<h4>Dispatchment this Year</h4>
<p><?php echo $fetch['total']?></p>	
</div>
</div>
</div>
<div class="col-md-3">
<?php 
    $year = date('Y');
$query = $conn->query("SELECT count(*) as total FROM `request_transport` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<div class="widget widget-stats bg-gradient-primary" onclick="location.href='requesttransportrecord.php';"style="cursor:pointer;">
<div class="stats-icon"><i class="fa fa-map-marker"></i></div>
<div class="stats-info">
<h4>Request for Transport this Year</h4>
<p><?php echo $fetch['total']?></p>	
</div>
</div>
</div>
</div>
</div>
-->
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
                                <a href="dispatchmentrecord.php"><span class="fa fa-info-circle"></span> This Year | View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-orange">
                            <?php 
    $year = date('Y');
                                    $query = $conn->query("SELECT count(*) as total FROM `request_transport` where `year` = '$year'") or die(mysqli_error());
                                    $fetch = $query->fetch_array();
                            ?>
                            <div class="stats-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="stats-info">
                                <h4>REQUEST TRANSPORT</h4>
                                <p><?php echo $fetch['total']?></p>	
                            </div>
                            <div class="stats-link">
                                <a href="requesttransportrecord.php"><span class="fa fa-info-circle"></span> This Year | View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
    date_default_timezone_set('Asia/Manila');
                                    $date_created=date("F j, Y g:i a");
                                    $month = date("M");
                                    $year = date("Y");
                    ?>
                    <div class="col-md-12">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">DISPATCHMENT FOR THE YEAR <?php echo date('Y')?></h4>
                            </div>

                            <div class="panel-body">
                                <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <?php
    $query = $conn->query("SELECT * FROM `dispatch` order by `dispatch_id` DESC limit 1") or die(mysqli_error());
                                    $fetch = $query->fetch_array();
                                ?>
                                <h4 class="panel-title">RECENT DISPATCHMENT - <?php echo $fetch['call_location']?></h4>
                            </div>
                            <div class="panel-body">

                                <div id="map-canvas"></div>
                                <br>
                                <div class="alert alert-warning" id="output"></div>
                                <input type="hidden" id="route" placeholder="Street" value="<?php echo $fetch['call_location']?>"></input>
                            <input type="hidden" id="locality" placeholder="City" value="Bacolod City"></input>
                        <input type="hidden" id="administrative_area_level_1" placeholder="State" value="Negros Occidental"></input>
                    <input type="hidden" id="postal_code" placeholder="Postal Code" value="6100"></input>
                <input type="hidden" id="country" placeholder="Country" value="Philippines"></input>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h4 class="panel-title">Recent Refusal for Treatment</h4>
            </div>

            <div class="panel-body">
                <div class="height-sm" data-scrollbar="true">
                    <ul class="media-list media-list-with-divider media-messaging">
                        <?php
    $query = $conn->query("SELECT * FROM `refusal_treatment` order by refusal_treatment_id DESC limit 10") or die(mysqli_error());
                                    while($fetch = $query->fetch_array()){
                        ?>
                        <li class="media media-sm">
                            <div class="media-body">
                                <h5 class="media-heading"><?php echo $fetch['signed']?></h5>
                                <p>Date of Incident : <?php echo $fetch['date_incident']?></p>
                                <p>
                                    Witnesses : <?php echo $fetch['witness1']. ' & ' .$fetch['witness2']?>
                                </p>
                            </div>
                        </li>
                        <?php
                                    }

                        ?>
                    </ul>
                </div>
            </div>
            <div class="list-group">
                <a href="refusaltreatmentrecord.php" class="list-group-item list-group-item-warning text-ellipsis">
                    See All
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h4 class="panel-title">RECENT REQUEST FOR TRANSPORT</h4>
            </div>

            <div class="panel-body">
                <div class="height-sm" data-scrollbar="true">
                    <ul class="media-list media-list-with-divider media-messaging">
                        <?php
                        $query = $conn->query("SELECT * FROM `request_transport` order by request_transport_id DESC limit 10") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <li class="media media-sm">
                            <div class="media-body">
                                <h5 class="media-heading"><?php echo $fetch['address']?></h5>
                                <p>Date and Time : <?php echo $fetch['date_time']?></p>
                                <p>
                                    Requesting Party : <?php echo $fetch['requesting_party']?>
                                </p>
                            </div>
                        </li>
                        <?php
                        }

                        ?>
                    </ul>
                </div>
            </div>
            <div class="list-group">
                <a href="requesttransportrecord.php" class="list-group-item list-group-item-warning text-ellipsis">
                    See All
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h4 class="panel-title">USER'S ACTIVITY LOG</h4>
            </div>

            <div class="panel-body">
                <div class="height-sm" data-scrollbar="true">
                    <ul class="media-list media-list-with-divider media-messaging">
                        <?php
                        $query = $conn->query("SELECT * FROM `users_activity_log`, `users` where users.user_id = users_activity_log.user_id ORDER BY `log_id` DESC limit 10") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                        ?>
                        <li class="media media-sm">
                            <div class="media-body">
                                <h5 class="media-heading"><?php echo $fetch['complete_name']?></h5>
                                <p>Activity : <?php echo $fetch['action']?></p>
                                <p>
                                    Date and Time : <?php echo $fetch['date_time']?>
                                </p>
                            </div>
                        </li>
                        <?php
                        }

                        ?>
                    </ul>
                </div>
            </div>
            <div class="list-group">
                <a href="usersactivity.php" class="list-group-item list-group-item-warning text-ellipsis">
                    See All
                </a>
            </div>
        </div>

    </div>
</div>




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
