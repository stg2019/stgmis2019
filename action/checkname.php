<?php

$complete_name = $_POST['complete_name'];

require '../require/dbconnection.php';

$q1 = $conn->query ("select * from `users` where `complete_name` = '$complete_name'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>