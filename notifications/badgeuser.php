<?php
require '../require/dbconnection.php';
if(isset($_POST['show'])){
    date_default_timezone_set('Asia/Manila');
    $date_today = date('F j, Y');
    $query2 = $conn->query("SELECT COUNT(*) as total FROM `users` WHERE `date_created` = '$date_today'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
?>


<span class="label"><?php echo $fetch2['total']?></span>
<?php
}

?>