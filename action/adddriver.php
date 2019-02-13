<?php
require '../require/logincheck.php';

// ang tanan na gna pang type sa form ka driver gna insert sa database. Meaning ka post isave ang gn type ka user sa amu na nga field.
// basta dollar sign meaning declare variables lang na sa.
// after ma post ang mga fields nga gn typan, ma query dayun nga insert to 'driver' nga table.

if(isset($_POST['add'])){
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

    $conn->query("INSERT INTO `driver` VALUES('', '$driver_name', '$age', '$gender', '$contact_number', '$home_address', '$duty_hours', 'Unbook')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added $driver_name as New Driver','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>