<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $driver_id = $_POST['driver_id'];
    $driver_name = $_POST['driver_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact_number = $_POST['contact_number'];
    $home_address = $_POST['home_address'];
    $duty_hours = $_POST['duty_hours'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `driver` SET `driver_name` = '$driver_name', `age` = '$age', `gender` = '$gender', `contact_number` = '$contact_number', `home_address` = '$home_address', `duty_hours` = '$duty_hours' WHERE `driver_id` = '$driver_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Edited Driver Information of $driver_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>