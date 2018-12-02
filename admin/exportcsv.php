<?php
//include database configuration file
require 'require/dbconnection.php';

//get records from database
$query = $conn->query("SELECT longi, lat FROM dispatch");

if($query->num_rows > 0){
    $delimiter = ';'; //para sa longi lat delimeter
    date_default_timezone_set('Asia/Manila');
    $date_exported=date("Y-M-d");
    $filename = "bdrrmo" . $date_exported. ".csv";

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('lon', 'lat');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $lineData = array($row['longi'], $row['lat']);
        fputcsv($f, $lineData, ';'); // para sa values sang longitude kag latitude shit
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>