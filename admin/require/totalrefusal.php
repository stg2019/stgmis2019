
<?php
require '../require/dbconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
$find = $query->fetch_array();
$query = $conn->query("SELECT count(*) as total FROM `refusal_treatment` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<h4>Total Refusal of Treatment for the Year <?php echo $year. ' : ' .$fetch['total']?></h4> <hr>
<small>Approved By:</small>
<h3><?php echo $find['complete_name']?></h3>
<small>BDRRMO Administrator</small>