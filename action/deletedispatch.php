<?php
require '../require/dbconnection.php';
if(isset($_POST['del'])){
    $dispatch_id=$_POST['dispatch_id'];

    $conn->query("DELETE FROM `dispatch` WHERE `dispatch_id` = '$dispatch_id'") or die(mysqli_error());

}
?>