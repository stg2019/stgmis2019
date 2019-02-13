<?php

// ang tanan na gna pang type sa form ka assessment gna insert sa database. Meaning ka post isave ang gn type ka user sa amu na nga field.
// basta dollar sign meaning declare variables lang na sa.
// after ma post ang mga fields nga gn typan, ma query dayun nga insert to 'kun sa diin man nga table isave'.



if(isset($_POST['add'])){
    $patient_id = $_POST['patient_id'];

    // past medical history
    $allergy = $_POST['allergy'];
    $medications = $_POST['medications'];
    $phistory = $_POST['phistory'];
    $last_oral_intake = $_POST['last_oral_intake'];
    $events_leading_to = $_POST['events_leading_to'];
    $notes = $_POST['notes'];

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

    //pain assessment
    $onset = $_POST['onset'];
    $pain = $_POST['pain'];
    $quality = $_POST['quality'];
    $region = $_POST['region'];
    $severity = $_POST['severity'];

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");
   
    require '../require/dbconnection.php';


    $conn->query("INSERT INTO `past_medical_history` VALUES('', '$allergy', '$medications', '$phistory', '$last_oral_intake', '$events_leading_to', '$notes', '$patient_id')") or die(mysqli_error());


    $conn->query("INSERT INTO `assessment` VALUES('', '$chief_complaints', '$subjective_assessment', '$objective_assessment', '$priority_level', '$newpatientdisposition', '$newinterventions', '$patient_id')") or die(mysqli_error());

    $conn->query("INSERT INTO `pain_assessment` VALUES('', '$onset', '$pain', '$quality', '$region', '$severity', '$patient_id')") or die(mysqli_error());

    $conn->query("UPDATE `patient` SET `status` = 'Assessed' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added Patient Assessment','$date_time')") or die(mysqli_error());
    $conn->close();

    $conn->close();
}
?>