
<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $date_time_cal = $_POST['date_time'];
    $newDate = date("Y-m-d", strtotime($date_time_cal));
    $requesting_party = $_POST['requesting_party'];
    $contact_no = $_POST['contact_no'];
    $patient_name = $_POST['patient_name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $medical_history = $_POST['medical_history'];
    $special_considerations = $_POST['special_considerations'];
    $froma = $_POST['froma'];
    $toa = $_POST['toa'];
    $fromb = $_POST['fromb'];
    $gcs = $_POST['gcs'];
    $bp = $_POST['bp'];
    $rer = $_POST['rer'];
    $per = $_POST['per'];
    $sat = $_POST['sat'];
    $requesting_approval = $_POST['requesting_approval'];
    $approval = $_POST['approval'];
    date_default_timezone_set('Asia/Manila');
    $date_created=date("F j, Y");
    $month = date("M");
    $year = date("Y");

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `request_transport` VALUES('', '$newDate', '$requesting_party', '$contact_no', '$patient_name', '$address', '$age', '$gender', '$medical_history', '$special_considerations', '$froma', '$toa', '$fromb', '$gcs', '$bp', '$rer', '$per', '$sat', '$requesting_approval', '$approval', 'Pending', '$date_created', '$month', '$year')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New Request of Transport','$date_time')") or die(mysqli_error());
    $conn->close();
}a
?>