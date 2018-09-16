<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $call_id = $_POST['call_id'];
    $date_time_call = $_POST['date_time_call'];
    $complete_address = $_POST['complete_address'];
    $emergency = $_POST['emergency'];
    $caller_name = $_POST['caller_name'];
    $contact_no = $_POST['contact_no'];

    $conn->query("UPDATE `call_logs` SET `date_time_call` = '$date_time_call', `complete_address` = '$complete_address', `emergency` = '$emergency', `caller_name` = '$caller_name', `contact_no` = '$contact_no' WHERE `call_id` = '$call_id'") or die(mysqli_error());
}
?>