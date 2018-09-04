<!DOCTYPE html>
<?php
require 'require/logincheck.php';
?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>DRRMO | Bacolod City</title>
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/ndrrmo/logo.png">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet" />
        <link href="assets/css/style.min.css" rel="stylesheet" />
        <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="assets/css/custom.css" rel="stylesheet"/>
        <script src="assets/plugins/pace/pace.min.js"></script>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>
            <div id="content" class="content">
                <h1 class="page-header">DASHBOARD</h1>

                <div class="col-lg-3">
                    <?php
    require 'require/dbconnection.php';
            $q = $conn->query("SELECT COUNT(*) as total FROM `users`") or die(mysqli_error());
            $f = $q->fetch_array();
                    ?>
                    <div class="widget widget-stats bg-gradient-success">
                        <img src="assets/img/ndrrmo/circle.svg" class="card-img-absolute" alt="circle-image"/>
                        <div class="stats-content">
                            <div class="stats-title">NUMBER OF USERS</div>
                            <div class="stats-number"><?php echo $f['total']?></div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">Administrators and Staff</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
        <script src="assets/js/dashboard.min.js"></script>
        <script src="assets/js/apps.min.js"></script>

        <script>
            $(document).ready(function() {
                App.init();
                Dashboard.init();
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
