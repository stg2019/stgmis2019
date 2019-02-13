<?php
require '../require/logincheck.php';

// ang tanan na gna pang type sa form ka user gna insert sa database. Meaning ka post isave ang gn type ka user sa amu na nga field. 
// basta dollar sign meaning declare variables lang na sa.
// after ma post ang mga fields nga gn typan, ma query dayun nga insert to 'user' nga table.

if(isset($_POST['add'])){
    $complete_name = $_POST['complete_name'];
    $contact_no = $_POST['contact_no'];
    $home_address = $_POST['home_address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    date_default_timezone_set('Asia/Manila');
    $date=date("F j, Y");
    $time=date('g:i a');

    
    // meaning ni ka $pass1 nag declare ko function nga SHA1, sa PHP ang SHA1 amu na ang ga encrypt ka plain text,
    $pass1 = sha1($password);
    // nag declare pa gid ko another variable na ma combine sa na encrypt na nga password, meaning pa gamuhon ko pa gid ang na encrypt para budlay pa gid idecrypt.
    $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
    
    // sa diri na part gna combine ko na ang na encrypt nga password kag ang patalang ko na variable ang $salt. 
    $pass1 = $salt.$pass1;

    //history_log
    $user_id=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");


    require '../require/dbconnection.php';

    $conn->query("INSERT INTO `users` VALUES('', '$complete_name', '$contact_no', '$home_address', '$username', '$pass1', 'EMT', '1', '$date', '$time')") or die(mysqli_error());

    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', 'Added $complete_name as New User','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>