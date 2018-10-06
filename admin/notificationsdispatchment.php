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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/style.min.css" rel="stylesheet" />
        <link href="../assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="../assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <script src="../assets/plugins/pace/pace.min.js"></script>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>

        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>		
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content content-full-width">
                <h1 class="page-header">All Dispatchment</h1>
                <div class="vertical-box">
                    <div class="vertical-box-column">
                        <div class="wrapper bg-silver-lighter">
                            <div class="btn-toolbar">
                                <div class="btn-group pull-right">
                                    <button class="btn btn-white btn-sm">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-white btn-sm">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                                <div class="btn-group dropdown">
                                    <button class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
                                        View All <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu text-left text-sm">
                                        <li class="active"><a href="#"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> All</a></li>
                                        <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Unread</a></li>
                                        <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Contacts</a></li>
                                        <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Groups</a></li>
                                        <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Newsletters</a></li>
                                        <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Social updates</a></li>
                                        <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Everything else</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-white" data-toggle="tooltip" data-placement="top" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                </div>

                                <div class="btn-group">
                                    <button class="btn btn-sm btn-white hide" data-email-action="delete"><i class="fa fa-times m-r-3"></i> <span class="hidden-xs">Delete</span></button>
                                    <button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-folder m-r-3"></i> <span class="hidden-xs">Archive</span></button>
                                    <button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-trash m-r-3"></i> <span class="hidden-xs">Junk</span></button>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-lg no-radius list-email">
                            <?php 
    $query3 = $conn->query("SELECT * FROM `dispatch` order by `dispatch_id` DESC") or die(mysqli_error());
            $query4 = $conn->query("SELECT count(*) as total FROM `dispatch`") or die(mysqli_error());
            $fetch4 = $query4->fetch_array();
            while($fetch3 = $query3->fetch_array()){
                date_default_timezone_set("Asia/Manila");     
                $date_created = $fetch3['date_created'];
                $timestamp = strtotime($date_created);
                $new_date_format = date('Y-m-d g:i:s a', $timestamp);
                            ?>

                            <li class="list-group-item primary">
                                <div class="email-checkbox">
                                    <label>
                                        <i class="fa fa-square-o"></i>
                                        <input type="checkbox" data-checked="email-checkbox" />
                                    </label>
                                </div>
                                <span class="label label-primary f-s-10">Service Number : <?php echo $fetch3['service_no']?></span>
                                <div class="email-info">
                                    <span class="email-time"><?php echo time_ago_in_php($new_date_format);?></span>
                                    <h5 class="email-title">
                                        <a href="email_detail.html"><?php echo $fetch3['call_location']?></a>
                                    </h5>
                                    <p class="email-desc">
                                        Dispatched For : <?php echo $fetch3['dispatched_for']?> | Date and Time of Call : <?php echo $fetch3['date_time_call']?>
                                    </p>
                                </div>
                            </li>
                            <?php
            }

                            ?>

                        </ul>
                        <div class="wrapper bg-silver-lighter clearfix">
                            <div class="btn-group pull-right">
                                <button class="btn btn-white btn-sm">
                                    <i class="fa fa-chevron-left"></i>
                                </button>
                                <button class="btn btn-white btn-sm">
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                            <span class="label label-inverse f-s-12">Total Dispatchment : <?php echo $fetch4['total']?></span>
                        </div>
                    </div>
                </div>
            </div>

            <?php require '../require/sidepanel.php'?>


            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../assets/js/email-inbox-v2.demo.min.js"></script>
        <script src="../assets/js/apps.min.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
                InboxV2.init();
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
