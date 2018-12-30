<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $medical_supply_request_id = $_POST['medical_supply_request_id'];
    $requested_quantity = $_POST['requested_quantity'];
    $medical_supply_name = $_POST['medical_supply_name'];
    $approved_quantity = $_POST['approved_quantity'];
    date_default_timezone_set('Asia/Manila');
    $date_approved=date("F j, Y g:i a");


    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    if($approved_quantitiy < $requested_quantity) {

        $conn->query("UPDATE `medical_supply_request` SET `requested_quantity` = `requested_quantity` - '$approved_quantity' WHERE `medical_supply_request_id` = '$medical_supply_request_id'") or die(mysqli_error());

        $conn->query("UPDATE `medical_supply_stocks_emt` SET `running_balance` = `running_balance` + '$approved_quantity' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

        $conn->query("UPDATE `medical_supply_stocks` SET `running_balance` = `running_balance` - '$approved_quantity' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Approved Request $approved_quantity $medical_supply_name','$date_time')") or die(mysqli_error());
    }
    else {

        $conn->query("UPDATE `medical_supply_request` SET `status` = 'Approved', `date_approved` = '$date_approved' WHERE `medical_supply_request_id` = '$medical_supply_request_id'") or die(mysqli_error());
        $conn->close();
    }

}
?>