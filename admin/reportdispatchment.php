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

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/style.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/css/invoice-print.min.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
        <script src="../assets/plugins/pace/pace.min.js"></script>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="../assets/js/jquery.canvasjs.min.js"></script>
        <?php require '../assets/js/loadchart/reports/dispatchment.php'?>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content content-full-width">
                <div class="p-20">
                    <div class="row">
                        <?php
    require 'require/dbconnection.php';
        $fetch = $conn->query("SELECT * FROM `dispatch`") or die(mysqli_error());
        $data_points = array();
        while($result = $fetch->fetch_array()){
            $year = intval($result['year']);
            $dispatched_for = $result['dispatched_for'];
            $point = array('year' => $year, 'dispatched_for' => $dispatched_for);
            array_push($data_points, $point);
        }
        $json_string = json_encode($data_points);
        $file = 'filterdispatch.json';
        file_put_contents($file, $json_string);
                        ?> 
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" id="select-report" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Report</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="yearly">Yearly</option>
                                </select>

                            </div>
                            <p><b>Graphical</b></p>
                        </div>
                        <div class="col-md-6"></div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger monthly quarterly yearly reporttype" onclick="openTabular()">Filter Reports</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-warning monthly quarterly yearly reporttype" onclick="openHeatMap()">Heat Map</button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="email-content">
                                <div class="panel-body">
                                    <span id="shit">Choose from the given Graphical Report above.</span>
                                    <div id="chartContainer1" class="monthly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer2" class="quarterly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer3" class="yearly reporttype" style="width: 100%; height: 300px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 monthly quarterly yearly reporttype">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Top Emergency Cases</h4>
                                </div>

                                <div class="panel-body">
                                    <div class="height-sm" data-scrollbar="true">
                                        <ul class="media-list media-list-with-divider media-messaging">
                                            <?php
                                            $res2 = $conn->query("SELECT * FROM `dispatch` where `year` = '$year' GROUP BY dispatched_for limit 7") or die(mysqli_error());
                                            $data_points2 = array();
                                            while($result2 = $res2->fetch_array()){
                                                $R2 = $result2['dispatched_for'];
                                                $q2 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `dispatched_for` = '$R2' && `year` = '$year' group by dispatched_for") or die(mysqli_error());
                                                $f2 = $q2->fetch_array();
                                                $FR2 = intval($f2['total']);
                                                $point2 = array('label' => $R2, 'y' => $FR2);
                                                array_push($data_points2, $point2);

                                            ?>
                                            <li class="media media-sm">
                                                <div class="media-body">
                                                    <h5 class="media-heading"><?php echo $f2['dispatched_for']?></h5>
                                                    <p>Total Count : <?php echo $f2['total']?></p>
                                                </div>
                                            </li>
                                            <?php
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="email-content monthly quarterly yearly reporttype">
                                <div class="panel-body">
                                    <div id="chartContainer4" style="width: 100%; height: 285px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 monthly quarterly yearly reporttype">
                            <div class="panel panel-primary" data-sortable-id="index-5">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Top Dispatch Location</h4>
                                </div>

                                <div class="panel-body">
                                    <div class="height-sm" data-scrollbar="true">
                                        <ul class="media-list media-list-with-divider media-messaging">
                                            <?php
                                            $res4 = $conn->query("SELECT * FROM `dispatch` where `year` = '$year' GROUP BY call_location limit 7") or die(mysqli_error());
                                            $data_points4 = array();
                                            while($result4 = $res4->fetch_array()){
                                                $R4 = $result4['call_location'];
                                                $q4 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `call_location` = '$R4' && `year` = '$year' group by call_location") or die(mysqli_error());
                                                $f4 = $q4->fetch_array();
                                                $FR4 = intval($f4['total']);
                                                $point4 = array('label' => $R4, 'y' => $FR4);
                                                array_push($data_points4, $point4);
                                            ?>
                                            <li class="media media-sm">
                                                <div class="media-body">
                                                    <h5 class="media-heading"><?php echo $f4['call_location']?></h5>
                                                    <p>Total Dispatch : <?php echo $f4['total']?></p>
                                                </div>
                                            </li>
                                            <?php
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="email-content monthly quarterly yearly reporttype">
                                <div class="panel-body">
                                    <div id="chartContainer5" style="width: 100%; height: 309px"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <?php require '../require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        <script src="../assets/js/angolia.js"></script>
        <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../assets/plugins/masked-input/masked-input.min.js"></script>
        <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="../assets/plugins/password-indicator/js/password-indicator.js"></script>
        <script src="../assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
        <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
        <script src="../assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
        <script src="../assets/plugins/bootstrap-daterangepicker/moment.js"></script>
        <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="../assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="../assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
        <script src="../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
        <script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/js/table-manage-default.demo.min.js"></script>

        <script src="../assets/js/form-plugins.demo.min.js"></script>
        <script src="../assets/js/apps.min.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
                FormPlugins.init();
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
        <script type="text/javascript">
            $(document).ready(function(){
                $("select").change(function(){
                    $(this).find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        if(optionValue){
                            $(".reporttype").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else{
                            $(".reporttype").hide();
                        }
                    });
                }).change();
            });
        </script>
        <script>
            function openTabular() {
                window.open("exceptionreports.php");
            }

            function openHeatMap() {
                window.open("heatmap.php");
            }
        </script>
        <script>
            $(function () { /* DOM ready */
                $("#select-report").change(function () {
                    document.getElementById("shit").style.display = "none";
                });
            });
        </script>
    </body>
</html>
