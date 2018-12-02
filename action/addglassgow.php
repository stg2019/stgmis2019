<?php
if(isset($_POST['add'])){
    $patient_id = $_POST['patient_id'];

    // glassgow coma scale
    date_default_timezone_set('Asia/Manila');
    $time=date("g:i a");
    $eye = $_POST['eye'];
    $verbal = $_POST['verbal'];
    $motor = $_POST['motor'];

    require '../require/dbconnection.php';


    $conn->query("INSERT INTO `glassgow_coma_scale` VALUES('', '$time', '$eye', '$verbal', '$motor', '$patient_id')") or die(mysqli_error());
    $conn->close();
}
?>