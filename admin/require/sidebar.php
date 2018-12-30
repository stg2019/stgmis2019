<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="../assets/img/ndrrmo/logo.png" alt="" /></a>
                </div>
                <div class="info">
                    <span class="hidden-xs"><?php echo $find['complete_name']?></span>
                    <small><?php echo $find['user_role']?></small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li><a href="admindashboard.php"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-archive"></i>
                    <span>Master File</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="dispatchmentrecord.php">Dispatchment Record</a></li>
                    <li><a href="patientrecord.php">Patient Record</a></li>
                    <li><a href="refusaltreatmentrecord.php">Refusal for Treatment Record</a></li>
                    <li><a href="requesttransportrecord.php">Request for Transport Record</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-edit"></i>
                    <span>Data Entry</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="ambulance.php">Ambulance</a></li>
                    <li><a href="driver.php">Drivers</a></li>
                    <li><a href="emtaccount.php">EMT Account</a></li>
                    <li><a href="medicalsupplies.php">Medical Supplies</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-database"></i>
                    <span>Transactions</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="inventory.php">Inventory</a></li>
                    <li><a href="medicalsuppliesrequest.php">Medical Supplies Request</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="reportdispatchment.php">Dispatchment Report</a></li>
                    <li><a href="reportassessment.php">Assessment Report</a></li>
                    <li><a href="reportrequesttransport.php">Request for Transport Report</a></li>
                    <li><a href="reportrefusaltreatment.php">Refusal of Treatment Report</a></li>
                    <li><a href="reportsinventory.php">Inventory Report</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cogs"></i>
                    <span>System Maintenance</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="myaccount.php">Admin Management</a></li>
                    <li><a href="usermanagement.php">User Management</a></li>
                    <li><a href="systembackup.php">System Backup</a></li>
                    <li><a href="usersactivity.php">Users Activity Log</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>