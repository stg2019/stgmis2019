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
        <link href="../assets/css/custom.css" rel="stylesheet"/>
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
        <?php require '../assets/js/loadchart/exception/monthlydispatchment.php'?>
        <?php require '../assets/js/loadchart/exception/quarterdispatchment.php'?>
        <?php require '../assets/js/loadchart/exception/yearlydispatchment.php'?>
        <?php require '../assets/js/loadchart/exception/emergency.php'?>
        <?php require '../assets/js/loadchart/exception/ambulance.php'?>
        <?php require '../assets/js/loadchart/exception/driver.php'?>
        <style type="text/css">
            @media print {
                .print{
                    display: none !important;
                }
            }
        </style>

    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>
            <div id="content" class="content content-full-width">
                <div class="p-20">
                    <div class="row print">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                Select Year:
                                <select  class="form-control selectpicker input-sm" data-style="btn-primary" id="pyear">
                                    <option value="<?php 
    if(isset($_GET['year'])){
        $value=$_GET['year']; 
        echo $value;
    }
        else{
            echo date('Y');
        }
                                                   ?>">
                                        <?php 
                                        if(isset($_GET['year'])){
                                            $value=$_GET['year']; 
                                            echo $value;
                                        }
                                        else{
                                            echo date('Y');
                                        }
                                        ?></option>

                                    <?php
                                    require 'require/dbconnection.php';
                                    $query = $conn->query("SELECT * FROM `dispatch` group by year") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['year'];?>"><?php echo $fetch['year']?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                Select Report Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" id="select-report" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Report</option>
                                    <option value="colmonth">Monthly Dispatchment</option>
                                    <option value="colquarter">Quarterly Dispatchment</option>
                                    <option value="colyearly">Yearly Dispatchment</option>
                                    <option value="colemergency">Emergency Cases</option>
                                    <option value="pieambulance">Most Used Ambulance</option>
                                    <option value="piedriver">Drivers</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <!-- Chart Type Monthly -->
                            <div class="form-group colmonth barmonth linemonth piemonth doughnutmonth reporttype">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary"name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                    <option value="colmonth">Column Chart</option>
                                    <option value="barmonth">Bar Chart</option>
                                    <option value="linemonth">Line Chart</option>
                                    <option value="piemonth">Pie Chart</option>
                                    <option value="doughnutmonth">Doughnut Chart</option>
                                </select>
                            </div>
                            <!-- Chart Type Quarter -->
                            <div class="form-group colquarter barquarter linequarter piequarter doughnutquarter reporttype">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                    <option value="colquarter">Column Chart</option>
                                    <option value="barquarter">Bar Chart</option>
                                    <option value="linequarter">Line Chart</option>
                                    <option value="piequarter">Pie Chart</option>
                                    <option value="doughnutquarter">Doughnut Chart</option>
                                </select>
                            </div>
                            <!-- Chart Type Year -->
                            <div class="form-group colyearly baryearly lineyearly pieyearly doughnutyearly reporttype">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                    <option value="colyearly">Column Chart</option>
                                    <option value="baryearly">Bar Chart</option>
                                    <option value="lineyearly">Line Chart</option>
                                    <option value="pieyearly">Pie Chart</option>
                                    <option value="doughnutyearly">Doughnut Chart</option>
                                </select>
                            </div>
                            <!-- Chart Type Emergency -->
                            <div class="form-group colemergency baremergency lineemergency pieemergency doughnutemergency reporttype">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                    <option value="colemergency">Column Chart</option>
                                    <option value="baremergency">Bar Chart</option>
                                    <option value="lineemergency">Line Chart</option>
                                    <option value="pieemergency">Pie Chart</option>
                                    <option value="doughnutemergency">Doughnut Chart</option>
                                </select>
                            </div>
                            <!-- Chart Type Ambulance -->
                            <div class="form-group pieambulance doughnutambulance reporttype">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                    <option value="pieambulance">Pie Chart</option>
                                    <option value="doughnutambulance">Doughnut Chart</option>
                                </select>
                            </div>
                            <!-- Chart Type Driver -->
                            <div class="form-group piedriver doughnutdriver reporttype">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Chart</option>
                                    <option value="piedriver">Pie Chart</option>
                                    <option value="doughnutdriver">Doughnut Chart</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <div class="alert alert-success fade in m-b-15">
                                <strong><i class="fa fa-print"></i> Press P to Print!</strong>
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        $date=date("F j, Y");
                        ?>
                        <div class="col-md-3">
                            <h4><?php echo $date?></h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="email-content">
                                <div class="panel-body">
                                    <!-- Monthly -->
                                    <div id="chartContainer1" class="colmonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer2" class="barmonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer3" class="linemonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer4" class="piemonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer5" class="doughnutmonth reporttype" style="width: 100%; height: 300px"></div>
                                    <!-- Quarterly -->
                                    <div id="chartContainer6" class="colquarter reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer7" class="barquarter reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer8" class="linequarter reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer9" class="piequarter reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer10" class="doughnutquarter reporttype" style="width: 100%; height: 300px"></div>
                                    <!-- Yearly -->
                                    <div id="chartContainer11" class="colyearly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer12" class="baryearly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer13" class="lineyearly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer14" class="pieyearly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer15" class="doughnutyearly reporttype" style="width: 100%; height: 300px"></div>
                                    <!-- Emergency -->
                                    <div id="chartContainer16" class="colemergency reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer17" class="baremergency reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer18" class="lineemergency reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer19" class="pieemergency reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer20" class="doughnutemergency reporttype" style="width: 100%; height: 300px"></div>
                                    <!-- Ambulance -->
                                    <div id="chartContainer21" class="pieambulance reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer22" class="doughnutambulance reporttype" style="width: 100%; height: 300px"></div>
                                    <!-- Driver -->
                                    <div id="chartContainer23" class="piedriver reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer24" class="doughnutdriver reporttype" style="width: 100%; height: 300px"></div>
                                    <hr>
                                    <?php require 'exceptionreports/monthly.php'?>
                                    <?php require 'exceptionreports/quarter.php'?>
                                    <?php require 'exceptionreports/yearly.php'?>
                                    <?php require 'exceptionreports/emergency.php'?>
                                    <?php require 'exceptionreports/ambulance.php'?>
                                    <?php require 'exceptionreports/driver.php'?>
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
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'exceptionreports.php?year='+year;
                });
            });
        </script>
        <?php require 'require/pressp.php'?>
    </body>
</html>
