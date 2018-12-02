<?php
if(isset($_POST['add'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `users` VALUES('', '$username', '$password', 'Administrator')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added New User','$date_time')") or die(mysqli_error());
    $conn->close();

}
?>