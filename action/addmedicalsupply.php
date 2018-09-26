<?php
if(isset($_POST['add'])){
    $admin_id = $_POST['admin_id'];
    $medical_supply_name = $_POST['medical_supply_name'];
    $medical_supply_description = $_POST['medical_supply_description'];
    $supplier = $_POST['supplier'];
    date_default_timezone_set('Asia/Manila');
    $date_created=date("F j, Y");
    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `medical_supply_stocks` VALUES('', '$admin_id', '$medical_supply_name', '$medical_supply_description', '$supplier', '0', 'Reorder', '$date_created')") or die(mysqli_error());
    $conn->close();
}
?>