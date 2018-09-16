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
            <li>
                <form class="navbar-form full-width">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <?php
                date_default_timezone_set('Asia/Manila');
                $date_today = date('F j, Y');
                $query2 = $conn->query("SELECT COUNT(*) as total FROM `users` WHERE `date_created` = '$date_today'") or die(mysqli_error());
                $fetch2 = $query2->fetch_array();
                ?>
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <i class="fa fa-bell-o"></i>
                        <div class="badgeuser"></div>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <div class="notificationnewuser"></div>
                </ul>
            </li>
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
                    <li><a href="../action/logout.php">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div>