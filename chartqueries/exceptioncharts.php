<!-- Top 5 Emergency Cases -->
<?php
$res2 = $conn->query("SELECT * FROM `dispatch` GROUP BY month ") or die(mysqli_error());
$data_points2 = array();
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT *, COUNT(*) as total FROM `dispatch` WHERE `month` = '$R2' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $FR2 = intval($f2['total']);
    $point2 = array('label' => $R2, 'y' => $FR2);
    array_push($data_points2, $point2);
}
json_encode($data_points2);
?>
