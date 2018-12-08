<?php
require '../require/logincheck.php';
if(isset($_POST['edit'])){
    $user_id = $_POST['user_id'];
    $complete_name = $_POST['complete_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pass1 = sha1($password);
    $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
    $pass1 = $salt.$pass1;

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("UPDATE `users` SET `complete_name` = '$complete_name', `username` = '$username', `password` = '$pass1' WHERE `user_id` = '$user_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Updated account of $complete_name','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>