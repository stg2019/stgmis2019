<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    $dispatch_id = $_POST['dispatch_id'];
    $driver = $_POST['driver'];
    $ambulance = $_POST['ambulance'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `driver` SET `status` = 'Unbook' WHERE `driver_name` = '$driver'") or die(mysqli_error());

    $conn->query("UPDATE `ambulance` SET `status` = 'Unbook' WHERE `vehicle_name` = '$ambulance'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Ended Dispatchment Driver','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>