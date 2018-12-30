<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $ambulance_id = $_POST['ambulance_id'];
    $plate_no = $_POST['plate_no'];
    $vehicle_name = $_POST['vehicle_name'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `ambulance` SET `plate_no` = '$plate_no', `vehicle_name` = '$vehicle_name' WHERE `ambulance_id` = '$ambulance_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Edited Ambulance Information of $vehicle_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>