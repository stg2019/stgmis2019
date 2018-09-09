<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DRRMO MIS</title>
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
        <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <script src="assets/plugins/pace/pace.min.js"></script>
        <link href="assets/css/custom.css" rel="stylesheet" />
    </head>
    <body class="pace-top">
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <div class="login-cover">
            <div class="login-cover-image"><img src="assets/img/login-bg/bg-1.jpg" data-id="login-cover-image" alt="" /></div>
            <div class="login-cover-bg"></div>
        </div>
        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            <!-- begin login -->
            <div class="login login-v2" data-pageload-addclass="animated fadeInDown">
                <!-- begin brand -->
                <div class="login-header">
                    <div class="brand">
                        DRRMO MIS 
                        <small>Daily Time Record</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <center>
                        <div id="modallabel" class="alert alert-danger" style="display:none;">
                            <center><span id="checkfield"></span></center>
                        </div>
                        <div id="alert" class="alert alert-success" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                    </center>
                </div>

                <!-- end brand -->
                <div class="login-content">
                    <form>
                        <center>
                            <span id="currentTime"></span> <br>
                            <span id="currentDate"><?php echo date('l, M d, Y')?></span>
                        </center>
                        <br />
                        <div class="form-group m-b-20">
                            <input type="text" class="form-control input-lg" id="emt_id_number" name="emt_id_number" placeholder="Enter ID Number" required />
                        </div>
                        <div class="login-button">
                            <button type="button" id="timeinout" class="btn btn-success btn-block btn-lg">TIME OUT</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end login -->



            <!-- begin theme-panel -->
            <?php require 'require/sidepanel.php'?>
            <!-- end theme-panel -->
        </div>
        <!-- end page container -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="functions/timeinout.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
<script src="assets/crossbrowserjs/html5shiv.js"></script>
<script src="assets/crossbrowserjs/respond.min.js"></script>
<script src="assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="assets/js/login-v2.demo.min.js"></script>
        <script src="assets/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

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
        <!-- Get Time-->
        <script>
            function clock() {
                var now = new Date();
                var TwentyFourHour = now.getHours();
                var hour = now.getHours();
                var min = now.getMinutes();
                var sec = now.getSeconds();
                var mid = 'PM';
                if (sec < 10) {
                    sec = "0" + sec;
                }
                if (min < 10) {
                    min = "0" + min;
                }

                if (hour > 12) {
                    hour = hour - 12;
                }
                if (hour < 10) {
                    hour = "0" + hour;
                }

                if(hour==0){ 
                    hour=12;
                }

                if(TwentyFourHour < 12) {
                    mid = 'AM';
                }

                document.getElementById('currentTime').innerHTML = hour+':'+min + ':' + sec + mid ;
                setTimeout(clock, 1000);

            }
            clock();
        </script>   
    </body>
</html>
