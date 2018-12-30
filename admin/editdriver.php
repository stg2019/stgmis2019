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
        <link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Data Entry</a></li>
                    <li class="active">Driver</li>
                </ol>
                <h1 class="page-header">
                    <button type = "button" class = "btn btn-md btn-primary update_driver" value="<?php echo $_GET['driver_id']; ?>">Save Changes</button>
                    <a href="#" onclick="goBack()" class="btn btn-md btn-white ">Back</a>
                </h1>

                <div id="alert" class="alert alert-info" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">Edit Driver Information</h4>
                                <?php
                                $query = $conn->query("SELECT * FROM `driver` WHERE `driver_id` = '$_GET[driver_id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                ?>
                            </div>
                            <div class="panel-body">
                                <div id="cname_response"></div>
                                <div class="form-group">
                                    <label >Driver Name</label>
                                    <input type="text" value="<?php echo $fetch['driver_name']; ?>" id="driver_name<?php echo $fetch['driver_id']; ?>" name="driver_name" class="form-control input-sm" placeholder="Enter Driver Name"/>
                                </div>
                                <div class="form-group">
                                    <label >Age</label>
                                    <input type="text" value="<?php echo $fetch['age']; ?>" id="age<?php echo $fetch['driver_id']; ?>" name="age" class="form-control input-sm" placeholder="Enter Age"/>
                                </div>
                                <div class="form-group">
                                    <label >Gender</label>
                                    <select class="form-control selectpicker input-sm" data-style="btn-white" id="gender<?php echo $fetch['driver_id']; ?>" name="gender">
                                        <option value="<?php echo $fetch['gender']; ?>"><?php echo $fetch['gender']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Contact Number</label>
                                    <input type="text" value="<?php echo $fetch['contact_number']; ?>" id="contact_number<?php echo $fetch['driver_id']; ?>" name="contact_number" class="form-control input-sm" placeholder="Enter Contact Number"/>
                                </div>
                                <div class="form-group">
                                    <label >Home Address</label>
                                    <input type="text" value="<?php echo $fetch['home_address']; ?>" id="home_address<?php echo $fetch['driver_id']; ?>" name="home_address" class="form-control input-sm" placeholder="Enter Home Address"/>
                                </div>
                                <div class="form-group">
                                    <label >Duty Hours</label>
                                    <select class="form-control selectpicker input-sm" data-style="btn-white" id="duty_hours<?php echo $fetch['driver_id']; ?>" name="duty_hours">
                                        <option value="<?php echo $fetch['duty_hours']; ?>"><?php echo $fetch['duty_hours']; ?></option>
                                        <option value="9:00 AM - 9:00 PM">9:00 AM - 9:00 PM</option>
                                        <option value="9:00 PM - 9:00 AM">9:00 PM - 9:00 AM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php require '../require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../functions/cruddriver.js"></script>
        <script type="text/javascript" src="../functions/shownotifications.js"></script>
        <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/js/table-manage-default.demo.min.js"></script>
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
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </body>
</html>
