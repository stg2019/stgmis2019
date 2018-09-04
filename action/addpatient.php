<?php
if(isset($_POST['add'])){
    $patient_name=$_POST['patient_name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $date_of_birth=$_POST['date_of_birth'];
    $contact_no=$_POST['contact_no'];
    $home_address=$_POST['home_address'];
    $next_to_kin=$_POST['next_to_kin'];
    $relationship=$_POST['relationship'];
    $directives=$_POST['directives'];
    $dispatch_id = $_POST['dispatch_id'];


    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$age', '$gender', '$date_of_birth', '$contact_no', '$home_address', '$next_to_kin', '$relationship', '$directives', '$dispatch_id', 'Unassessed')") or die(mysqli_error());
    $conn->close();
}
?>