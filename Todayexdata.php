<?php

header('Content-Type: application/json');
$con = mysqli_connect('localhost', 'root', '', 'shms');
// $var_get = $_GET['url'];

// $uid = $_SESSION['uid'];
// $username = $_SESSION['username'];
// $email = $_SESSION['email'];
// $fname = $_SESSION['fname'];
// $gender = $_SESSION['gender'];
// $lname = $_SESSION['lname'];
// $contact = $_SESSION['contact'];


$date = date("Y-m-d");
// SELECT exercisetype,duration,calories, time FROM exercise where time like '%"2023-02-10 00:00:00"%';
// SELECT exercisetype,duration,calories, time FROM exercise where time between '$2023-02-10 00:00:00' and '2023-02-10 23:59:59';
// $query = sprintf("SELECT exercisetype,duration,calories, time FROM exercise where time  %'$date'%");

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