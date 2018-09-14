<?php
//delete.php
require '../admin/require/dbconnection.php';

if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "UPDATE `users` SET `status` = '0' WHERE `user_id` = '".$id."'";
  mysqli_query($conn, $query);
 }
}
?>