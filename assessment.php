<?php
require 'require/logincheck.php';
?>
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
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>	
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="dispatchment.php">Dispatchment</a></li>
                    <li><a href="#" onclick="goBack()">Dispachment Overview</a></li>
                    <li class="active">Patient Assessment</li>
                </ol>
                <h1 class="page-header">        
                    <button type = "button" class = "btn btn-md btn-success add_assessment" value="<?php echo $_GET['patient_id']; ?>">Save Record</button>
                    <a href="#" onclick="goBack()" class="btn btn-md btn-white ">Back</a>
                </h1>
                <center>
                    <div id="alert" class="alert alert-success" style="display:none;">
                        <center><span id="alerttext"></span></center>
                    </div>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info" >
                            <div class="panel-heading ">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-white" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                </div>
                                <h4 class="panel-title">Pre Hospital Care Report</h4>
                                <?php
                                $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                ?>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="text-danger">&nbsp; Vital Signs</h4><hr>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Time</label>
                                                <div class="col-md-8">
                                                    <div class="input-group date" id="datetimepicker2">
                                                        <input type="text" id="time" name="time" class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">LOC</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-style="btn-white" id="loc" name="loc">
                                                        <option value="" selected disabled>Select LOC</option>
                                                        <option value="Alert">Alert </option>
                                                        <option value="Voice">Voice</option>
                                                        <option value="Pain">Pain</option>
                                                        <option value="Unresponsive">Unresponsive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">B.P. (mmHg)</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="bp" name="bp" placeholder="Enter Blood Pressure" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Sa02 (%)</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="sa" name="sa" placeholder="Enter Sa02 (%)" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">PR (bpm)</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="pr" name="pr" placeholder="Enter PR (bpm)" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">RR (cpm)</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="rr" name="rr" placeholder="Enter RR (cpm)" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Temperature (C)</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="temp" name="temp" placeholder="Enter Temperature (C)" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">RBS (mg/dl)</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="rbs" name="rbs" placeholder="Enter RBS (mg/dl)" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Pupil</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="pupils" name="pupils">
                                                        <option value="" selected disabled>Select Pupil</option>
                                                        <option value="Normal - R">Normal - R </option>
                                                        <option value="Normal - L">Normal - L</option>
                                                        <option value="Dilated - R">Dilated - R</option>
                                                        <option value="Dilated - L">Dilated - L</option>
                                                        <option value="Constricted - R">Constricted - R</option>
                                                        <option value="Constricted - L">Constricted - L</option>
                                                        <option value="Sluggish - R">Sluggish - R</option>
                                                        <option value="Sluggish - L">Sluggish - L</option>
                                                        <option value="No Response - R">No Response - R</option>
                                                        <option value="No Response - L">No Response - L</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Skin</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="skin" name="skin">
                                                        <option value="" selected disabled>Select Skin</option>
                                                        <option value="Unremarkable">Unremarkable </option>
                                                        <option value="Pale">Pale</option>
                                                        <option value="Warm">Warm</option>
                                                        <option value="Cyanotic">Cyanotic</option>
                                                        <option value="Moist">Moist</option>
                                                        <option value="Flushed">Flushed</option>
                                                        <option value="Dry">Dry</option>
                                                        <option value="Jaundiced">Jaundiced</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="text-danger">&nbsp; Past Medical History</h4><hr>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Allergy to</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="allergy" name="allergy" placeholder="Enter Allergy" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Medications</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="medications" name="medications" placeholder="Enter Medications" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">P History</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="phistory" name="phistory" placeholder="Enter P History" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Last Oral Intake</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="last_oral_intake" name="last_oral_intake" placeholder="Enter Last Oral Intake" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Events Leading to</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="events_leading_to" name="events_leading_to" placeholder="Enter Events Leading to" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Note</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="notes" name="notes">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="Extrication Required">Extrication required </option>
                                                        <option value="VA seatbelt used">VA seatbelt used</option>
                                                        <option value="Helmet">Helmet</option>
                                                    </select>
                                                </div>
                                            </div><hr>
                                            <h4 class="text-danger">&nbsp; Glassgow Coma Scale</h4><hr>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Eye Response</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="eye" name="eye">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="4">4 - Spontaneous </option>
                                                        <option value="3">3 - Responsive to voice</option>
                                                        <option value="2">2 - Responsive to pain</option>
                                                        <option value="1 - No Response">1 - No Response</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Verbal Response</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="verbal" name="verbal">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="5">5 - Oriented </option>
                                                        <option value="4">4 - Confused </option>
                                                        <option value="3e">3 - Inappropriate response</option>
                                                        <option value="2">2 - Incomprehensive</option>
                                                        <option value="1">1 - No Response</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Motor Response</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="motor" name="motor">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="6">6 - Obeys Command </option>
                                                        <option value="5">5 - Purposeful movement to pain </option>
                                                        <option value="4">4 - Withdraws from pain </option>
                                                        <option value="3">3 - Abnormal flexion (decorticate)</option>
                                                        <option value="2">2 - Abnormal extension (decebrate)</option>
                                                        <option value="1">1 - No Response</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="text-danger">&nbsp; Incident/Patient Disposition</h4><hr>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="patient_disposition" name="patient_disposition">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="Treated / transport to facility">Treated / transport to facility</option>
                                                        <option value="No Treatment Required">No Treatment Required</option>
                                                        <option value="Refused Treatment">Refused Treatment</option>
                                                        <option value="Treated and Released / transferred care">Treated and Released / transferred care</option>
                                                        <option value="Call Cancelled">Call Cancelled</option>
                                                        <option value="Dead at scene">Dead at scene</option>
                                                        <option value="Endorsed to law enforcement or authority">Endorsed to law enforcement or authority</option>
                                                        <option value="Behavioral / altered mental status">Behavioral / altered mental status</option>
                                                        <option value="Not of legal age /minor">Not of legal age /minor</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="agency" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="rescue" name="rescue" placeholder="Enter Name of Rescue Agency"/>
                                                </div>
                                            </div>
                                            <hr><h4 class="text-danger">&nbsp; Interventions</h4><hr>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select onchange="checkValue(this);" class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="interventions" name="interventions">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="Moved to ambulance on stretcher/backboard">Moved to ambulance on stretcher/backboard </option>
                                                        <option value="Walked to ambulance">Walked to ambulance </option>
                                                        <option value="Airway Cleared">Airway Cleared </option>
                                                        <option value="OPA / NPA used">OPA / NPA used</option>
                                                        <option value="ET Tube">ET Tube</option>
                                                        <option value="O2 Administered">O2 Administered</option>
                                                        <option value="Suction Used">Suction Used</option>
                                                        <option value="Artificial Ventilation">Artificial Ventilation</option>
                                                        <option value="CPR">CPR</option>
                                                        <option value="Cardiac Monitoring (Attach Tracing)">Cardiac Monitoring (Attach Tracing)</option>
                                                        <option value="Defibrillation/Cardioversion">Defibrillation/Cardioversion</option>
                                                        <option value="Medication Administered">Medication Administered</option>
                                                        <option value="IV Established Fluid">IV Established Fluid</option>
                                                        <option value="Bleeding/Hemorrhage Controlled">Bleeding/Hemorrhage Controlled</option>
                                                        <option value="Spinal Immobilization Neck and Back">Spinal Immobilization Neck and Back</option>
                                                        <option value="Heat or Cold Applied">Heat or Cold Applied</option>
                                                        <option value="Heat or Cold Applied">Splinting</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="tubesize" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="ettubesize" name="ettubesize" placeholder="Enter ET Tube Size "/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="levelsize" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="level" name="level" placeholder="Enter Level "/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="administered" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="at" name="at" placeholder="@"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="lpm" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="via" name="via" placeholder="via"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="suction" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="size" name="size" placeholder="Size"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="artificial" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="method" name="method" placeholder="Method"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="cpr" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="cycles" name="cycles" placeholder="Cycles"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="time_of" style="display:none;">
                                                <label class="col-md-4 control-label">Time of arrest</label>
                                                <div class="col-md-8">
                                                    <div class="input-group date" id="datetimepicker1">
                                                        <input type="text" id="time_of_arrest" name="time_of_arrest" class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="defitime" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="cardioversion" name="cardioversion" placeholder="No. of Times"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="medication" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="admin" name="admin" placeholder="Administered"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="established" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="fluid" name="fluid" placeholder="Fluid"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="establishedg" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="gauge" name="gauge" placeholder="Gauge"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="bleeding" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="hemorrhage" name="hemorrhage" placeholder="Method Used"/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="spinal" style="display:none;">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="eqts" name="eqts" placeholder="Eqts u"/>
                                                </div>
                                            </div>
                                            <hr><h4 class="text-danger">&nbsp; Priority Level</h4>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="priority_level" name="priority_level">
                                                        <option value="" selected disabled>Select Option</option>
                                                        <option value="1 - Emergent">1 - Emergent </option>
                                                        <option value="2 - Urgent">2 - Urgent </option>
                                                        <option value="3 - Non-urgent">3 - Non-urgent </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div><hr>
                                    <div class="row">
                                        <h4 >&nbsp; Chief Complaint(s)</h4>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="chief_complaints" name="chief_complaints" placeholder="Enter Chief Complaint(s)" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <h4 > &nbsp; Subjective Assessment</h4>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="subjective_assessment" name="subjective_assessment" placeholder="Enter Subjective Assessment" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <h4 > &nbsp; Objective Assessment</h4>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="objective_assessment" name="objective_assessment" placeholder="Enter Objective Assessment" rows="2"></textarea>
                                            </div>
                                        </div> <hr>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php require 'require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="functions/crudassessment.js"></script>
        <script src="assets/js/angolia.js"></script>
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
        <script src="assets/js/apps.min.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
                FormPlugins.init();
                TableManageDefault.init();
            });
        </script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <script>
            $(document).ready(function(){
                $('#interventions').change(function(){
                    var intervent = $('#interventions').val();
                    switch (intervent) {
                        case 'ET Tube':
                            document.getElementById("tubesize").style.display = "block";
                            document.getElementById("levelsize").style.display = "block";
                            break;

                        case 'O2 Administered': 
                            document.getElementById("administered").style.display = "block";
                            document.getElementById("lpm").style.display = "block";
                            break;

                        case 'Suction Used':
                            document.getElementById("suction").style.display = "block";
                            break;

                        case 'Artificial Ventilation':
                            document.getElementById("artificial").style.display = "block";
                            break;

                        case 'CPR':
                            document.getElementById("cpr").style.display = "block";
                            document.getElementById("time_of").style.display = "block";
                            break;

                        case 'Defibrillation/Cardioversion':
                            document.getElementById("defitime").style.display = "block";
                            break;

                        case 'Medication Administered':
                            document.getElementById("medication").style.display = "block";
                            break;

                        case 'IV Established Fluid':
                            document.getElementById("established").style.display = "block";
                            document.getElementById("establishedg").style.display = "block";
                            break;

                        case 'Bleeding/Hemorrhage Controlled':
                            document.getElementById("bleeding").style.display = "block";
                            break;

                        case 'Spinal Immobilization Neck and Back':
                            document.getElementById("spinal").style.display = "block";
                            break;

                        default:
                            document.getElementById("tubesize").style.display = "none";
                            document.getElementById("levelsize").style.display = "none";
                            document.getElementById("administered").style.display = "none";
                            document.getElementById("lpm").style.display = "none";
                            document.getElementById("suction").style.display = "none";
                            document.getElementById("artificial").style.display = "none";
                            document.getElementById("cpr").style.display = "none";
                            document.getElementById("time_of").style.display = "none";
                            document.getElementById("defitime").style.display = "none";
                            document.getElementById("medication").style.display = "none";
                            document.getElementById("established").style.display = "none";
                            document.getElementById("establishedg").style.display = "none";
                            document.getElementById("bleeding").style.display = "none";
                            document.getElementById("spinal").style.display = "none";
                                     }
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $('#patient_disposition').change(function(){
                    var disposition = $('#patient_disposition').val();
                    switch (disposition) {
                        case 'Treated and Released / transferred care':
                            document.getElementById("agency").style.display = "block";
                            break;

                        default:
                            document.getElementById("agency").style.display = "none";
                                     }
                });
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
