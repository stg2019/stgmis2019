<!DOCTYPE html>

<?php
require '../require/logincheck.php';
function getstatus($status){
    if($status == '0'){
        return "Not Active";
    }else{
        return "Active";
    }
}
?>
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
        <title>DRRMO | Bacolod City</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
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
                    <li><a href="javascript:;">System Maintenance</a></li>
                    <li class="active">User Management</li>
                </ol>
                <h1 class="page-header">User Management</h1>
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <button id="btn_delete" name="btn_delete" class="btn btn-primary">Delete</button>
                                <button id="btn_activate" name="btn_activate" class="btn btn-primary">Activate</button>
                                <button id="btn_deactivate" name="btn_deactivate" class="btn btn-primary">Deactivate</button>
                            </div>    
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary" >
                                <div class="panel-heading ">
                                    <h4 class="panel-title">List of Dispatchment</h4>
                                </div>
                                <div class="panel-body">
                                    <table id="data-table" class="table table-hover table-condensed" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>User Role</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'require/dbconnection.php';  
            //  require '../modals/managepassword.php';
            $query = $conn->query("select * from `users` where `user_role` = 'EMT'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>
                                                <td><input type="checkbox" name="user_id[]" class="delete_user" value="<?php echo $fetch["user_id"]; ?>" /></td>
                                                <td><?php echo $fetch['username']?></td>
                                                <td>*************</td>
                                                <td><?php echo $fetch['user_role']?></td>
                                                <td><?php echo getstatus($fetch['status'])?></td>
                                                <td><center><a href="updateaccount.php?user_id=<?php echo $fetch['user_id']?>" class="btn btn-sm btn-primary">Update Account</a></center></td>
                                            </tr>   
                                            <?php
            }
            $conn->close();

                                            ?>
                                        </tbody>
                                    </table>   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- end row -->
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
        <script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>
        <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/js/table-manage-default.demo.min.js"></script>
        <script src="../assets/js/apps.min.js"></script>
        <script src="../functions/crudusermanagement.js"></script>
        <script>
            $("#users").validate({
                ignore: [],
                rules: {
                    password: {
                        minlength: 6,
                        maxlength: 10
                    },
                    'confirm_password': {
                        minlength: 6,
                        maxlength: 10,
                        equalTo: "#password"
                    }
                }
            });
        </script>
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
