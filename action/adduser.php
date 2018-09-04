<?php
if(isset($_POST['add'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `users` VALUES('', '$username', '$password', 'Administrator')") or die(mysqli_error());
    $conn->close();
}
?>