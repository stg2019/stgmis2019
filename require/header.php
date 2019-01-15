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
                        <li><a href="masterambulance.php">Ambulance</a></li>
                        <li><a href="mastercalllog.php">Call Log Record</a></li>
                        <li><a href="masterdispatchment.php">Dispatchment Record</a></li>
                        <li><a href="masterdriver.php">Drivers</a></li>
                        <li><a href="masterpatient.php">Patient Record</a></li>
                        <!-- <li><a href="masterrefusaltreatment.php">Refusal of Treatment Record</a></li> -->
                        <!-- <li><a href="masterrequesttransport.php">Request of Transport Record</a></li> -->
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
                        <li><a href="requesttransport.php">Request of Transport</a></li>
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
            <li>
                <a href="#">
                    <span class="text text-info" id="currentTime"></span> - <span class="text text-info" id="day"></span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <?php

                    $query2 = $conn->query("SELECT *, COUNT(*) as total FROM `medical_supply_stocks_emt` where `running_balance` <= 15") or die(mysqli_error());
                    $fetch2 = $query2->fetch_array();

                    //echo $timestamp. '<br>';
                    //echo $new_date_format;
                    ?>
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="label"><?php echo $fetch2['total']?></span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Running out of Balance (<?php echo $fetch2['total']?>)</li>
                    <?php 
    $query3 = $conn->query("SELECT * FROM `medical_supply_stocks_emt` where `running_balance` <= 15 order by `stock_id` DESC limit 5") or die(mysqli_error());
                        while($fetch3 = $query3->fetch_array()){
                    ?>

                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-exclamation-triangle media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"><?php echo $fetch3['medical_supply_name']?></h6>
                                <p>Supplier: <?php echo $fetch3['supplier']?></p>
                                <div class="text-muted f-s-11">Running Balance: <?php echo $fetch3['running_balance']?></div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }

                    ?>
                    <li class="dropdown-footer text-center">
                        <a href="inventory.php">View Inventory</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <?php

                    $query2 = $conn->query("SELECT *, COUNT(*) as total FROM `medical_supply_request` where `status` = 'Approved'") or die(mysqli_error());
                    $fetch2 = $query2->fetch_array();

                    //echo $timestamp. '<br>';
                    //echo $new_date_format;
                    ?>
                    <i class="fa fa-medkit"></i>
                    <span class="label"><?php echo $fetch2['total']?></span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Approved Requested Supplies (<?php echo $fetch2['total']?>)</li>
                    <?php 
    $query3 = $conn->query("SELECT * FROM `medical_supply_request` where `status` = 'Approved' order by `medical_supply_request_id` DESC limit 5") or die(mysqli_error());
                        while($fetch3 = $query3->fetch_array()){
                            date_default_timezone_set("Asia/Manila");     
                            $date_approved = $fetch3['date_approved'];
                            $timestamp = strtotime($date_approved);
                            $new_date_format = date('Y-m-d g:i:s a', $timestamp);
                    ?>

                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-medkit media-object bg-green"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"><?php echo $fetch3['medical_supply_name']?></h6>
                                <p>Requested Quantity: <?php echo $fetch3['requested_quantity']?></p>
                                <div class="text-muted f-s-11"><?php echo time_ago_in_php($new_date_format);?></div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }

                    ?>
                    <li class="dropdown-footer text-center">
                        <a href="inventory.php">View Inventory</a>
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
                            <div class="media-left"><i class="fa fa-ambulance media-object bg-green"></i></div>
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
                        <a href="masterdispatchment.php">View more</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/ndrrmo/logo.png" alt="" /> 
                    <span class="hidden-xs"><?php echo $find['complete_name']?></span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInDown">
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