<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SHMS";
$table="users"

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
        
}

        $first_name =  $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $UserName1 = $_POST['Uname'];
        $Upassword = $_POST['pswd'];
        $gender =  $_POST['gender'];
        $age = $_POST['Uage'];

         $sql = "INSERT INTO $table  VALUES ('$first_name',
            '$last_name','$UserName1',' $Upassword ',' $gender','$age')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$gender\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
mysqli_close($conn);

?>