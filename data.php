<?php

header('Content-Type: application/json');

$con = mysqli_connect('localhost', 'root', '', 'shms');


$query = sprintf("SELECT uid,heartrate,bloodoxygen,glucose,bmi, time FROM records ");

$result = mysqli_query($con,$query);


$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

print json_encode($data);

?>