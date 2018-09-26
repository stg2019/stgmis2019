<?php
if(isset($_POST['add'])){
    $medical_supply_name = $_POST['medical_supply_name'];
    $number_of_stocks = $_POST['number_of_stocks'];

    require '../require/dbconnection.php';
    
	$conn->query("UPDATE `medical_supply_stocks` SET `running_balance` = `running_balance` + '$number_of_stocks' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

    $conn->close();
}
?>