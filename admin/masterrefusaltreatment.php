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

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
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
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Master File</a></li>
                    <li><a href="#">Refusal of Treatment</a></li>
                    <li class="active">Refusal of Treatment Overview</li>
                </ol>
                <h1 class="page-header">Refusal of Treatment Overview</h1>
                <div id="alert" class="alert alert-info" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel panel-primary" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">Overview</h4>
                                <?php
    $query = $conn->query("SELECT * FROM `refusal_treatment` WHERE `refusal_treatment_id` = '$_GET[refusal_treatment_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
                                ?>
                            </div>
                            <div class="panel-body">
                                <label class="alert alert-warning"  style="text-align:justify;"><small>I hereby express my <strong>refusal to [treatment] or [transportation to a hospital]</strong> and I acknowledged that my refusal entails full knowledge of the risk and consequence as explained by the EMS crew. I hereby release the EMS crew of DRRMO Bacolod from any liability that may occur as a result of my refusal.</small></label>
                                <div class="form-group">
                                    <label >Witness 1</label>
                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['signed']; ?>" id="usigned<?php echo $fetch['signed']; ?>" name="signed" placeholder="Enter Patient Name" required readonly/>
                                </div>
                                <div class="form-group">
                                    <label >Witness 1</label>
                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['witness1']; ?>" id="uwitness1<?php echo $fetch['refusal_treatment_id']; ?>" name="witness1" placeholder="Enter Witness 1 Name" required readonly/>
                                </div>
                                <div class="form-group">
                                    <label >Witness 2</label>
                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['witness2']; ?>" id="uwitness2<?php echo $fetch['refusal_treatment_id']; ?>" name="witness2" placeholder="Enter Witness 2 Name" required readonly/>
                                </div>
                                <div class="form-group ">
                                    <label >Date of Incident</label>
                                    <div class="input-group date" id="datetimepicker1">
                                        <input type="text" value="<?php echo $fetch['date_incident']; ?>" id="udate_incident<?php echo $fetch['refusal_treatment_id']; ?>" name="date_incident" class="form-control input-sm" readonly/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div><hr>
                                <div class="form-group">
                                    <label >Statements</label>
                                    <textarea class="form-control" rows="6"  id="statements<?php echo $fetch['refusal_treatment_id']; ?>" name="statements" readonly><?php echo $fetch['statements']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label >Attachment: (legal documents etc.)</label>
                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['attachment']; ?>" id="uattachment<?php echo $fetch['refusal_treatment_id']; ?>" name="attachment" placeholder="Enter Attachment" required readonly/>
                                </div>
                                <div class="form-group">
                                    <label >Prepared By</label>
                                    <input type="text" class="form-control input-sm" value="<?php echo $fetch['prepared_by']; ?>" id="uprepared_by<?php echo $fetch['refusal_treatment_id']; ?>" name="prepared_by" placeholder="Enter Name" required readonly/>
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
