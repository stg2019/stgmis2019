<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $medical_supply_request_id = $_POST['medical_supply_request_id'];
    $requested_quantity = $_POST['requested_quantity'];
    $medical_supply_name = $_POST['medical_supply_name'];
    date_default_timezone_set('Asia/Manila');
    $date_approved=date("F j, Y g:i a");

    $conn->query("UPDATE `medical_supply_request` SET `status` = 'Approved', `date_approved` = '$date_approved' WHERE `medical_supply_request_id` = '$medical_supply_request_id'") or die(mysqli_error());

    $conn->query("UPDATE `medical_supply_stocks_emt` SET `running_balance` = `running_balance` + '$requested_quantity' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());
    
    $conn->query("UPDATE `medical_supply_stocks` SET `running_balance` = `running_balance` - '$requested_quantity' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

}
?>