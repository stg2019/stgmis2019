<?php
require 'require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DRRMO MIS | Bacolod City</title>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"></script>
        <script src="assets/js/geocode.js"></script>
        <style>
            #map-canvas {
                height: 600px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <div id="page-container" class="fade page-without-sidebar page-header-fixed">
            <?php require 'require/header.php'?>

            <div id="content" class="content">
                <ol class="breadcrumb hidden-print pull-right">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#">Master File</a></li>
                    <li><a href="masterrequesttransport.php">Request of Transport Overview</a></li>
                    <li class="active">Overview</li>
                </ol>
                <h1 class="page-header hidden-print">Request for Transport Overview</h1>
                <?php
    $query = $conn->query("SELECT * FROM `request_transport` WHERE `request_transport_id` = '$_GET[request_transport_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
                ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="invoice">
                            <div class="invoice-company">
                                <span class="pull-right hidden-print">
                                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
                                </span>
                                <?php echo $fetch['date_time']?>
                            </div>
                            <div class="invoice-header">
                                <div class="invoice-from">
                                    <small>Name of Requesting Party</small>
                                    <address class="m-t-5 m-b-5">
                                        <strong><?php echo $fetch['requesting_party']?></strong><br />
                                        <?php echo $fetch['address']?> <br />
                                        <?php echo $fetch['contact_no']?>
                                    </address>
                                </div>
                            </div>
                            <div class="invoice-content">
                                <div class="table-responsive">
                                    <table class="table table-invoice">
                                        <thead>
                                            <tr>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Name of Patient : 
                                                    <strong><?php echo $fetch['patient_name']?></strong> <br /> 
                                                    Gender : 
                                                    <strong><?php echo $fetch['gender']?></strong> <br/> 
                                                    Age : 
                                                    <strong><?php echo $fetch['age']?></strong> <br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Medical History : 
                                                    <strong><?php echo $fetch['medical_history']?></strong> <br/>
                                                    Special Considerations for attached : 
                                                    <strong><?php echo $fetch['medical_history']?></strong> <br/>
                                                    GCS : 
                                                    <strong><?php echo $fetch['gcs']?></strong> <br/>
                                                    BP : 
                                                    <strong><?php echo $fetch['bp']?></strong> <br/>
                                                    02 Sat : 
                                                    <strong><?php echo $fetch['sat']?></strong> <br/>
                                                    PR : 
                                                    <strong><?php echo $fetch['pr']?></strong> <br/>
                                                    RR : 
                                                    <strong><?php echo $fetch['rr']?></strong> <br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    From : 
                                                    <strong><?php echo $fetch['froma']?></strong> <br/>
                                                    To : 
                                                    <strong><?php echo $fetch['toa']?></strong> <br/>
                                                    From : 
                                                    <strong><?php echo $fetch['fromb']?></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="invoice-price">
                                    <div class="invoice-price-left">
                                        <div class="invoice-price-row">
                                            <div class="sub-price">
                                                <small>REQUESTING APPROVAL</small>
                                                <?php echo $fetch['requesting_approval']?>
                                            </div>
                                            <div class="sub-price">
                                                <small>APPROVAL</small>
                                                <?php echo $fetch['approval']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- begin panel -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title"><!--<button class="btn btn-sm btn-white" onclick="codeAddress();" value="geocode">Show Destination</button>-->
                                    Transport Destination
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div id="map-canvas"></div>

                                <input type="hidden" id="route" placeholder="Street" value="<?php echo $fetch['address']?>"></input>
                            <input type="hidden" id="locality" placeholder="City" value="Bacolod City"></input>
                        <input type="hidden" id="administrative_area_level_1" placeholder="State" value="Negros Occidental"></input>
                    <input type="hidden" id="postal_code" placeholder="Postal Code" value="6100"></input>
                <input type="hidden" id="country" placeholder="Country" value="Philippines"></input>


        </div>
        </div>
    <!-- end panel -->
    </div>
</div>
<!-- end invoice -->
</div>
</div>
<?php require 'require/sidepanel.php'?>
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="functions/crudpatient.js"></script>
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
<script src="assets/js/apps.min.js"></script> <script src="assets/js/timedate.js"></script>

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
</body>
</html>
