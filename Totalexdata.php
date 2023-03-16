<?php

header('Content-Type: application/json');
$con = mysqli_connect('localhost', 'root', '', 'shms');

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