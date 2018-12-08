<?php
//delete.php
require '../require/logincheck.php';
require '../admin/require/dbconnection.php';


if(isset($_POST["id"]))
{

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    foreach($_POST["id"] as $id)
    {
        $query = "UPDATE `users` SET `status` = '1' WHERE `user_id` = '".$id."'";
        mysqli_query($conn, $query);
    }

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Updated account of EMT','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>