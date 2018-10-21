<?php
// yearly or annualy request of transport shit
$year = date('Y');

require 'require/dbconnection.php';
$qjan = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan2 = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb2 = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar2 = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr2 = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay2 = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun2 = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul2 = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug2 = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$fsep2 = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct2 = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov2 = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec2 = $qdec->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `medical_supply_request` WHERE `year` = '$year'") or die(mysqli_error());
$total2 = $total->fetch_array();


//total requested medical supplies
$res = $conn->query("SELECT * FROM `medical_supply_request` GROUP BY medical_supply_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['medical_supply_name'];
    $q1 = $conn->query("SELECT *, sum(requested_quantity) as sum FROM `medical_supply_request` WHERE `medical_supply_name` = '$R'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $FR = intval($f1['sum']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
json_encode($data_points);
?>