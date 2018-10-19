<!DOCTYPE html>
<?php
require 'require/logincheck.php';
?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>DRRMO | Bacolod City</title>
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/ndrrmo/logo.png">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet" />
        <link href="assets/css/style.min.css" rel="stylesheet" />
        <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="assets/css/custom.css" rel="stylesheet"/>
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="assets/js/jquery.canvasjs.min.js"></script>
        <script src="assets/plugins/pace/pace.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"></script>
        <script src="assets/js/geocode.js"></script>
        <?php require 'assets/js/loadchart/dashboard/emtdashboardgraphs.php'?>
        <style>
            #map-canvas {
                height: 300px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>
            <div id="content" class="content">
                <h1 class="page-header">DASHBOARD</h1>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-light-blue" onclick="location.href='masterrequesttransport.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/phone.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">MASTER FILE</div>
                                <div class="stats-number">CALL LOGS RECORD</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-light-blue" onclick="location.href='masterdispatchment.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/dispatchment.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">MASTER FILE</div>
                                <div class="stats-number">DISPATCHMENT</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-light-blue" onclick="location.href='masterpatient.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/folder.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">MASTER FILE</div>
                                <div class="stats-number">PATIENT RECORD</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-light-blue" onclick="location.href='masterrequesttransport.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/bed.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">MASTER FILE</div>
                                <div class="stats-number">REQUEST TRANSPORT</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-danger" onclick="location.href='dispatchment.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/hospital.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">TRANSACTIONS</div>
                                <div class="stats-number">NEW DISPATCHMENT</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-danger" onclick="location.href='assessmentlist.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/cardiogram.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">TRANSACTIONS</div>
                                <div class="stats-number">PATIENT ASSESSMENT</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-danger" onclick="location.href='inventory.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/flask.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">TRANSACTIONS</div>
                                <div class="stats-number">CURRENT INVENTORY</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-gradient-danger" onclick="location.href='refusaltreatment.php';"style="cursor:pointer;">
                            <img src="assets/img/ndrrmo/refusal.svg" class="card-img-absolute" alt="circle-image"/>
                            <div class="stats-content">
                                <div class="stats-title">TRANSACTIONS</div>
                                <div class="stats-number">REFUSAL TREATMENT</div>
                                <div class="stats-progress progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                                <div class="stats-desc">View Record</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="widget-chart with-sidebar bg-white">
                            <div class="widget-chart-content">
                                <h4 class="chart-title text-success m-r-5">
                                    <?php
    $query = $conn->query("SELECT * FROM `dispatch` order by `dispatch_id` DESC limit 1") or die(mysqli_error());
        $fetch = $query->fetch_array();
                                    ?>
                                </h4>

                                <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                            </div>
                            <div class="widget-chart-sidebar bg-gradient-success">
                                <div class="chart-number">
                                    Total - <?php echo $total['total']?>
                                </div>
                                <div id="chartContainer2" style="width: 100%; height: 300px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">RECENT DISPATCHMENT</h4>
                            </div>
                            <?php
    $query = $conn->query("SELECT * FROM `dispatch` order by dispatch_id DESC limit 6") or die(mysqli_error());
                                    while($fetch = $query->fetch_array()){
                            ?>

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-primary text-ellipsis">
                                    <span class="badge badge-primary"><?php echo $fetch['date_created']?></span>
                                    <?php echo $fetch['dispatched_for']?>
                                </a>
                            </div>
                            <?php
                                    }

                            ?>
                            <div class="list-group">
                                <a href="masterdispatchment.php" class="list-group-item list-group-item-info text-ellipsis">
                                    <small> See All </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
        <script src="assets/js/dashboard.min.js"></script>
        <script src="assets/js/apps.min.js"></script>

        <script>
            $(document).ready(function() {
                App.init();
                Dashboard.init();
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
