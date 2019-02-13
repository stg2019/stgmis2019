<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $stock_id = $_POST['stock_id'];
    $item_code = $_POST['item_code'];
    $medical_supply_name = $_POST['medical_supply_name'];
    $unit_of_issue = $_POST['unit_of_issue'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `medical_supply_stocks` SET `item_code` = '$item_code', `medical_supply_name` = '$medical_supply_name', `unit_of_issue` = '$unit_of_issue' WHERE `stock_id` = '$stock_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Edited Medical Supply - $medical_supply_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>