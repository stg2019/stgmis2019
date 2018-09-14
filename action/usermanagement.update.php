<?php
require '../admin/require/dbconnection.php';

if(isset($_POST['update_user'])){
    $id = $_POST['id'];
    $password = $_POST['password'];
    
    $result = mysqli_query($conn, "UPDATE `users` SET `password` = '$password' WHERE `user_id` = '$id'");
    if($result){
       echo "<script type='text/javascript'> alert ('Successfully Updated!');</script>";
    }
}

echo "<script>document.location='../admin/usermanagement.php'</script>"
?>