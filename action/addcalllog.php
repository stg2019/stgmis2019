<?php
require '../require/logincheck.php';

// ang tanan na gna pang type sa form ka calllogs gna insert sa database. Meaning ka post isave ang gn type ka user sa amu na nga field.
// basta dollar sign meaning declare variables lang na sa.
// after ma post ang mga fields nga gn typan, ma query dayun nga insert to 'call_logs' nga table.

if(isset($_POST['add'])){
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

    $conn->query("INSERT INTO `call_logs` VALUES('', '$date_time_call', '$complete_address', '$emergency', '$caller_name', '$contact_no')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Call Log','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>