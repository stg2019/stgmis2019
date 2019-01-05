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

                    $query2 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch`") or die(mysqli_error());
                    $fetch2 = $query2->fetch_array();



                    //echo $timestamp. '<br>';
                    //echo $new_date_format;
                    ?>
                    <i class="fa fa-ambulance"></i>
                    <span class="label"><?php echo $fetch2['total']?></span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Dispatchment (<?php echo $fetch2['total']?>)</li>
                    <?php 
    $query3 = $conn->query("SELECT * FROM `dispatch` order by `dispatch_id` DESC limit 5") or die(mysqli_error());
                        while($fetch3 = $query3->fetch_array()){
                            date_default_timezone_set("Asia/Manila");     
                            $date_created = $fetch3['date_created'];
                            $timestamp = strtotime($date_created);
                            $new_date_format = date('Y-m-d g:i:s a', $timestamp);
                    ?>

                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-ambulance media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"><?php echo $fetch3['dispatched_for']?></h6>
                                <p><?php echo $fetch3['call_location']?></p>
                                <div class="text-muted f-s-11"><?php echo time_ago_in_php($new_date_format);?></div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }

                    ?>
                    <li class="dropdown-footer text-center">
                        <a href="notificationsdispatchment.php">View more</a>
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
                    <li><a href="myaccount.php">Edit Account</a></li>
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


<?php
    function time_ago_in_php($timestamp){
    date_default_timezone_set("Asia/Manila");         
    $time_ago        = strtotime($timestamp);
    $current_time    = time();
    $time_difference = $current_time - $time_ago;
    $seconds         = $time_difference;

    $minutes = round($seconds / 60); // value 60 is seconds  
    $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
    $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
    $weeks   = round($seconds / 604800); // 7*24*60*60;  
    $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
    $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
    if ($seconds <= 60){

        return "Just Now";

    } else if ($minutes <= 60){
        if ($minutes == 1){

            return "one minute ago";

        } else {
            return "$minutes minutes ago";
        }
    } else if ($hours <= 24){

        if ($hours == 1){

            return "an hour ago";

        } else {

            return "$hours hours ago";

        }

    } else if ($days <= 7){
        if ($days == 1){

            return "yesterday";

        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4.3){

        if ($weeks == 1){

            return "a week ago";

        } else {

            return "$weeks weeks ago";

        }

    } else if ($months <= 12){
        if ($months == 1){

            return "a month ago";

        } else {
            return "$months months ago";
        }
    } else {

        if ($years == 1){

            return "one year ago";

        } else {

            return "$years years ago";

        }
    }
}
?>