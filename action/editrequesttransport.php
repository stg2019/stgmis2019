<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $request_transport_id = $_POST['request_transport_id'];
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
    $rr = $_POST['rr'];
    $pr = $_POST['pr'];
    $sat = $_POST['sat'];
    $requesting_approval = $_POST['requesting_approval'];
    $approval = $_POST['approval'];

    $conn->query("UPDATE `request_transport` SET `date_time` = '$date_time', `requesting_party` = '$requesting_party', `contact_no` = '$contact_no', `patient_name` = '$patient_name', `address` = '$address', `age` = '$age', `gender` = '$gender', `medical_history` = '$medical_history', `special_considerations` = '$special_considerations', `froma` = '$froma', `toa` = '$toa', `fromb` = '$fromb', `gcs` = '$gcs', `bp` = '$bp', `rr` = '$rr', `pr` = '$pr', `sat` = '$sat', `requesting_approval` = '$requesting_approval', `approval` = '$approval'  WHERE `request_transport_id` = '$request_transport_id'") or die(mysqli_error());
}
?>