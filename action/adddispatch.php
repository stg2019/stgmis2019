<?php
require '../require/logincheck.php';

// ang tanan na gna pang type sa form ka dispatch gna insert sa database. Meaning ka post isave ang gn type ka user sa amu na nga field.
// basta dollar sign meaning declare variables lang na sa.
// after ma post ang mga fields nga gn typan, ma query dayun nga insert to 'dispatch' nga table.

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
    $date_created=date("F j, Y");
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

    $conn->query("UPDATE `driver` SET `status` = 'Booked' WHERE `driver_name` = '$driver'") or die(mysqli_error());

    //meaning ka query ni after ma tapos ang save dispatch, gna update ang status ka ambulance to Booked, meaning indi na pwede magamit ang ambulance nga amu na kay na booked na 
    // sa particular nga dispatch
    $conn->query("UPDATE `ambulance` SET `status` = 'Booked' WHERE `vehicle_name` = '$ambulance'") or die(mysqli_error());

    // ang ari nga query para sa users activity log, para ma track kun anu gn ubra ka user.
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Dispatch','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>