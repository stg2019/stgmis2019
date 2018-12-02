<?php
require '../require/dbconnection.php';
$passwordold = $_POST['passwordold'];
$old = $_POST['passwordold'];

$pass1 = sha1($password);
$salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
$pass1 = $salt.$pass1;

$q1 = $conn->query ("select * from `users` where `password` = '$pass1'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;

echo $check;


?>