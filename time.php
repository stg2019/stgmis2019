<?php
date_default_timezone_set('Asia/Manila');

$time = date('h:i:s A',strtotime("12:17 AM"));
if($time > date('h:i:s A')){
    echo date('h:i:s A') . ' Good';
}
else 
    echo 'Late';
?>