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
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">System Maintenance</a></li>
                    <li class="active">My Account</li>
                </ol>
                <h1 class="page-header">My Account</h1>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
    require 'require/dbconnection.php';
            $id = $_SESSION['user_id'];
            $q = $conn->query("SELECT * FROM `users` where `user_id` = '$id'") or die(mysqli_error());
            $f = $q->fetch_array();
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        Account Details
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <form role="form" id="user">
                                        <div id="modallabel" class="alert alert-danger" style="display:none;">
                                            <center><span id="checkfield"></span></center>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-8">
                                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $id?>">
                                                <input type="text" id="complete_name" name="complete_name" class="form-control" value="<?php echo $f['complete_name']?>" placeholder="Enter Complete Name"/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">Userame</label>
                                            <div class="col-md-8">
                                                <input type="text" id="username" name="username" class="form-control" value="<?php echo $f['username']?>" placeholder="Enter Userame"/>

                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">New Password</label>
                                            <div class="col-md-8">
                                                <input type="text" id="password" name="password" class="form-control" placeholder="Enter Password"/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">Confirm Password</label>
                                            <div class="col-md-8">
                                                <input type="text" id="cfmpassword" name="cfmpassword" class="form-control" placeholder="Retype Password"/>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">Old Password</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="passwordold" name="passwordold"placeholder="Retype Old Password"/>
                                                <div id="pword_response"></div>
                                            </div>
                                        </div> 
                                        -->
                                        <hr>
                                        <button type = "button" id="savechanges" class = "btn btn-sm btn-info">Save Changes</button>
                                        <a href="dispatchment.php" class="btn btn-sm btn-white">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="alert" class="alert alert-success" style="display:none;">
                                <center><span id="alerttext"></span></center>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>
                </div>
            </div>
            <?php require '../require/sidepanel.php'?>

            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>
        <script src="../functions/updateaccount.js"></script>
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
        <script>
            $("#user").validate({
                ignore: [],
                rules: {
                    password: {
                        minlength: 8,
                        maxlength: 10
                    },
                    'cfmpassword': {
                        minlength: 8,
                        maxlength: 10,
                        equalTo: "#password"
                    }
                }
            });


        </script>

    </body>
</html>
