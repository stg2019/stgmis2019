<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $user_id = $_POST['user_id'];
    $complete_name = $_POST['complete_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pass1 = sha1($password);
    $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
    $pass1 = $salt.$pass1;

    $conn->query("UPDATE `users` SET `complete_name` = '$complete_name', `username` = '$username', `password` = '$pass1' WHERE `user_id` = '$user_id'") or die(mysqli_error());
}
?>