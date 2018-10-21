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
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <script src="../assets/plugins/pace/pace.min.js"></script>
        <link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"></script>
        <script src="../assets/js/geocode.js"></script>
        <style>
            #map-canvas {
                height: 400px;
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
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Master File</a></li>
                    <li><a href="#">Dispatchment Record</a></li>
                    <li class="active">Dispatchment Overview</li>
                </ol>
                <h1 class="page-header">Dispatchment Overview</h1>
                <div id="alert" class="alert alert-info" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">Overview</h4>
                                <?php
    $query = $conn->query("SELECT * FROM `dispatch` WHERE `dispatch_id` = '$_GET[dispatch_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
                                ?>
                            </div>
                            <div class="panel-body">
                                <div class="profile-container">
                                    <!-- begin profile-section -->
                                    <div class="profile-section">
                                        <!-- begin profile-left -->
                                        <div class="profile-left">
                                            <div id="map-canvas"></div>
                                            <input type="hidden" id="route" placeholder="Street" value="<?php echo $fetch['call_location']?>"></input>
                                        <input type="hidden" id="locality" placeholder="City" value="Bacolod City"></input>
                                    <input type="hidden" id="administrative_area_level_1" placeholder="State" value="Negros Occidental"></input>
                                <input type="hidden" id="postal_code" placeholder="Postal Code" value="6100"></input>
                            <input type="hidden" id="country" placeholder="Country" value="Philippines"></input>
                        <div class="profile-highlight">
                            <h4>Call Location</h4>
                            <label><?php echo $fetch['call_location']?></label>
                        </div>
                        <!-- end profile-highlight -->
                    </div>
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr >
                                        <td><strong>Service Number</strong></td>
                                        <td><?php echo $fetch['service_no']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Date of Call</strong></td>
                                        <td><?php echo $fetch['date_time_call']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Ambulance</strong></td>
                                        <td><?php echo $fetch['ambulance']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Dispatched for</strong></td>
                                        <td><?php echo $fetch['dispatched_for']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Driver</strong></td>
                                        <td><?php echo $fetch['driver']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Enroute</strong></td>
                                        <td><?php echo $fetch['enroute']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>EMS</strong></td>
                                        <td><?php echo $fetch['ems']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>MOI/NOI</strong></td>
                                        <td><?php echo $fetch['moi_noi']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Patients on scene</strong></td>
                                        <td><?php echo $fetch['patients_on_scene']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>On Board TL</strong></td>
                                        <td><?php echo $fetch['on_board_tl']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Care in Progress</strong></td>
                                        <td><?php echo $fetch['care_in_progress']?></td>
                                    </tr>
                                    <tr >
                                        <td><strong>Mass Casualty</strong></td>
                                        <td><?php echo $fetch['mass_casualty']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end profile-right -->
                </div>
                <!-- end profile-section -->
            </div>
        </div>
        </div>
    </div>
</div>

</div>

<?php require '../require/sidepanel.php'?>
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
<script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/js/table-manage-default.demo.min.js"></script>
<script src="../assets/js/apps.min.js"></script>
<script>
    $(document).ready(function() {
        App.init();
        TableManageDefault.init();
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
