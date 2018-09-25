<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="dashboard.php" class="navbar-brand">DRRMO MIS</a>
            <button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
                <span class="fa-stack fa-lg text-inverse">
                    <span class="fa fa-bars"></span>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse pull-left" id="top-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-desktop fa-fw"></i> Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-file fa-fw"></i> Master File <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="mastercalllog.php">Call Log Record</a></li>
                        <li><a href="masterdispatchment.php">Dispatchment Record</a></li>
                        <li><a href="masterpatient.php">Patient Record</a></li>
                        <li><a href="masterrefusaltreatment.php">Refusal for Treatment Record</a></li>
                        <li><a href="masterrequesttransport.php">Request for Transport Record</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-database fa-fw"></i> Transactions <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="calllogs.php">Call Logs</a></li>
                        <li><a href="dispatchment.php">Dispatchment</a></li>
                        <li><a href="assessmentlist.php">Assessment</a></li>
                        <li><a href="refusaltreatment.php">Refusal of Treatment</a></li>
                        <li><a href="requesttransport.php">Request for Transport</a></li>
                        <li><a href="inventory.php">Inventory</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <?php 
        require 'require/dbconnection.php';
        $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <i class="fa fa-bell-o"></i>
                    <span class="label">5</span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports</h6>
                                <div class="text-muted f-s-11">3 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><img src="assets/img/ndrrmo/surgeon.png" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">25 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">Olivia</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">35 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted f-s-11">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted f-s-11">2 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/ndrrmo/logo.png" alt="" /> 
                    <span class="hidden-xs"><?php echo $find['username']?></span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li class="arrow"></li>
                    <li><a href="javascript:;">Edit Profile</a></li>
                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li><a href="javascript:;">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="#logout" data-toggle="modal">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>




<div class="modal fade" id="logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Log out current session?</h4>
            </div>
            <div class="modal-body">
                <form id="userform">
                    <p>Are you sure you want to log out?</p>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <div id="note" style="float:left;"></div>
                <a href="action/logout.php" class="btn btn-sm btn-success" >Confirm</a>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>