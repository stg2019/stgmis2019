<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $medical_supply_name = $_POST['medical_supply_name'];
    $requested_quantity = $_POST['requested_quantity'];
    date_default_timezone_set('Asia/Manila');
    $date_requested=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `medical_supply_request` VALUES('', '$medical_supply_name', '$requested_quantity', '$date_requested', 'Pending', '$month', '$year', 'Pending')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Requested $requested_quantity $medical_supply_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>