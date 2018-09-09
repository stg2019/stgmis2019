<?php

date_default_timezone_set('Asia/Manila');

$time = date('H:i:s A',strtotime("02:00:00 PM"));
$cutoff = 0;
if($time > date('H:i:s A')){
    $cutoff++;
    echo $cutoff++;
}


if(isset($_POST['add'])){
    date_default_timezone_set('Asia/Manila');
    $time = date('h:i:s A');
    $emt_id_number=$_POST['emt_id_number'];


    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `timeinout` VALUES('', '$time', '$emt_id_number')") or die(mysqli_error());

    $conn->close();
}
?>