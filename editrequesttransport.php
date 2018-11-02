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
        
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>	
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li><a href="requesttransport.php">Request for Transport</a></li>
                    <li class="active">Edit Request for Transport</li>
                </ol>
                <h1 class="page-header">               
                    <button type = "button" class = "btn btn-md btn-success update_request_transport" value="<?php echo $_GET['request_transport_id']; ?>">Save Changes</button>
                    <a href="#" onclick="goBack()" class="btn btn-md btn-white ">Back</a>
                </h1>
                <div id="alert" class="alert alert-success" style="display:none;">
                    <center><span id="alerttext"></span></center>
                </div>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info" >
                            <div class="panel-heading ">
                                <h4 class="panel-title">Edit Request Transport</h4>
                                <?php
                                $query = $conn->query("SELECT * FROM `request_transport` WHERE `request_transport_id` = '$_GET[request_transport_id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                ?>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label >Date and Time</label>
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" value="<?php echo $fetch['date_time']; ?>" id="udate_time<?php echo $fetch['request_transport_id']; ?>" name="date_time" class="form-control input-sm date_time" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label >Requesting Party</label>
                                            <input type="text" class="form-control input-sm requesting_party" value="<?php echo $fetch['requesting_party']; ?>" id="urequesting_party<?php echo $fetch['request_transport_id']; ?>" name="requesting_party" placeholder="Enter Requesting Pary" required/>
                                        </div>
                                        <div class="form-group">
                                            <label >Contact Number</label>
                                            <input type="text" class="form-control input-sm contact_no" value="<?php echo $fetch['contact_no']; ?>" id="ucontact_no<?php echo $fetch['request_transport_id']; ?>" name="contact_no" placeholder="Enter Contact Number" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Patient Name</label>
                                            <input type="text" class="form-control input-sm patient_name" value="<?php echo $fetch['patient_name']; ?>" id="upatient_name<?php echo $fetch['request_transport_id']; ?>" name="patient_name" placeholder="Enter Patient Name" required/>
                                        </div>
                                        <div class="form-group">
                                            <label >Address</label>
                                            <input type="text" class="form-control input-sm address" value="<?php echo $fetch['address']; ?>" id="uaddress<?php echo $fetch['request_transport_id']; ?>" name="address" placeholder="Enter Address" required/>
                                        </div>

                                        <div class="form-group">
                                            <label >Age and Gender</label>
                                            <div class="row row-space-12">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm age" value="<?php echo $fetch['age']; ?>" id="uage<?php echo $fetch['request_transport_id']; ?>" name="age" placeholder="Enter Age" />
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control selectpicker input-sm gender" data-style="btn-white" id="ugender<?php echo $fetch['request_transport_id']; ?>" name="gender">
                                                        <option value="<?php echo $fetch['gender']; ?>"><?php echo $fetch['gender']; ?></option>
                                                        <option value="Male">Male </option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Medical History</label>
                                            <input type="text" class="form-control input-sm medical_history" value="<?php echo $fetch['medical_history']; ?>" id="umedical_history<?php echo $fetch['request_transport_id']; ?>" name="medical_history" placeholder="Enter Patient Medical History" required/>
                                        </div>
                                        <div class="form-group">
                                            <label >Special Considerations for attached:</label>
                                            <select class="form-control selectpicker input-sm special_considerations" data-style="btn-white" id="uspecial_considerations<?php echo $fetch['request_transport_id']; ?>" name="special_considerations">
                                                <option value="<?php echo $fetch['special_considerations']; ?>"><?php echo $fetch['special_considerations']; ?></option>
                                                <option value="NGT">NGT</option>
                                                <option value="Catheter">Catheter</option>
                                                <option value="Chest Tube Drainage">Chest Tube Drainage</option>
                                                <option value="Colostomy">Colostomy</option>
                                                <option value="Endo Tracheal Tube">Endo Tracheal Tube</option>
                                                <option value="02">02</option>
                                                <option value="IV">IV</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >Destination</label>
                                            <input type="text" class="form-control input-sm froma" value="<?php echo $fetch['froma']; ?>" id="ufroma<?php echo $fetch['request_transport_id']; ?>" name="froma" placeholder="From" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm toa" value="<?php echo $fetch['toa']; ?>" id="utoa<?php echo $fetch['request_transport_id']; ?>" name="toa" placeholder="To" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm fromb" value="<?php echo $fetch['fromb']; ?>" id="ufromb<?php echo $fetch['request_transport_id']; ?>" name="fromb" placeholder="From" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >GCS and BP</label>
                                            <div class="row row-space-12">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm gcs" value="<?php echo $fetch['gcs']; ?>" id="ugcs<?php echo $fetch['request_transport_id']; ?>" name="gcs" placeholder="Enter GCS" required/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm bp" value="<?php echo $fetch['bp']; ?>" id="ubp<?php echo $fetch['request_transport_id']; ?>" name="bp" placeholder="Enter BP" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label >RR and PR</label>
                                            <div class="row row-space-12">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm rr" value="<?php echo $fetch['rr']; ?>" id="urr<?php echo $fetch['request_transport_id']; ?>" name="rr" placeholder="Enter RR" required/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm pr" value="<?php echo $fetch['pr']; ?>" id="upr<?php echo $fetch['request_transport_id']; ?>" name="pr" placeholder="Enter PR" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label >02 Sat</label>
                                            <input type="text" class="form-control input-sm sat" value="<?php echo $fetch['sat']; ?>" id="usat<?php echo $fetch['request_transport_id']; ?>" name="sat" placeholder="Enter 02 Sat" required/>
                                        </div>
                                        <div class="form-group">
                                            <label >Requesting Approval and Approval</label>
                                            <div class="row row-space-12">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm requesting_approval" value="<?php echo $fetch['requesting_approval']; ?>" id="urequesting_approval<?php echo $fetch['request_transport_id']; ?>" name="requesting_approval" placeholder="Enter Requesting Approval" required/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-sm approval" value="<?php echo $fetch['approval']; ?>" id="uapproval<?php echo $fetch['request_transport_id']; ?>" name="approval" placeholder="Enter Approval" required/>
                                                </div>
                                            </div>
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
        <script type="text/javascript" src="functions/crudrequesttransport.js"></script>
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
            var placesAutocomplete = places({
                container: document.querySelector('.address')
            });
        </script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </body>
</html>
