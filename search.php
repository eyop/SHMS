<!DOCTYPE html>
 
<html>
<head>
	<title>Doctor Details</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php
include("userfunction.php");
$con=mysqli_connect("localhost","root","","shms");

if(isset($_POST['User_search_submit']))
{
	$contact=$_POST['user_contact'];
  $query = "select * from users where email= '$contact'";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['uid']=="" & $row['fname']==""& $row['lname']=="" & $row['gender']=="" & $row['email']=="" & $row['contact']==""& $row['password']==""& $row['cpassword']==""){
    echo "<script> alert('No entries found!'); 
          window.location.href = 'adminpage.php#list-doc';</script>";
  }
  else {
    echo "<div class='container-fluid' style='margin-top:50px;'>
	<div class ='card'>
	<div class='card-body' style='background-color:#342ac1;color:#ffffff;'>
<table class='table table-hover'>
  <thead>
    <tr>

      <th scope='col'>User ID</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Gender</th>
      <th scope='col'>Email</th>
      <th scope='col'>Contact</th>
      <th scope='col'>Password</th>
    </tr>
  </thead>
  <tbody>";

	// while ($row=mysqli_fetch_array($result)){
                      $uid = $row['uid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      $password = $row['password'];
        echo "<tr>
        <td>$uid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$gender</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$password</td>
        </tr>";
	// }
	echo "</tbody>
    </table>
    <center>
    <a href='adminpage.php' class='btn btn-light'>Back to dashboard
    </a>
    </div>
    </center>
    </div>
    </div>
    </div>";
}
  }
	

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
</body>
</html>