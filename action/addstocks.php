<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $medical_supply_name = $_POST['medical_supply_name'];
    $number_of_stocks = $_POST['number_of_stocks'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");
    require '../require/dbconnection.php';

    $conn->query("UPDATE `medical_supply_stocks` SET `running_balance` = `running_balance` + '$number_of_stocks' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Stocks $number_of_stocks $medical_supply_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>