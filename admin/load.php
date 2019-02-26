<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=ndrrmo', 'root', '');

$data = array();

$query = "SELECT * FROM request_transport";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id'   => $row["request_transport_id"],
        'title'   => $row["patient_name"],
        'start'   => $row["date_time"]
    );
}

echo json_encode($data);

?>