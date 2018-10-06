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
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
            <?php require 'require/header.php'?>
            <?php require 'require/sidebar.php'?>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Master File</a></li>
                    <li><a href="#">Patient Record</a></li>
                    <li class="active">Patient Overview</li>
                </ol>
                <h1 class="page-header">Patient Overview</h1>
                <div id="alert" class="alert alert-info" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <?php
    $query = $conn->query("SELECT * FROM `patient`, `dispatch` WHERE dispatch.dispatch_id = patient.dispatch_id && patient.patient_id = '$_GET[patient_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="invoice">
                            <div class="invoice-company">
                                <span class="pull-right hidden-print">
                                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
                                </span>
                                <?php echo $fetch['patient_name']?> - Service Number : <?php echo $fetch['service_no']?>
                            </div>
                            <div class="invoice-header">
                                <div class="invoice-from">
                                    <strong>Patient Profile and Dispatch Details</strong><br />
                                </div>
                            </div>
                            <div class="invoice-content">
                                <div class="table-responsive">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tbody>
                                                <tr class="success">
                                                    <td><strong>Age</strong></td>
                                                    <td><?php echo $fetch['age']?> years old</td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Gender</strong></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Date of Birth</strong></td>
                                                    <td><?php echo $fetch['date_of_birth']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Home Address</strong></td>
                                                    <td><?php echo $fetch['home_address']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Directives</strong></td>
                                                    <td><?php echo $fetch['directives']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Next to Kin</strong></td>
                                                    <td><?php echo $fetch['next_to_kin']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Relationship</strong></td>
                                                    <td><?php echo $fetch['relationship']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tbody>
                                                <tr class="success">
                                                    <td><strong>Date and Time of Call</strong></td>
                                                    <td><?php echo $fetch['date_time_call']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Ambulance</strong></td>
                                                    <td><?php echo $fetch['ambulance']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Dispatch For</strong></td>
                                                    <td><?php echo $fetch['dispatched_for']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Call Location</strong></td>
                                                    <td><?php echo $fetch['call_location']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>Driver</strong></td>
                                                    <td><?php echo $fetch['driver']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>MOI/NOI</strong></td>
                                                    <td><?php echo $fetch['moi_noi']?></td>
                                                </tr>
                                                <tr class="success">
                                                    <td><strong>EMS</strong></td>
                                                    <td><?php echo $fetch['ems']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-header">
                                    <div class="invoice-from">
                                        <strong>Assessment</strong><br />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                           <span>CARDIOVASCULAR</span>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" <?php if($fetch['dispatched_for'] == 'Hypertension') echo 'checked';?>/>
                                                    Hypertension
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />
                                                    Checkbox Label 2
                                                </label>
                                            </div>
                                        </div>
                                    </div>
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
