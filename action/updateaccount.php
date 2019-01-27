<?php
require '../require/logincheck.php';
if(isset($_POST['edit'])){
    $user_id = $_POST['user_id'];
    $complete_name = $_POST['complete_name'];
    $contact_no = $_POST['contact_no'];
    $home_address = $_POST['home_address'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $userid=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    if ($password ==""){
        require ('../require/dbconnection.php');
        $conn->query("UPDATE `users` SET `complete_name` = '$complete_name', `contact_no` = '$contact_no', `home_address` = '$home_address', `username` = '$username' WHERE `user_id` = '$user_id'") or die(mysqli_error());
        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $complete_name','$date_time')") or die(mysqli_error());
    }
    else {
        $pass1 = sha1($password);
        $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
        $pass1 = $salt.$pass1;

        require ('../require/dbconnection.php');
        $conn->query("UPDATE `users` SET `complete_name` = '$complete_name', `contact_no` = '$contact_no', `home_address` = '$home_address', `username` = '$username', `password` = '$pass1' WHERE `user_id` = '$user_id'") or die(mysqli_error());

        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $complete_name','$date_time')") or die(mysqli_error());

    }

}
?>