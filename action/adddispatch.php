<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    date_default_timezone_set('Asia/Manila');
    $enroute=date("g:i a");
    $service_no = $_POST['service_no'];
    // $date_time_call = $_POST['date_time_call'];
    $date_time_call=date("F j, Y g:i a");
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
    $date_created=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");
    $lat = $_POST['lat'];
    $long = $_POST['long'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `dispatch` VALUES('', '$service_no', '$date_time_call', '$ambulance', '$dispatched_for', '$call_location', '$moi_noi', '$patients_on_scene', '$on_board_tl', '$ems', '$driver', '$care_in_progress', '$mass_casualty', '$enroute', '$date_created', '$month', '$year', '$lat', '$long')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Dispatch','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>