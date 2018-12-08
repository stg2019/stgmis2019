<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){

    $signed = $_POST['signed'];
    $witness1 = $_POST['witness1'];
    $witness2 = $_POST['witness2'];
    $date_incident = $_POST['date_incident'];
    $statements = $_POST['statements'];
    $attachment = $_POST['attachment'];
    $prepared_by = $_POST['prepared_by'];
    date_default_timezone_set('Asia/Manila');
    $month = date("M");
    $year = date("Y");

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `refusal_treatment` VALUES('', '$signed', '$witness1', '$witness2', '$date_incident', '$statements', '$attachment', '$prepared_by', '$month', '$year')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Refusal for Treatment of $signed','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>