<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $patient_id = $_POST['patient_id'];
    // vital signs
    date_default_timezone_set('Asia/Manila');
    $time=date("g:i a");
    $loc=$_POST['loc'];
    $bp=$_POST['bp'];
    $sa=$_POST['sa'];
    $pr=$_POST['pr'];
    $rr=$_POST['rr'];
    $temp=$_POST['temp'];
    $rbs=$_POST['rbs'];
    $pupils=$_POST['pupils'];
    $skin=$_POST['skin'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `vital_signs` VALUES('', '$time', '$loc', '$bp', '$sa', '$pr', '$rr', '$temp', '$rbs', '$pupils', '$skin', '$patient_id')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added Vital Signs','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>