<?php
require '../require/logincheck.php';
if(isset($_POST['edit'])){
    $dispatch_id = $_POST['dispatch_id'];
    $service_no = $_POST['service_no'];
    $date_time_call = $_POST['date_time_call'];
    $ambulance = $_POST['ambulance'];
    $dispatched_for = $_POST['dispatched_for'];
    $call_location = $_POST['call_location'];
    $moi_noi = $_POST['moi_noi'];
    $patients_on_scene = $_POST['patients_on_scene'];
    $on_board_tl = $_POST['on_board_tl'];
    $ems = $_POST['ems'];
    $driver = $_POST['driver'];
    $care_in_progress = $_POST['care_in_progress'];
    $mass_casualty = $_POST['mass_casualty'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `dispatch` SET `service_no` = '$service_no', `date_time_call` = '$date_time_call', `ambulance` = '$ambulance', `dispatched_for` = '$dispatched_for', `call_location` = '$call_location', `moi_noi` = '$moi_noi', `patients_on_scene` = '$patients_on_scene', `on_board_tl` = '$on_board_tl', `ems` = '$ems', `driver` = '$driver', `care_in_progress` = '$care_in_progress', `mass_casualty` = '$mass_casualty' WHERE `dispatch_id` = '$dispatch_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Edited a Dispatch Record','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>