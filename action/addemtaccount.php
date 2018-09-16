<?php
if(isset($_POST['add'])){
    $complete_name = $_POST['complete_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    date_default_timezone_set('Asia/Manila');
    $date=date("F j, Y");
    $time=date('g:i a');


    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `users` VALUES('', '$complete_name', '$username', '$password', 'EMT', '1', '$date', '$time')") or die(mysqli_error());
    $conn->close();
}
?>