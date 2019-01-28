<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$res3 = $conn->query("SELECT * FROM `request_transport` GROUP BY year") or die(mysqli_error());
$data_points3 = array();
while($result3 = $res3->fetch_array()){
    $R3 = $result3['year'];
    $q3 = $conn->query("SELECT *, COUNT(*) as total FROM `request_transport` WHERE `year` = '$R3' group by year") or die(mysqli_error());
    $f3 = $q3->fetch_array();
    $FR3 = intval($f3['total']);
    $point3 = array('label' => $R3, 'y' => $FR3);
    array_push($data_points3, $point3);
}
json_encode($data_points3);

// Request Transport Location
//$res2 = $conn->query("SELECT * FROM `request_transport` GROUP BY address limit 10") or die(mysqli_error());
//$data_points2 = array();
//while($result2 = $res2->fetch_array()){
//    $R2 = $result2['address'];
//    $q2 = $conn->query("SELECT *, COUNT(*) as total FROM `request_transport` WHERE `address` = '$R2' && `year` = '$year' group by address order by total ASC") or die(mysqli_error());
 //   $f2 = $q2->fetch_array();
//    $FR2 = intval($f2['total']);
//    $point2 = array('label' => $R2, 'y' => $FR2);
//    array_push($data_points2, $point2);
//}
//json_encode($data_points2);


?>