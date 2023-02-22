<?php

header('Content-Type: application/json');
$con = mysqli_connect('localhost', 'root', '', 'shms');
// SELECT exercisetype,duration,calories, time FROM exercise where time like '%"2023-02-10 00:00:00"%';
// SELECT exercisetype,duration,calories, time FROM exercise where time between '$2023-02-10 00:00:00' and '2023-02-10 23:59:59';
// $query = sprintf("SELECT exercisetype,duration,calories, time FROM exercise where time  %'$date'%");

$query = sprintf("select * from exercise ");
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