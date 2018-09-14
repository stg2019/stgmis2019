<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<?php
function getstatus($status){
    if($status == '0'){
        return "Not Active";
    }else{
        return "Active";
    }
}


?>
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
        <title>DRRMO | Bacolod City</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/style.min.css" rel="stylesheet" />
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="../assets/plugins/pace/pace.min.js"></script>
        <!-- ================== END BASE JS ================== -->
    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            <?php require 'require/header.php'?>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <?php require 'require/sidebar.php'?>
            <!-- end #sidebar -->

            <!-- begin #content -->
            <div id="content" class="content">
                <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">System Maintenance</a></li>
                    <li class="active">My Account</li>
                </ol>
                <!-- end breadcrumb -->
                <!-- begin page-header -->
                <h1 class="page-header">My Account</h1>
                <!-- end page-header -->

                <!-- begin row -->


                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- begin panel -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><!--<button class="btn btn-sm btn-white" onclick="codeAddress();" value="geocode">Show Destination</button>-->
                                        Account Details
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-2 col-form-label">Userame</label>
                                        <div class="col-md-8">
                                            <input type="text" id="" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-2 col-form-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="text" id="" class="form-control"/>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="button" value="<?php echo $_GET['dispatch_id']; ?>" id="addnew" class="btn btn-sm btn-primary m-r-5">Save Changes</button>
                                    <a href="dispatchment.php" class="btn btn-sm btn-white">Back</a>
                                </div>
                            </div>
                            <!-- end panel -->
                        </div>
                    </div>

                    <div class="row">
                    </div>
                </div>

                <!-- end row -->
            </div>
            <?php require '../require/sidepanel.php'?>
            <!-- end theme-panel -->

            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
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
        <script src="../functions/crudusermanagement.js"></script>
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
