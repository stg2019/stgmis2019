<!DOCTYPE html>
<?php
require '../require/logincheck.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
        <title>DRRMO MIS | Bacolod City</title>
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
        
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Transactions</a></li>
                    <li class="active">Inventory</li>
                </ol>
                <h1 class="page-header"><a href="#addstocks" class="btn btn-sm btn-primary" data-toggle="modal">Add Stocks</a></h1>
                <div id="alert" class="alert alert-info" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">List of Medical Supplies</h4>
                            </div>
                            <div class="panel-body">
                                <div id="inventoryTable"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php require '../require/sidepanel.php'?>
            <?php require '../modals/addstocks.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../functions/crudinventory.js"></script>
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

    </body>
</html>
