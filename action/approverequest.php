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
    
    
    // if ang gn approved ka Admin is less than or equal sa gin request ka EMT
    if($approved_quantitiy <= $requested_quantity) {

        // ang to_approved_quantity nga field sa table nga medical_supply_request, is iminus ko sya sa approved quantity. daw bale request_quantity minus ka approved_quantity.
        $conn->query("UPDATE `medical_supply_request` SET `to_approved_quantity` = `to_approved_quantity` - '$approved_quantity' WHERE `medical_supply_request_id` = '$medical_supply_request_id'") or die(mysqli_error());

        // since na gin approved na ka admin ang request, ma dugang na sa stocks ka EMT ang gn request nya. may '+' sign meaning add.
        $conn->query("UPDATE `medical_supply_stocks_emt` SET `running_balance` = `running_balance` + '$approved_quantity' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

        // since na gin approved na ka admin ang request, ma buhin namn sa stocks ka admin ang whatever na gn approved nya. may '-' sign meaning minus.
        $conn->query("UPDATE `medical_supply_stocks` SET `running_balance` = `running_balance` - '$approved_quantity' WHERE `medical_supply_name` = '$medical_supply_name'") or die(mysqli_error());

        
        // keep track lang ang activity ka user, 
        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Approved Request $approved_quantity $medical_supply_name','$date_time')") or die(mysqli_error());

        // ang status nga pending sa request i change to approved kay since gn approved namn ka admin.
        $conn->query("UPDATE `medical_supply_request` SET `status` = 'Approved', `date_approved` = '$date_approved' WHERE `medical_supply_request_id` = '$medical_supply_request_id'") or die(mysqli_error());
        $conn->close();
    }

}
?>