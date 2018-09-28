<?php
if(isset($_POST['add'])){
    $complete_name = $_POST['complete_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    date_default_timezone_set('Asia/Manila');
    $date=date("F j, Y");
    $time=date('g:i a');
    
    $pass1 = sha1($password);
	$salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
	$pass1 = $salt.$pass1;

    
    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `users` VALUES('', '$complete_name', '$username', '$pass1', 'EMT', '1', '$date', '$time')") or die(mysqli_error());
    $conn->close();
}
?>