
<?php
if(isset($_POST['add'])){
    $date_time = $_POST['date_time'];
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



    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `request_transport` VALUES('', '$date_time', '$requesting_party', '$contact_no', '$patient_name', '$address', '$age', '$gender', '$medical_history', '$special_considerations', '$froma', '$toa', '$fromb', '$gcs', '$bp', '$rer', '$per', '$sat', '$requesting_approval', '$approval', '$date_created', '$month', '$year')") or die(mysqli_error());
    $conn->close();
}a
?>