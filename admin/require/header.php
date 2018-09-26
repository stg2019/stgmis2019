<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="admindashboard.php" class="navbar-brand"> DRRMO MIS</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <?php 
        require 'require/dbconnection.php';
        $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <?php
                    date_default_timezone_set('Asia/Manila');
                    $date_today = date('F j, Y');
                    $query2 = $conn->query("SELECT COUNT(*) as total FROM `request_transport` WHERE `date_created` = '$date_today'") or die(mysqli_error());
                    $fetch2 = $query2->fetch_array();
                    ?>
                    <i class="fa fa-map-marker"></i>
                    <span class="label"><?php echo $fetch2['total']?></span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Request for Transport (<?php echo $fetch2['total']?>)</li>
                    <?php 
    $query3 = $conn->query("SELECT * FROM `request_transport` where `date_created` = '$date_today' limit 5") or die(mysqli_error());
                        while($fetch3 = $query3->fetch_array()){
                    ?>

                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-map-marker media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"><?php echo $fetch3['patient_name']?></h6>
                                <p><?php echo $fetch3['address']?></p>
                                <div class="text-muted f-s-11"><?php echo $fetch3['date_time']?></div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }

                    ?>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <?php
                    $query2 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `date_created` = '$date_today'") or die(mysqli_error());
                    $fetch2 = $query2->fetch_array();
                    date_default_timezone_set('Asia/Manila');
                    $time=date('g:i a');
                    $currentTime = $fetch2['date_created'];
                    $toTime = strtotime($currentTime);

                    //And the time the notification was set
                    $fromTime = strtotime($time);

                    //Now calc the difference between the two
                    $timeDiff = floor(abs($toTime - $fromTime) / 60);

                    //Now we need find out whether or not the time difference needs to be in
                    //minutes, hours, or days
                    if ($timeDiff < 2) {
                        $timeDiff = "Just now";
                    } elseif ($timeDiff > 2 && $timeDiff < 60) {
                        $timeDiff = floor(abs($timeDiff)) . " minutes ago";
                    } elseif ($timeDiff > 60 && $timeDiff < 120) {
                        $timeDiff = floor(abs($timeDiff / 60)) . " hour ago";
                    } elseif ($timeDiff < 1440) {
                        $timeDiff = floor(abs($timeDiff / 60)) . " hours ago";
                    } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
                        $timeDiff = floor(abs($timeDiff / 1440)) . " day ago";
                    } elseif ($timeDiff > 2880) {
                        $timeDiff = floor(abs($timeDiff / 1440)) . " days ago";
                    }
                    ?>
                    <i class="fa fa-ambulance"></i>
                    <span class="label"><?php echo $fetch2['total']?></span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Dispatchment (<?php echo $fetch2['total']?>)</li>
                    <?php 
    $query3 = $conn->query("SELECT * FROM `dispatch` where `date_created` = '$date_today' limit 5") or die(mysqli_error());
                        while($fetch3 = $query3->fetch_array()){
                    ?>

                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-ambulance media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"><?php echo $fetch3['dispatched_for']?></h6>
                                <p><?php echo $fetch3['call_location']?></p>
                                <div class="text-muted f-s-11"><?php echo $timeDiff?></div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }

                    ?>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li>
            <!--
<li class="dropdown">
<?php
date_default_timezone_set('Asia/Manila');
$date_today = date('F j, Y');
$query2 = $conn->query("SELECT COUNT(*) as total FROM `users` WHERE `date_created` = '$date_today'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();
?>
<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
<i class="fa fa-group"></i>
<div class="badgeuser"></div>
</a>
<ul class="dropdown-menu media-list pull-right animated fadeInDown">
<div class="notificationnewuser"></div>
</ul>
</li>
-->
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../assets/img/ndrrmo/logo.png" alt="" /> 
                    <span class="hidden-xs"><?php echo $find['complete_name']?></span> <b class="caret"></b>
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
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
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
                <a href="../action/logout.php" class="btn btn-sm btn-success" >Confirm</a>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>