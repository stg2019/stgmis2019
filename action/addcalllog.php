<?php
if(isset($_POST['add'])){
    $date_time_call = $_POST['date_time_call'];
    $complete_address = $_POST['complete_address'];
    $emergency = $_POST['emergency'];
    $caller_name = $_POST['caller_name'];
    $contact_no = $_POST['contact_no'];

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `call_logs` VALUES('', '$date_time_call', '$complete_address', '$emergency', '$caller_name', '$contact_no')") or die(mysqli_error());
    $conn->close();
}
?>