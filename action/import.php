<?php 
  
$conn = new mysqli("localhost", 'root', '', 'ndrrmo') or die(mysqli_error());
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");    
$time = date("h:i a");
$status = "Successfully Imported database";
    

$conn->query ("INSERT INTO `db_backup` VALUES ('', 'Import', '$date', '$time', '$status');") or die(mysqli_error());




$connection = mysqli_connect('localhost', 'root', '', 'ndrrmo');


$filename = "../database/ndrrmo.sql";
$handle = fopen($filename,'r+');
$contents = fread($handle,filesize($filename));

$sql = explode(';',$contents);
foreach($sql as $query){
	$result = mysqli_query($connection,$query);
	if($result){
		echo '<tr><tr><br></td></tr>';
		echo '<tr><td>'.$query.'<b>SUCCESS</b></td></tr>';
		echo '<tr><tr><br></td></tr>';
	}
}

fclose($handle);


header("Location: ../admin/systembackup.php");

?>