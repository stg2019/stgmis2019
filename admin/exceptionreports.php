<!DOCTYPE html>
<?php
require '../require/logincheck.php';
?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>DRRMO | Bacolod City</title>
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/style.min.css" rel="stylesheet" />
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="../assets/css/custom.css" rel="stylesheet"/>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="../assets/js/jquery.canvasjs.min.js"></script>
        <script src="../assets/plugins/pace/pace.min.js"></script>
        <?php require '../assets/js/loadchart/exception/monthlydispatchment.php'?>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar">

            <div id="content" class="content">
                <div class="row">
                    <?php require 'require/selectyear.php'?>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="email-content">
                            <div class="panel-body">
                                <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                                <hr>
                                <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
                                    <thead>
                                        <tr class="warning">
                                            <th>Month</th>
                                            <th>Total Count</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
    require '../require/dbconnection.php';
        $query1 = $conn->query("SELECT count(*) as permonth FROM `dispatch`") or die(mysqli_error());
        $fetch1 = $query1->fetch_array();
        $query = $conn->query("SELECT month, count(*) as count FROM `dispatch` group by month order by count DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
            $permonth = ($fetch['count']/$fetch1['permonth']) * 100;
                                        ?>                                      
                                        <tr>
                                            <td><?php echo $fetch['month']?></td>
                                            <td><?php echo $fetch['count']?></td>
                                            <td><?php echo number_format($permonth)?>%</td>
                                        </tr>
                                        <?php
        }
        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                                <table id="emttable" class="table table-bordered table-condensed nowrap" width="100%">
                                    <thead >
                                        <tr  class="warning">
                                            <th >Dispatched For</th>
                                            <th>Total Count</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require '../require/dbconnection.php';
                                        $query1 = $conn->query("SELECT count(*) as perdispatch FROM `dispatch`") or die(mysqli_error());
                                        $fetch1 = $query1->fetch_array();
                                        $query = $conn->query("SELECT dispatched_for, count(*) as count FROM `dispatch` group by dispatched_for order by count DESC") or die(mysqli_error());
                                        while($fetch = $query->fetch_array()){
                                            $perdispatch = ($fetch['count']/$fetch1['perdispatch']) * 100;
                                        ?>                                      
                                        <tr>
                                            <td><?php echo $fetch['dispatched_for']?></td>
                                            <td><?php echo $fetch['count']?></td>
                                             <td><?php echo number_format($perdispatch)?>%</td>
                                        </tr>
                                        <?php
                                        }
                                        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php require 'sidebarexception.php'?>
                </div>
                <br>

            </div>
            <?php require '../require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
        <script src="../assets/js/dashboard.min.js"></script>
        <script src="../assets/js/apps.min.js"></script>
        <script src="../assets/js/timedate.js"></script>

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
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'exceptionreports.php?year='+year;
                });
            });
        </script>

    </body>
</html>
