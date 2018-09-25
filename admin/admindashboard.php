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
        <?php require '../assets/js/loadchart/dispatchment.php'?>
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
                        <div class="widget widget-stats bg-grey-darker">
                            <div class="stats-icon"><i class="fa fa-group"></i></div>
                            <div class="stats-info">
                                <h4>USERS REGISTERED</h4>
                                <p>3,291,922</p>	
                            </div>
                            <div class="stats-link">
                                <a href="patientrecord.php">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-red">
                            <div class="stats-icon"><i class="fa fa-male"></i></div>
                            <div class="stats-info">
                                <h4>PATIENTS REGISTERED</h4>
                                <p>3,291,922</p>	
                            </div>
                            <div class="stats-link">
                                <a href="patientrecord.php">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget widget-stats bg-blue">
                            <div class="stats-icon"><i class="fa fa-ambulance"></i></div>
                            <div class="stats-info">
                                <h4>TOTAL DISPATCHMENT</h4>
                                <p>3,291,922</p>	
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
                    <div class="col-md-12">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">DISPATCHMENT FOR THE YEAR <?php echo date('Y')?></h4>
                            </div>

                            <div class="panel-body">
                                <div id="chartContainer1" style="width: 100%; height: 400px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">DISPATCHMENT FOR THE YEAR <?php echo date('Y')?></h4>
                            </div>

                            <div class="panel-body">
                                <div id="chartContainer2" style="width: 100%; height: 400px"></div>
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
