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
        <?php require '../assets/js/loadchart/exception/monthlydispatchment.php'?>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>
            <div id="content" class="content content-full-width">
                <div class="p-20">
                    <div class="row">
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
                                    <option value="colmonth">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                Select Chart Type:
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" id="select-report" name="filterbutton">
                                    <option value="monthly" selected="selected" disabled="disabled">Select Report</option>
                                    <option value="colmonth">Column Chart</option>
                                    <option value="barmonth">Bar Chart</option>
                                    <option value="linemonth">Line Chart</option>
                                    <option value="piemonth">Pie Chart</option>
                                    <option value="doughnutmonth">Doughnut Chart</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="email-content">
                                <div class="panel-body">
                                    <div id="chartContainer1" class="colmonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer2" class="barmonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer3" class="linemonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer4" class="piemonth reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer5" class="doughnutmonth reporttype" style="width: 100%; height: 300px"></div>
                                    <label class="text text-danger">Per Month</label>
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
                                    <label class="text text-danger">Per Dispatch</label>
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
                                    <hr>
                                    <div class="invoice-header">
                                        <div class="invoice-from">
                                            <?php
                                            require '../require/dbconnection.php';
                                            $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
                                            $find = $query->fetch_array();
                                            ?>
                                            <address class="m-t-5 m-b-5">
                                                <strong>Approved By:</strong>
                                            </address><br>
                                            <h4><?php echo $find['complete_name']?></h4>
                                            <small>BDRRMO Administrator</small>
                                        </div>
                                    </div>
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
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'exceptionreports.php?year='+year;
                });
            });
        </script>
    </body>
</html>
