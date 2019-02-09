<!-- Annual Dispatchment-->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
require 'require/dbconnection.php';
$res = $conn->query("SELECT * FROM `dispatch` GROUP BY year") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['year'];
    $q = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `year` = '$R' group by year") or die(mysqli_error());
    $f = $q->fetch_array();
    $FR = intval($f['total']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
json_encode($data_points);
?>


<!-- Cases per Category -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
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


<!-- Top Location of Dispatchment -->
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
    $q4 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `call_location` = '$R4' group by call_location") or die(mysqli_error());
    $f4 = $q4->fetch_array();
    $FR4 = intval($f4['total']);
    $point4 = array('label' => $R4, 'y' => $FR4);
    array_push($data_points4, $point4);
}
json_encode($data_points4);
?>
