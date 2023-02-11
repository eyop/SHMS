<?php

header('Content-Type: application/json');

$con = mysqli_connect('localhost', 'root', '', 'shms');

// $uid = $_SESSION['uid'];
// $username = $_SESSION['username'];
// $email = $_SESSION['email'];
// $fname = $_SESSION['fname'];
// $gender = $_SESSION['gender'];
// $lname = $_SESSION['lname'];
// $contact = $_SESSION['contact'];

$query = sprintf("SELECT uid,heartrate,bloodoxygen,glucose,bmi, time FROM records ");

// $query = "select heartrate,time from records where heartrate > 0 ;";
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