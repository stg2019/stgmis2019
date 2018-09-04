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
                    <li><a href="javascript:;">Data Entry</a></li>
                    <li class="active">Users</li>
                </ol>
                <h1 class="page-header">               
                    <button type = "button" class = "btn btn-md btn-success update_dispatch" value="<?php echo $_GET['dispatch_id']; ?>">Save Changes</button>
                    <a href="dispatchment.php" class="btn btn-md btn-white ">Back</a>
                </h1>
                <div id="alert" class="alert alert-success" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">Edit Dispatch</h4>
                                <?php
                                $query = $conn->query("SELECT * FROM `dispatch` WHERE `dispatch_id` = '$_GET[dispatch_id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                ?>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Service Number</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $fetch['service_no']; ?>" id="uservice_no<?php echo $fetch['dispatch_id']; ?>" name="service_no" placeholder="Enter Service Number" required/>
                                        </div>
                                        <div class="form-group ">
                                            <label >Date and Time of Call</label>
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" value="<?php echo $fetch['date_time_call']; ?>" id="udate_time_call<?php echo $fetch['dispatch_id']; ?>" name="date_time_call" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label >Ambulance</label>
                                            <select class="form-control selectpicker input-sm" data-style="btn-white" id="uambulance<?php echo $fetch['dispatch_id']; ?>" name="ambulance">
                                                <option value="<?php echo $fetch['ambulance']; ?>"><?php echo $fetch['ambulance']; ?></option>
                                                <option value="Samaritan 1">Samaritan 1</option>
                                                <option value="Samaritan 2">Samaritan 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >Dispatched for</label>
                                            <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="udispatched_for<?php echo $fetch['dispatch_id']; ?>" name="dispatched_for">
                                                <optgroup label="Cardiovascular">
                                                    <option value="<?php echo $fetch['dispatched_for']; ?>"><?php echo $fetch['dispatched_for']; ?></option>
                                                    <option value="Stroke/CVA">Stroke/CVA</option>
                                                    <option value="Cardiac Related">Cardiac Related</option>
                                                    <option value="Hypertension">Hypertension</option>
                                                </optgroup>
                                                <optgroup label="Respiratory">
                                                    <option value="Airway Obstruction">Airway Obstruction</option>
                                                    <option value="Respiratory Distress">Respiratory Distress</option>
                                                    <option value="Respiratory Arrest">Respiratory Arrest</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >Care in Progress</label>
                                            <select class="form-control selectpicker input-sm" data-style="btn-white" id="ucare_in_progress<?php echo $fetch['dispatch_id']; ?>" name="care_in_progress">
                                                <option value="<?php echo $fetch['care_in_progress']; ?>"><?php echo $fetch['care_in_progress']; ?></option>
                                                <option value="None">None</option>
                                                <option value="Citizen">Citizen</option>
                                                <option value="Medical Practicioner / First Aider">Medical Practicioner / First Aider</option>
                                                <option value="Other Rescue Unit">Other Rescue Unit</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >MOI/NOI</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $fetch['moi_noi']?>" id="umoi_noi<?php echo $fetch['dispatch_id']; ?>" name="moi_noi" placeholder="Enter MOI/NOI" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Number of patients on-scene</label>
                                            <input type="number" class="form-control input-sm" value="<?php echo $fetch['patients_on_scene']?>" id="upatients_on_scene<?php echo $fetch['dispatch_id']; ?>" name="patients_on_scene" placeholder="Enter Number of patients on-scene" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>On Board : TL</label>
                                            <input type="number" class="form-control input-sm" value="<?php echo $fetch['on_board_tl']?>" id="uon_board_tl<?php echo $fetch['dispatch_id']; ?>" name="on_board_tl" placeholder="Enter On Board : TL" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>EMS</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $fetch['ems']?>" id="uems<?php echo $fetch['dispatch_id']; ?>" name="ems" placeholder="Enter EMS" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Driver</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $fetch['driver']?>" id="udriver<?php echo $fetch['dispatch_id']; ?>" name="driver" placeholder="Enter Driver" required/>
                                        </div>
                                        <div class="form-group">
                                            <label >Call Location</label>
                                            <input type="text" class="form-control input-sm" value="<?php echo $fetch['call_location']; ?>" id="ucall_location<?php echo $fetch['dispatch_id']; ?>" name="ucall_location" placeholder="Enter Call Location" required/>
                                        </div>
                                        <div class="form-group">
                                            <label >Mass Casualty</label>
                                            <select class="form-control selectpicker input-sm" data-style="btn-white" id="umass_casualty<?php echo $fetch['dispatch_id']; ?>" name="mass_casualty">
                                                <option value="<?php echo $fetch['mass_casualty']; ?>"><?php echo $fetch['mass_casualty']; ?></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php require 'require/sidepanel.php'?>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>







        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="functions/cruddispatch.js"></script>
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
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script>
            var placesAutocomplete = places({
                container: document.querySelector('#call_location')
            });
        </script>
    </body>
</html>
