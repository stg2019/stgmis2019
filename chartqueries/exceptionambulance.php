
<?php
require 'require/dbconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `dispatch` GROUP BY ambulance") or die(mysqli_error());
$data_points2 = array();
while($result2 = $res2->fetch_array()){
    $R2 = $result2['ambulance'];
    $q2 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `ambulance` = '$R2' && `year` = '$year' group by ambulance") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $FR2 = intval($f2['total']);
    $point2 = array('label' => $R2, 'y' => $FR2);
    array_push($data_points2, $point2);
}
json_encode($data_points2);
?>