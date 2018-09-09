<?php
session_start();
?>
<html>
    <head>
        <title>NDRRMO | Bacolod City</title>
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/ndrrmo/logo.png">
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    </head>
    <body>
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

<?php
require ('../require/dbconnection.php');
require ('../recaptchalib.php');
$secret = "6LeIim4UAAAAAIX3525-X_IVCum-HgV7MOE3qwYI";
$response = null;
$reCaptcha = new ReCaptcha($secret);





if(ISSET($_POST['login'])){
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
    if ($response != null && $response->success) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = $conn->query("SELECT * FROM `users` WHERE BINARY `username` = '$username' && BINARY `password` = '$password'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $valid = $query->num_rows;
        $user_role = $fetch['user_role'];
        $user_id = $fetch['user_id'];


        if($valid > 0){
            if ($user_role == 'Team Leader') {
                $_SESSION['user_id'] = $fetch['user_id'];
                echo '<meta http-equiv="refresh" content="1;url=../dashboard.php">';
                echo '<i>Logging in...</i>';
            }
            if ($user_role == 'Administrator') {
                $_SESSION['user_id'] = $fetch['user_id'];
                echo '<meta http-equiv="refresh" content="1;url=../admin/admindashboard.php">';
                echo '<i>Logging in...</i>';
            }

        }

        else{
            echo "<script>alert('Account does not exist in database! ')</script>";
            echo "<script>window.location = '../index.php'</script>";
        }
    }
    else{
        echo "<script>alert('Verify you are not a robot! ')</script>";
        echo "<script>window.location = '../index.php'</script>";
    }
}
?>