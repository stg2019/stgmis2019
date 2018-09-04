<?php
require '../require/dbconnection.php';
if(isset($_POST['del'])){
    $id=$_POST['id'];

    $conn->query("DELETE FROM `users` WHERE `user_id` = '$id'") or die(mysqli_error());

}
?>