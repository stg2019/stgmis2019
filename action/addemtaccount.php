<?php
require '../require/logincheck.php';
if(isset($_POST['add'])){
    $complete_name = $_POST['complete_name'];
    $contact_no = $_POST['contact_no'];
    $home_address = $_POST['home_address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    date_default_timezone_set('Asia/Manila');
    $date=date("F j, Y");
    $time=date('g:i a');

    $pass1 = sha1($password);
    $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
    $pass1 = $salt.$pass1;

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");


    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `users` VALUES('', '$complete_name', '$contact_no', '$home_address', '$username', '$pass1', 'EMT', '1', '$date', '$time')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added $complete_name as New User','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>