<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/dbconnection.php';
$res = $conn->query("SELECT * FROM `vital_signs` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$d = $result['time'];
	$R = $result['bp'];
	$q1 = $conn->query("SELECT * FROM `vital_signs` WHERE `bp` = '$R' && `patient_id` = '$_GET[patient_id]' order by vital_signs_id DESC") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['bp']);
	$point = array('label' => $d, 'y' => $FR );
	array_push($data_points, $point);
}
json_encode($data_points);

$res2 = $conn->query("SELECT * FROM `vital_signs` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$data_points2 = array();
while($result2 = $res2->fetch_array()){
	$d2 = $result2['time'];
	$R2 = $result2['sa'];
	$q2 = $conn->query("SELECT * FROM `vital_signs` WHERE `sa` = '$R' && `patient_id` = '$_GET[patient_id]' order by vital_signs_id DESC") or die(mysqli_error());
	$f2 = $q2->fetch_array();
	$FR2 = intval($f2['sa']);
	$point2 = array('label' => $d2, 'y' => $FR2 );
	array_push($data_points2, $point2);
}
json_encode($data_points2);
?>