<?php
date_default_timezone_set('Asia/Manila');

$time = date('h:i:s A',strtotime("12:17 AM"));
$true = 0;
if($time > date('h:i:s A')){
    echo date('h:i:s A') . ' Good';
    $true++;
    echo $true;
}
else 
    echo 'Late';
?>