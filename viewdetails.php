<?php
require 'require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DRRMO | Bacolod City</title>
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
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>

            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="dispatchment.php">Dispatchment</a></li>
                    <li class="active">Patient Assessment</li>
                </ol>
                <h1 class="page-header hidden-print">Patient Assessment</h1>

                <div class="row">
                    <form id="patientform" name="patientform">
                        <div class="col-md-4">
                            <div class="panel panel-info" >
                                <div class="panel-heading ">
                                    <h4 class="panel-title">Add Patient</h4>
                                    <?php
    $query = $conn->query("SELECT * FROM `dispatch` WHERE `dispatch_id` = '$_GET[dispatch_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
                                    ?>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <div id="modallabel" class="alert alert-danger" style="display:none;">
                                            <center><span id="checkfield"></span></center>
                                        </div>
                                    </center>
                                    <div id="pname_response"></div>
                                    <input type="hidden" class="form-control input-sm" id="dispatch_id" name="dispatch_id" value="<?php echo $fetch['dispatch_id']?>"/>
                                    <div class="form-group">
                                        <label >Patient Name</label>
                                        <input type="text" class="form-control input-sm" id="patient_name" name="patient_name" placeholder="Enter Patient Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label >Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp; Gender</label>
                                        <div class="row row-space-10">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  id="age" name="age" readonly/>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control selectpicker input-sm" data-style="btn-white" id="gender" name="gender">
                                                    <option value="" selected disabled>Select Gender</option>
                                                    <option value="Male">Male </option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp; Contact Number</label>
                                        <div class="row row-space-12">
                                            <div class="col-md-6">
                                                <div class="input-group date" id="datepicker-autoClose">
                                                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  id="contact_no" name="contact_no" placeholder="Enter Contact Number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Home Address</label>
                                        <input type="text" class="form-control input-sm" id="home_address" name="home_address" placeholder="Enter Home Address" required/>
                                    </div>
                                    <div class="form-group">
                                        <label >Next to Kin</label>
                                        <input type="text" class="form-control input-sm" id="next_to_kin" name="next_to_kin" placeholder="Enter Next to Kin" required/>
                                    </div>
                                    <div class="form-group">
                                        <label >Relationship</label>
                                        <input type="text" class="form-control input-sm" id="relationship" name="relationship" placeholder="Enter Relationship" required/>
                                    </div>
                                    <div class="form-group">
                                        <label >Directives</label>
                                        <select class="form-control selectpicker input-sm" data-style="btn-white" id="directives" name="directives">
                                            <option value="" selected disabled>Select Directives</option>
                                            <option value="None">None</option>
                                            <option value="Allergies">Allergies </option>
                                            <option value="DNR">DNR</option>
                                            <option value="Organ Donor">Organ Donor</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <button type="button" value="<?php echo $_GET['dispatch_id']; ?>" id="addnew" class="btn btn-sm btn-success m-r-5 addnew">Add</button>
                                    <a href="dispatchment.php" class="btn btn-sm btn-white">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-8">
                        <div class="panel panel-info panel-with-tabs" data-sortable-id="ui-widget-9">
                            <div class="panel-heading">
                                <ul id="myTab" class="nav nav-tabs pull-right">
                                    <li class="active"><a href="#home" data-toggle="tab"><span class="hidden-xs">Patients</span></a></li>
                                    <li><a href="#profile" data-toggle="tab"><span class="hidden-xs">Medical Supplies Used</span></a></li>
                                    <li><a href="#end" data-toggle="tab"><span class="hidden-xs">End Dispatchment</span></a></li>
                                </ul>
                                <h4 class="panel-title">Service No : <?php echo $fetch['service_no']?></h4>
                            </div>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <div class="invoice">
                                        <div class="invoice-header">
                                            <div class="invoice-from">
                                                <address class="m-t-5 m-b-5">
                                                    <strong>Dispatch for <?php echo $fetch['dispatched_for']?></strong><br>
                                                    <small>Ambulance : <b><?php echo $fetch['ambulance']?></b></small> <br>
                                                    <small>Call Location : <b><?php echo $fetch['call_location']?></b></small> <br>
                                                    <small>Date and Time of Call : <b><?php echo $fetch['date_time_call']?></b></small>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="invoice-content">
                                            <div id="alert" class="alert alert-success" style="display:none;">
                                                <center><span id="alerttext"></span></center>
                                            </div>
                                            <div id="patientTable"></div>
                                        </div>
                                        <div class="invoice-footer text-muted">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <?php
    $query = $conn->query("SELECT * FROM `dispatch` WHERE `dispatch_id` = '$_GET[dispatch_id]'") or die(mysqli_error());
                                    $fetch = $query->fetch_array();
                                    ?>
                                    <div class="panel-body">
                                        <center>
                                            <div id="modallabelq" class="alert alert-danger" style="display:none;">
                                                <center><span id="checkfieldq"></span></center>
                                            </div>
                                        </center>
                                        <div class="form-group">
                                            <label >Medical Supply Name</label>
                                            <select  class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="medical_supply_name" name="medical_supply_name">
                                                <option value="0" selected disabled>Select</option>
                                                <?php
                                                require 'require/dbconnection.php';
                                                $query = $conn->query("SELECT * FROM `medical_supply_stocks` where running_balance >= 1") or die(mysqli_error());

                                                while($fetch = $query->fetch_array()){
                                                ?>
                                                <option value="<?php echo $fetch['medical_supply_name'];?>"><?php echo $fetch['medical_supply_name']?></option>
                                                <?php
                                                }
                                                ?> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >Quantity Used</label>
                                            <input type="text" class="form-control input-sm" id="quantity_used" name="quantity_used" placeholder="Enter Quantity Used" required/>
                                        </div>
                                        <hr>
                                        <button type="button" value="<?php echo $_GET['dispatch_id']; ?>" id="additem" class="btn btn-sm btn-success m-r-5">Add</button>
                                        <hr>
                                        <div class="invoice-content">
                                            <div id="alertq" class="alert alert-success" style="display:none;">
                                                <center><span id="alerttextq"></span></center>
                                            </div>
                                            <div id="itemTable"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="end">
                                    <div class="panel-body">
                                        <center>
                                            <?php
                                            date_default_timezone_set('Asia/Manila');
                                            $date_time=date("g:i a");
                                            ?>
                                            <div id="alerts" class="alert alert-success" style="display:none;">
                                                <center><span id="alerttexts"><?php echo "Dispatchment Ended Successfully at $date_time"?></span></center>
                                            </div>
                                        </center>
                                        <h5>Are you sure you want to end this dispatchment? This will update the status of Ambulance and Driver to</h5> <h5 class="text text-success">AVAILABLE on the next dispatchment.</h5>
                                        <?php
    $query = $conn->query("SELECT * FROM `dispatch` WHERE `dispatch_id` = '$_GET[dispatch_id]'") or die(mysqli_error());
                                                    $fetch = $query->fetch_array();
                                                    $ambulance = $fetch['ambulance'];


                                        ?>
                                        <input type="hidden" name="ambulance" id="ambulance" value="<?php echo $fetch['ambulance']?>"/>
                                        <input type="hidden" name="driver" id="driver" value="<?php echo $fetch['driver']?>"/>
                                        <button type="button" value="<?php echo $_GET['dispatch_id']; ?>" id="enddispatchment" class="btn btn-md btn-success m-r-5">Confirm</button>
                                        <hr>
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
    <script type="text/javascript" src="functions/crudpatient.js"></script>
    <script type="text/javascript" src="functions/enddispatchment.js"></script>
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
        $("#date_of_birth").change(function(){
            var date_of_birth = new Date($(this).val());
            var today = new Date();
            var age = Math.floor((today-date_of_birth) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age').val(age);
        });
    </script>
    </body>
</html>
