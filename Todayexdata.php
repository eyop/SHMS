<?php

header('Content-Type: application/json');
$con = mysqli_connect('localhost', 'root', '', 'shms');



$date = date("Y-m-d");

$query = sprintf("select uid, exercisetype,calories from exercise where  time between '$date 00:00:00' and '$date 23:59:59'; ");
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