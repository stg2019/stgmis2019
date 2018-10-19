<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $medical_supply_request_id = $_POST['medical_supply_request_id'];
    $requested_quantity = $_POST['requested_quantity'];
    $medical_supply_name = $_POST['medical_supply_name'];

    $conn->query("UPDATE `medical_supply_request` SET `status` = 'Approved' WHERE `medical_supply_request_id` = '$medical_supply_request_id'") or die(mysqli_error());
}
?>