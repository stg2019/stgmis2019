
<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="admin/assets/img/admin.png" alt="drrmologo" /></a>
                </div>
                <div class="info">
                    <?php echo $find['username']?>
                    <small>Administrator</small>
                </div>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li><a href="dashboard.php"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right "></b>
                    <i class="fa fa-inbox"></i> 
                    <span>Data Entry</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="users.php">Users</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right "></b>
                    <i class="fa fa-cubes"></i> 
                    <span>Transactions</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="dispatchment.php">Dispatch</a></li>
                </ul>
            </li>
            
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
