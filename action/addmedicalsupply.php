<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $admin_id = $_POST['admin_id'];
    $medical_supply_name = $_POST['medical_supply_name'];
    $unit_of_issue = $_POST['unit_of_issue'];
    $item_code = $_POST['item_code'];
    date_default_timezone_set('Asia/Manila');
    $date_created=date("F j, Y");

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `medical_supply_stocks` VALUES('', '$admin_id', '$medical_supply_name', '$unit_of_issue', '$item_code', '0', 'Reorder', '$date_created')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Medical Supply - $medical_supply_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>