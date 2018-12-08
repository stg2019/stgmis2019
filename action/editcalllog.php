<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $call_id = $_POST['call_id'];
    $date_time_call = $_POST['date_time_call'];
    $complete_address = $_POST['complete_address'];
    $emergency = $_POST['emergency'];
    $caller_name = $_POST['caller_name'];
    $contact_no = $_POST['contact_no'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';
    
    $conn->query("UPDATE `call_logs` SET `date_time_call` = '$date_time_call', `complete_address` = '$complete_address', `emergency` = '$emergency', `caller_name` = '$caller_name', `contact_no` = '$contact_no' WHERE `call_id` = '$call_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Edited a Call Log','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>