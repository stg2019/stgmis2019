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
        <?php require '../assets/js/loadchart/reports/requesttransport.php'?>
        <?php require '../assets/js/loadchart/reports/customrequesttransport.php'?>
        <style type="text/css">
            @media print {
                .print{
                    display: none !important;
                }
                .hidden-header{
                    display: inline !important;
                }
            }
        </style>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content content-full-width">
                <div class="p-20">
                    <div class="row print">
                        <div class="col-md-2">
                            <div class="form-group">
                                <select  class="form-control selectpicker input-sm" data-style="btn-primary" id="pyear">
                                    <option selected disabled>Select Year</option>
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
                            <p><b>Graphical</b></p>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control selectpicker input-sm" data-style="btn-primary" id="select-report" name="filterbutton" >
                                    <option value="monthly" selected="selected" disabled="disabled">Select Report</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                            <div class="alert alert-success fade in m-b-15">
                                <strong><i class="fa fa-print"></i> Press P to Print!</strong>
                                <span class="close" data-dismiss="alert">&times;</span>
                            </div>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        $date=date("F j, Y");
                        ?>
                        <div class="col-md-3">
                            <h6 style="float:right; display:none;" class="hidden-header"><?php echo $date?></h6>
                        </div>

                    </div>
                    <div class="row">
                        <label class="hidden-header" style="display:none;">
                            <br>
                            <img src="assets/img/admin.png" style="width:130px;height:130px; padding: -10px; margin:-50px 0px 0px -10px;"alt="drrmopicture" />
                            <img src="assets/img/emt.png" style="width:100px;height:100px; padding: -10px; margin:-50px 0px 0px -10px;"alt="drrmopicture" />
                            <h3>Bacolod Disaster Risk Reduction Management Office</h3>
                            <h4>2nd Floor, Old City Hall, Luzuriaga St., Bacolod City 6100, Negros Occidental</h4>
                            <h4>432-3879</h4>
                            <br>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="email-content">
                                <div class="panel-body">
                                    <span id="shit">Choose from the given Graphical Report above.</span>
                                    <div id="chartContainer1" class="monthly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer2" class="quarterly reporttype" style="width: 100%; height: 300px"></div>
                                    <div id="chartContainer3" class="yearly reporttype" style="width: 100%; height: 300px"></div>
                                    <?php require 'otherreports/monthlytransport.php'?>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!--
<div class="row">
<div class="col-md-12">
<div class="email-content monthly quarterly yearly reporttype">
<div class="panel-body">
<div id="chartContainer4" style="width: 100%; height: 485px"></div>
</div>
</div>
</div>
</div>
-->


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
                    window.location = 'reportrequesttransport.php?year='+year;
                });
            });
        </script>
        <script>
            $(function () { /* DOM ready */
                $("#select-report").change(function () {
                    document.getElementById("shit").style.display = "none";
                });
            });
        </script>
        <?php require 'require/pressp.php'?>

    </body>
</html>
