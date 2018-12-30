<?php
$approved_quantity = $_POST['approved_quantity'];
$medical_supply_name = $_POST['medical_supply_name'];

require '../require/dbconnection.php';

$q1 = $conn->query ("select * from `medical_supply_stocks` where `running_balance` <= '$approved_quantity' && `medical_supply_name` = '$medical_supply_name' ") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>