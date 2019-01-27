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
                    <li><a href="#">System Maintenance</a></li>
                    <li class="active">User Management</li>
                </ol>
                <h1 class="page-header">Update Account Details</h1>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                    <div id="alert" class="alert alert-success" style="display:none;">
                        <center><span id="alerttext"></span></center>
                    </div>
                </center>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    Account Details
                                </h4>
                                <?php
    $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = '$_GET[user_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
         $userid = $fetch['user_id'];
                                ?>
                            </div>
                            <form id="users">
                                <div class="panel-body">
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-4 col-form-label">Complete Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="complete_name" value="<?php echo $fetch['complete_name']; ?>" id="complete_name<?php echo $fetch['user_id']; ?>" class="form-control complete_name"/>
                                            <input type="text" name="user_id" value="<?php echo $userid ?>" id="user_id" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-4 col-form-label">Contact Number</label>
                                        <div class="col-md-8">
                                            <input type="text" name="contact_no" value="<?php echo $fetch['contact_no']; ?>" id="contact_no<?php echo $fetch['user_id']; ?>" class="form-control contact_no"/>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-4 col-form-label">Home Address</label>
                                        <div class="col-md-8">
                                            <input type="text" name="home_address" value="<?php echo $fetch['home_address']; ?>" id="home_address<?php echo $fetch['user_id']; ?>" class="form-control home_address"/>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-4 col-form-label">Username</label>
                                        <div class="col-md-8">
                                            <input type="text" name="username" value="<?php echo $fetch['username']; ?>" id="username<?php echo $fetch['user_id']; ?>" class="form-control username" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-4 col-form-label">New Password</label>
                                        <div class="col-md-8">
                                            <input type="text" name="password" id="password<?php echo $fetch['user_id']; ?>" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-4 col-form-label">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input type="text" name="confirm_password" id="confirm_password" class="form-control"/>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-sm btn-primary update_account" value="<?php echo $userid; ?>" class="btn btn-sm btn-primary m-r-5">Update Account</button>
                                    <a href="#" onclick="goBack()" class="btn btn-sm btn-white ">Back</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>

            <?php require '../require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../functions/updateaccount.js"></script>
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
        <script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>
        <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/js/table-manage-default.demo.min.js"></script>
        <script src="../assets/js/form-plugins.demo.min.js"></script>
        <script src="../assets/js/apps.min.js"></script>
        <script>
            $("#users").validate({
                ignore: [],
                rules: {
                    password: {
                        minlength: 6,
                        maxlength: 10
                    },
                    'confirm_password': {
                        minlength: 6,
                        maxlength: 10,
                        equalTo: "#password"
                    }
                }
            });
        </script>
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
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

    </body>
</html>
