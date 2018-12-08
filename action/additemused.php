<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $medical_supply_name=$_POST['medical_supply_name'];
    $quantity_used=$_POST['quantity_used'];
    $dispatch_id = $_POST['dispatch_id'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `items_used` VALUES('', '$dispatch_id', '$medical_supply_name', '$quantity_used')") or die(mysqli_error());

    $conn->query("UPDATE `medical_supply_stocks_emt` SET `running_balance` = `running_balance` - '$quantity_used' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Used $quantity_used $medical_supply_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>