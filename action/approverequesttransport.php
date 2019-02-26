<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $request_transport_id = $_POST['request_transport_id'];
    
    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `request_transport` SET `status` = 'Approved' WHERE `request_transport_id` = '$request_transport_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Approved Request for Transport','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>