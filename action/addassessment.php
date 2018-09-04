<?php
if(isset($_POST['add'])){
    $patient_id = $_POST['patient_id'];
    // vital signs
    $time=$_POST['time'];
    $loc=$_POST['loc'];
    $bp=$_POST['bp'];
    $sa=$_POST['sa'];
    $pr=$_POST['pr'];
    $rr=$_POST['rr'];
    $temp=$_POST['temp'];
    $rbs=$_POST['rbs'];
    $pupils=$_POST['pupils'];
    $skin=$_POST['skin'];

    // past medical history
    $allergy = $_POST['allergy'];
    $medications = $_POST['medications'];
    $phistory = $_POST['phistory'];
    $last_oral_intake = $_POST['last_oral_intake'];
    $events_leading_to = $_POST['events_leading_to'];
    $notes = $_POST['notes'];

    // glassgow coma scale
    $eye = $_POST['eye'];
    $verbal = $_POST['verbal'];
    $motor = $_POST['motor'];

    //patient disposition
    $patient_disposition = $_POST['patient_disposition'];
    $newpatientdisposition = $_POST['patient_disposition']. ' ' .$_POST['rescue'];

    //interventions
    $interventions = $_POST['interventions'];
    $newinterventions = $_POST['interventions']. ' ' .$_POST['ettubesize'] . ' ' .$_POST['level']. ' ' .$_POST['at']. ' ' .$_POST['via']. ' ' .$_POST['size']. ' ' .$_POST['method']. ' ' .$_POST['cycles']. ' ' .$_POST['time_of_arrest']. ' ' .$_POST['cardioversion']. ' ' .$_POST['admin']. ' ' . $_POST['fluid']. ' ' .$_POST['gauge']. ' ' .$_POST['hemorrhage']. ' ' .$_POST['eqts'];

    // overall assessment
    $priority_level = $_POST['priority_level'];
    $chief_complaints = $_POST['chief_complaints'];
    $subjective_assessment = $_POST['subjective_assessment'];
    $objective_assessment = $_POST['objective_assessment'];


    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `vital_signs` VALUES('', '$time', '$loc', '$bp', '$sa', '$pr', '$rr', '$temp', '$rbs', '$pupils', '$skin', '$patient_id')") or die(mysqli_error());

    $conn->query("INSERT INTO `past_medical_history` VALUES('', '$allergy', '$medications', '$phistory', '$last_oral_intake', '$events_leading_to', '$notes', '$patient_id')") or die(mysqli_error());

    $conn->query("INSERT INTO `glassgow_coma_scale` VALUES('', '$eye', '$verbal', '$motor', '$patient_id')") or die(mysqli_error());

    $conn->query("INSERT INTO `assessment` VALUES('', '$chief_complaints', '$subjective_assessment', '$objective_assessment', '$priority_level', '$newpatientdisposition', '$newinterventions', '$patient_id')") or die(mysqli_error());

    $conn->query("UPDATE `patient` SET `status` = 'Assessed' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $conn->close();
}
?>