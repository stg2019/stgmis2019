<?php
require 'require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>NDRRMO | Bacolod City</title>
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/ndrrmo/logo.png">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet" />
        <link href="assets/css/style.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="assets/css/invoice-print.min.css" rel="stylesheet" />
        <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
        <script src="assets/plugins/pace/pace.min.js"></script>
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="assets/js/jquery.canvasjs.min.js"></script>
        <?php require 'assets/js/loadchart/reports/emtpatientvitals.php'?>

    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>	
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Master File</a></li>
                    <li><a href="calllogs.php">Patient Record</a></li>
                    <li class="active">Patient Overview</li>
                </ol>
                <h1 class="page-header">               
                    Patient Overview
                    <a href="#" onclick="goBack()" class="btn btn-md btn-white ">Back</a>
                </h1>
                <?php
    $query = $conn->query("SELECT * FROM `patient`, `dispatch` WHERE dispatch.dispatch_id = patient.dispatch_id && patient.patient_id = '$_GET[patient_id]'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $query2 = $conn->query("SELECT * FROM `patient`, `assessment` WHERE assessment.patient_id = patient.patient_id && patient.patient_id = '$_GET[patient_id]'") or die(mysqli_error());
        $fetch2 = $query2->fetch_array();
        $query3 = $conn->query("SELECT * FROM `patient`, `vital_signs` WHERE vital_signs.patient_id = patient.patient_id && patient.patient_id = '$_GET[patient_id]' order by vital_signs_id DESC limit 1") or die(mysqli_error());
        $fetch3 = $query3->fetch_array();
        $query4 = $conn->query("SELECT * FROM `patient`, `past_medical_history` WHERE past_medical_history.patient_id = patient.patient_id && patient.patient_id = '$_GET[patient_id]'") or die(mysqli_error());
        $fetch4 = $query4->fetch_array();
        $query5 = $conn->query("SELECT * FROM `patient`, `glassgow_coma_scale` WHERE glassgow_coma_scale.patient_id = patient.patient_id && patient.patient_id = '$_GET[patient_id]'") or die(mysqli_error());
        $fetch5 = $query5->fetch_array();
                ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="invoice">
                            <div class="invoice-company">
                                <?php echo $fetch['patient_name']?>
                            </div>
                            <div class="invoice-header">
                                <div class="invoice-from">
                                    <strong>Patient Profile and Dispatch Details</strong><br />
                                </div>
                            </div>
                            <div class="invoice-content">
                                <div class="table-responsive">
                                    <div class="col-md-6">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Age</strong></td>
                                                    <td><?php echo $fetch['age']?> years old</td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Gender</strong></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Date of Birth</strong></td>
                                                    <td><?php echo $fetch['date_of_birth']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Home Address</strong></td>
                                                    <td><?php echo $fetch['home_address']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Directives</strong></td>
                                                    <td><?php echo $fetch['directives']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Next to Kin</strong></td>
                                                    <td><?php echo $fetch['next_to_kin']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Relationship</strong></td>
                                                    <td><?php echo $fetch['relationship']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Date and Time of Call</strong></td>
                                                    <td><?php echo $fetch['date_time_call']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Ambulance</strong></td>
                                                    <td><?php echo $fetch['ambulance']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Dispatch For</strong></td>
                                                    <td><?php echo $fetch['dispatched_for']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Call Location</strong></td>
                                                    <td><?php echo $fetch['call_location']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Driver</strong></td>
                                                    <td><?php echo $fetch['driver']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>MOI/NOI</strong></td>
                                                    <td><?php echo $fetch['moi_noi']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>EMS</strong></td>
                                                    <td><?php echo $fetch['ems']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-header">
                                    <div class="invoice-from">
                                        <strong>Assessment & Glassgow Coma Scale</strong><br />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="col-md-6"><br>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Assessment</strong></td>
                                                    <td><?php echo $fetch['dispatched_for']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Chief Complaints</strong></td>
                                                    <td><?php echo $fetch2['chief_complaints']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Subjective Assessment</strong></td>
                                                    <td><?php echo $fetch2['subjective_assessment']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Objective Assessment</strong></td>
                                                    <td><?php echo $fetch2['objective_assessment']?></td>
                                                </tr>
                                                <tr class="warning">
                                                    <td><strong>Priority Level</strong></td>
                                                    <td><?php echo $fetch2['priority_level']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6"><br>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Time</strong></td>
                                                    <td><?php echo $fetch3['time']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Eye</strong></td>
                                                    <td><?php echo $fetch5['eye']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Verbal</strong></td>
                                                    <td><?php echo $fetch5['verbal']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Motor</strong></td>
                                                    <td><?php echo $fetch5['motor']?></td>
                                                </tr>
                                                <tr class="warning">
                                                    <td><strong>Total</strong></td>
                                                    <td><?php echo $fetch5['eye'] + $fetch5['verbal'] + $fetch5['motor']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-header">
                                    <div class="invoice-from">
                                        <strong>Recent Vital Signs & Past Medical History</strong><br />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="col-md-6"><br>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Time</strong></td>
                                                    <td><?php echo $fetch3['time']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>LOC</strong></td>
                                                    <td><?php echo $fetch3['loc']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>B.P. (mmHg)</strong></td>
                                                    <td><?php echo $fetch3['bp']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>SaO2 (%)</strong></td>
                                                    <td><?php echo $fetch3['sa']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>PR (bpm)</strong></td>
                                                    <td><?php echo $fetch3['pr']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RR (cpm)</strong></td>
                                                    <td><?php echo $fetch3['rr']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Temperature (celcius)</strong></td>
                                                    <td><?php echo $fetch3['temp']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RBS (mg/dl)</strong></td>
                                                    <td><?php echo $fetch3['rbs']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Pupils</strong></td>
                                                    <td><?php echo $fetch3['pupils']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Skin</strong></td>
                                                    <td><?php echo $fetch3['skin']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6"><br>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Allergy to</strong></td>
                                                    <td><?php echo $fetch4['allergy']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Medications</strong></td>
                                                    <td><?php echo $fetch4['medications']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>P. History</strong></td>
                                                    <td><?php echo $fetch4['phistory']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Last Oral Intake</strong></td>
                                                    <td><?php echo $fetch4['last_oral_intake']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Events Leading to ing/ill</strong></td>
                                                    <td><?php echo $fetch4['events_leading_to']?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Other Pertinent Information</strong></td>
                                                    <td><?php echo $fetch4['notes']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-header">
                                    <div class="invoice-from">
                                        <strong>Incident / Patient Disposition & Interventions</strong><br />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="col-md-6"><br>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr >
                                                    <td><strong>Incident / Patient Disposition</strong></td>
                                                    <td><?php echo $fetch2['patient_disposition']?></td>
                                                </tr>
                                                <tr >
                                                    <td><strong>Interventions</strong></td>
                                                    <td><?php echo $fetch2['interventions']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-header">
                                    <div class="invoice-from">
                                        <strong>Vital Signs Graphical</strong><br />
                                    </div>
                                </div>
                                <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php require 'require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/masked-input/masked-input.min.js"></script>
        <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
        <script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
        <script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/moment.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
        <script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
        <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/js/table-manage-default.demo.min.js"></script>

        <script src="assets/js/form-plugins.demo.min.js"></script>
        <script src="assets/js/apps.min.js"></script> <script src="assets/js/timedate.js"> </script>
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
            var placesAutocomplete = places({
                container: document.querySelector('.complete_address')
            });
        </script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </body>
</html>
