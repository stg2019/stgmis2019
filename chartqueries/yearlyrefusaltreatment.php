<?php
// yearly or annualy request of transport shit
$res3 = $conn->query("SELECT * FROM `refusal_treatment` GROUP BY year") or die(mysqli_error());
$data_points3 = array();
while($result3 = $res3->fetch_array()){
    $R3 = $result3['year'];
    $q3 = $conn->query("SELECT *, COUNT(*) as total FROM `refusal_treatment` WHERE `year` = '$R3' group by year") or die(mysqli_error());
    $f3 = $q3->fetch_array();
    $FR3 = intval($f3['total']);
    $point3 = array('label' => $R3, 'y' => $FR3);
    array_push($data_points3, $point3);
}
json_encode($data_points3);
?>