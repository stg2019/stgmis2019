<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
    date_default_timezone_set('Asia/Manila');
    $date_today = date('F j, Y');
    $query2 = $conn->query("SELECT COUNT(*) as total FROM `users` WHERE `date_created` = '$date_today'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
?>

<li class="dropdown-header">Notifications (<?php echo $fetch2['total']?>)</li>
<?php 

        $query3 = $conn->query("SELECT * FROM `users` WHERE `date_created` = '$date_today' limit 5") or die(mysqli_error());
    while($fetch3 = $query3->fetch_array()){
?>

<li class="media">
    <a href="javascript:;">
        <div class="media-left"><span class="fa fa-user fa-3x"></span></div>
        <div class="media-body">
            <h6 class="media-heading"> New User Created</h6>
            <div class="text-muted f-s-11"><?php echo $fetch3['complete_name']?></div>
            <div class="text-muted f-s-11"><?php echo $fetch3['time_created']?></div>
        </div>
    </a>
</li>
<?php
                                           }
    $conn->close();
?>

<li class="dropdown-footer text-center">
    <a href="javascript:;">View more</a>
</li>
<?php
}

?>