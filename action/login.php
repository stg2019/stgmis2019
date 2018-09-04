<?php
session_start();
?>
<html>
    <head>
        <title>NDRRMO | Bacolod City</title>
         <link rel="icon" type="image/png" sizes="96x96" href="assets/img/ndrrmo/logo.png">
    </head>
</html>

<?php
require ('../require/dbconnection.php');
if(ISSET($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT * FROM `users` WHERE BINARY `username` = '$username' && BINARY `password` = '$password'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $valid = $query->num_rows;
    $user_role = $fetch['user_role'];
    $user_id = $fetch['user_id'];


    if($valid > 0){
        if ($user_role == 'Administrator') {
            $_SESSION['user_id'] = $fetch['user_id'];
            echo '<meta http-equiv="refresh" content="1;url=../dashboard.php">';
            echo '<i>Logging in...</i>';
        }
        if ($user_role == 'Staff') {
            $_SESSION['user_id'] = $fetch['user_id'];
            echo '<meta http-equiv="refresh" content="1;url=../index_v2.html">';
            echo '<i>Logging in...</i>';
        }

    }
    else{
        echo "<script>alert('Account does not exist in database! ')</script>";
        echo "<script>window.location = '../index.php'</script>";
    }


    $conn->close();
}	
?>
