<!-- Monthly Dispatch -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}


// meaning ni gna count ang dispatch for every month 
require 'require/dbconnection.php';
$qjan = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec = $qdec->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `dispatch` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();
?>

<!-- Admin Medical Supplies Balance -->
<?php
// meaning ni nga query gna group per medical_supply_name kag tapos gna count ang every remaining balance nila.
$res = $conn->query("SELECT * FROM `medical_supply_stocks` GROUP BY medical_supply_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['medical_supply_name'];
    $q1 = $conn->query("SELECT * FROM `medical_supply_stocks` WHERE `medical_supply_name` = '$R'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $FR = intval($f1['running_balance']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
// gna store as json type para gamiton later sa chart.
json_encode($data_points);
?>


<!-- Top 5 Emergency Cases -->
<?php
// meaning ni kun anu gn pili ka user sa dropdown ka year amu na nga data ipa gwa
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

// meaning ni nga query gna group per dispatched_for kag tapos gna count ang every record nila
$res2 = $conn->query("SELECT * FROM `dispatch` GROUP BY dispatched_for") or die(mysqli_error());
$data_points2 = array();
while($result2 = $res2->fetch_array()){
    $R2 = $result2['dispatched_for'];
    $q2 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `dispatched_for` = '$R2' && `year` = '$year' group by dispatched_for") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $FR2 = intval($f2['total']);
    $point2 = array('label' => $R2, 'y' => $FR2);
    array_push($data_points2, $point2);
}
json_encode($data_points2);
?>

<!-- Annual Dispatch-->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res3 = $conn->query("SELECT * FROM `dispatch` GROUP BY year") or die(mysqli_error());
$data_points3 = array();
while($result3 = $res3->fetch_array()){
    $R3 = $result3['year'];
    $q3 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `year` = '$R3' group by year") or die(mysqli_error());
    $f3 = $q3->fetch_array();
    $FR3 = intval($f3['total']);
    $point3 = array('label' => $R3, 'y' => $FR3);
    array_push($data_points3, $point3);
}
json_encode($data_points3);
?>

<!-- Call Location -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res4 = $conn->query("SELECT * FROM `dispatch` GROUP BY call_location limit 7") or die(mysqli_error());
$data_points4 = array();
while($result4 = $res4->fetch_array()){
    $R4 = $result4['call_location'];
    $q4 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `call_location` = '$R4' && `year` = '$year' group by call_location") or die(mysqli_error());
    $f4 = $q4->fetch_array();
    $FR4 = intval($f4['total']);
    $point4 = array('label' => $R4, 'y' => $FR4);
    array_push($data_points4, $point4);
}
json_encode($data_points4);
?>

<!-- Custom Yearly on Request of Transport -->
<?php
$res5 = $conn->query("SELECT * FROM `request_transport` GROUP BY year") or die(mysqli_error());
$data_points5 = array();
while($result5 = $res5->fetch_array()){
    $R5 = $result5['year'];
    $q5 = $conn->query("SELECT *, COUNT(*) as total FROM `request_transport` WHERE `year` = '$R5' group by year") or die(mysqli_error());
    $f5 = $q5->fetch_array();
    $FR5 = intval($f5['total']);
    $point5 = array('label' => $R5, 'y' => $FR5);
    array_push($data_points5, $point5);
}
json_encode($data_points5);

?>




