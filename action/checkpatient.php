<?php

$patient_name = $_POST['patient_name'];
$dispatch_id = $_POST['dispatch_id'];

require '../require/dbconnection.php';

$q1 = $conn->query ("select * from `patient` where `patient_name` = '$patient_name' && `dispatch_id` = '$dispatch_id'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>