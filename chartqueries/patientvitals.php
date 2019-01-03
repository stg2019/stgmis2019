<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/dbconnection.php';
$query = $conn->query("SELECT * FROM `patient` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$fetch = $query->fetch_array();

$query2 = $conn->query("SELECT * FROM `patient`, `dispatch` WHERE dispatch.dispatch_id = patient.dispatch_id && patient.patient_id = '$_GET[patient_id]'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

// bp
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


// SA
$res2 = $conn->query("SELECT * FROM `vital_signs` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$data_points2 = array();
while($result2 = $res2->fetch_array()){
    $d2 = $result2['time'];
    $R2 = $result2['sa'];
    $q2 = $conn->query("SELECT * FROM `vital_signs` WHERE `sa` = '$R2' && `patient_id` = '$_GET[patient_id]' order by vital_signs_id DESC") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $FR2 = intval($f2['sa']);
    $point2 = array('label' => $d2, 'y' => $FR2 );
    array_push($data_points2, $point2);
}
json_encode($data_points2);


// PR
$res3 = $conn->query("SELECT * FROM `vital_signs` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$data_points3 = array();
while($result3 = $res3->fetch_array()){
    $d3 = $result3['time'];
    $R3 = $result3['pr'];
    $q3 = $conn->query("SELECT * FROM `vital_signs` WHERE `pr` = '$R3' && `patient_id` = '$_GET[patient_id]' order by vital_signs_id DESC") or die(mysqli_error());
    $f3 = $q3->fetch_array();
    $FR3 = intval($f3['pr']);
    $point3 = array('label' => $d3, 'y' => $FR3 );
    array_push($data_points3, $point3);
}
json_encode($data_points3);


//RR
$res4 = $conn->query("SELECT * FROM `vital_signs` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$data_points4 = array();
while($result4 = $res4->fetch_array()){
    $d4 = $result4['time'];
    $R4 = $result4['rr'];
    $q4 = $conn->query("SELECT * FROM `vital_signs` WHERE `rr` = '$R4' && `patient_id` = '$_GET[patient_id]' order by vital_signs_id DESC") or die(mysqli_error());
    $f4 = $q4->fetch_array();
    $FR4 = intval($f4['rr']);
    $point4 = array('label' => $d4, 'y' => $FR4 );
    array_push($data_points4, $point4);
}
json_encode($data_points4);

//Temperature
$res5 = $conn->query("SELECT * FROM `vital_signs` where `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$data_points5 = array();
while($result5 = $res5->fetch_array()){
    $d5 = $result5['time'];
    $R5 = $result5['temp'];
    $q5 = $conn->query("SELECT * FROM `vital_signs` WHERE `temp` = '$R5' && `patient_id` = '$_GET[patient_id]' order by vital_signs_id DESC") or die(mysqli_error());
    $f5 = $q5->fetch_array();
    $FR5 = intval($f5['temp']);
    $point5 = array('label' => $d5, 'y' => $FR5 );
    array_push($data_points5, $point5);
}
json_encode($data_points5);
?>