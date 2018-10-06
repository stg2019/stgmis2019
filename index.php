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
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body class="pace-top bg-white">
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade">
            <div class="login login-with-news-feed">
                <div class="news-feed">
                    <div class="news-image">
                        <img src="assets/img/login.JPG" data-id="login-cover-image" alt="drrmopicture" />
                    </div>
                    <div class="news-caption">
                        <h4 class="caption-title"><i class="fa fa-bank text-success"></i> Disaster Risk Reduction Management Office</h4>
                        <p>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2nd Floor, Old City Hall, Araneta Avenue, Bacolod City 6100
                        </p>
                    </div>
                </div>
                <div class="right-content">
                    <div class="login-header">
                        <div class="brand">
                            DRRMO
                            <small>Management Information System</small>
                        </div>
                    </div>
                    <div class="login-content">
                        <form action="action/login.php" method="POST" class="margin-bottom-0">
                            <div id="modallabel" class="alert alert-danger" style="display:none;">
                                <center><span id="checkfield"></span></center>
                            </div>
                            <div class="form-group m-b-15">
                                <input type="text" class="form-control input-lg" placeholder="Username" id="username" name="username" required />
                            </div>
                            <div id="uname_response"></div>
                            <div class="form-group m-b-15">
                                <input type="password" class="form-control input-lg" placeholder="Password" name="password" required />
                            </div>
                            <!-- <div class="g-recaptcha" data-sitekey="6LeIim4UAAAAAJdDvusn33vZb6LpwoI5HjIRRRmQ"></div> -->
                            <hr>
                            <div class="login-buttons">
                                <button type="submit" class="btn btn-info btn-block btn-lg" id="login" name="login">Sign me in</button>
                            </div>

                            <hr>
                            <p class="text-center">
                                &copy; Safetech Guardians All Rights Reserved 2019
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="functions/checklogin.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/js/apps.min.js"></script>
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
