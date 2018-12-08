<?php
require '../require/logincheck.php';
if(isset($_POST['edit'])){
    $refusal_treatment_id = $_POST['refusal_treatment_id'];
    $signed = $_POST['signed'];
    $witness1 = $_POST['witness1'];
    $witness2 = $_POST['witness2'];
    $date_incident = $_POST['date_incident'];
    $statements = $_POST['statements'];
    $attachment = $_POST['attachment'];
    $prepared_by = $_POST['prepared_by'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");
    
    require '../require/dbconnection.php';

    $conn->query("UPDATE `refusal_treatment` SET `signed` = '$signed', `witness1` = '$witness1', `witness2` = '$witness2', `date_incident` = '$date_incident', `statements` = '$statements', `attachment` = '$attachment', `prepared_by` = '$prepared_by' WHERE `refusal_treatment_id` = '$refusal_treatment_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Edited Refusal for Treatment Record','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>