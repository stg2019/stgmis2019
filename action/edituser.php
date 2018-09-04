<?php
require '../require/dbconnection.php';
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $conn->query("UPDATE `users` SET `username` = '$username', `password` = '$password' WHERE `user_id` = '$id'") or die(mysqli_error());
}
?>