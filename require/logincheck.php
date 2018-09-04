<?php
session_start();
if(!ISSET($_SESSION['user_id']))
{
    echo "<script> alert ('Session Expired, Please login!')</script>";
    echo "<script>document.location='index.php'</script>";
}
?>
