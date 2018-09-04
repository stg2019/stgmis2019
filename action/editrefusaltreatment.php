<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $refusal_treatment_id = $_POST['refusal_treatment_id'];
    $signed = $_POST['signed'];
    $witness1 = $_POST['witness1'];
    $witness2 = $_POST['witness2'];
    $date_incident = $_POST['date_incident'];
    $statements = $_POST['statements'];
    $attachment = $_POST['attachment'];
    $prepared_by = $_POST['prepared_by'];

    $conn->query("UPDATE `refusal_treatment` SET `signed` = '$signed', `witness1` = '$witness1', `witness2` = '$witness2', `date_incident` = '$date_incident', `statements` = '$statements', `attachment` = '$attachment', `prepared_by` = '$prepared_by' WHERE `refusal_treatment_id` = '$refusal_treatment_id'") or die(mysqli_error());
}
?>