<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $plate_no = $_POST['plate_no'];
    $vehicle_name = $_POST['vehicle_name'];
   
    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `ambulance` VALUES('', '$plate_no', '$vehicle_name', 'Unbook')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added $vehicle_name as New Ambulance','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>