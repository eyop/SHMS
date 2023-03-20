<!DOCTYPE html>
 
<html>
<head>
	<title>Details</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<link rel="stylesheet" href="lib/css/bootstrap.min-4.0.0-beta.css" />
</head>
<body>
<?php
include("userfunction.php");
$con=mysqli_connect("localhost","root","","shms");
$uid = $_SESSION['uid'];
if(isset($_POST['User_search_submit']))
{

	$email=$_POST['user_email'];
  $query = "select * from users where email= '$email' ";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);  if($row['uid']=="" & $row['fname']==""& $row['lname']=="" & $row['gender']=="" & $row['email']=="" & $row['contact']==""& $row['password']==""& $row['cpassword']==""){

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
	


  if(isset($_POST['User_Record_submit']))
  {
  
    $email=$_POST['user_email'];
    $query = "select * from records where email= '$email' ";
    $result = mysqli_query($con,$query);
    
    $row=mysqli_fetch_array($result); 
     if($row['uid']=="" & $row['fname']==""& $row['lname']=="" & $row['gender']=="" & $row['email']=="" & $row['contact']==""){
  
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
  
        
                    <th scope='col'>Record ID</th>
                    <th scope='col'>First Name</th>
                    <th scope='col'>Last Name</th>
                    <th scope='col'>Gender</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Contact</th>
                       
                     <th scope='col'>HEARTRATE</th>
                     <th scope='col'>HEARTRATE-STATE</th>
                     <th scope='col'>BLOOD-OXYGEN</th>
                     <th scope='col'>BLOOD-OXYGEN-STATE</th>
                     <th scope='col'>BP_SYSTOLIC</th>
                     <th scope='col'>BP_DIASTOLIC</th>
                     <th scope='col'>GLUCOSE</th>
                     <th scope='col'>GLUCOSE-STATE</th>
                     <th scope='col'>weight</th>
                     <th scope='col'>height</th>
                     <th scope='col'>Age</th>
                     <th scope='col'>BMI</th>
                     <th scope='col'>TIME</th>
      </tr>
    </thead>
    <tbody>";
  
     while ($row=mysqli_fetch_array($result)){
                      
                      $uid = $row['uid'];
                      $rid = $row['rid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      $heartrate = $row['heartrate'];
                      $heartrate_state = $row['heartrate_state'];
                      $bloodoxygen = $row['bloodoxygen'];
                      $bloodoxygen_state = $row['bloodoxygen_state'];
                      $BP_SYSTOLIC = $row['BP_SYSTOLIC'];
                      $BP_DIASTOLIC = $row['BP_DIASTOLIC'];
                      $glucose = $row['glucose'];
                      $glucose_status = $row['glucose_status'];
                      $weight = $row['weight'];
                      $height = $row['height'];
                      $Age = $row['Age'];
                      $bmi = $row['bmi'];
                      $time = $row['time'];
          echo "<tr>
          <td>$uid</td>
          <td>$rid</td>
          <td>$fname</td>
          <td>$lname</td>
          <td>$gender</td>
          <td>$email</td>
          <td>$contact</td>
          <td>$heartrate</td>
          <td>$heartrate_state</td>
          <td>$bloodoxygen</td>
          <td>$bloodoxygen_state</td>
          <td>$BP_SYSTOLIC</td>
          <td>$BP_DIASTOLIC</td>
          <td>$glucose</td>
          <td>$glucose_status</td>
          <td>$weight</td>
          <td>$height</td>
          <td>$Age</td>
          <td>$bmi</td>
          <td>$time</td>
          </tr>";
     }
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
    
  
  
if(isset($_POST['search_data']))
{
	$date=$_POST['date'];
  $query = "select * from records where uid = $uid and time between '$date 00:00:00' and '$date 23:59:59'";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['uid']=="" & $row['fname']==""& $row['lname']==""  & $row['heartrate']==""  & $row['heartrate_state']==""& $row['bloodoxygen']==""  & $row['bloodoxygen_state']=="" & $row['glucose']==""& $row['glucose_status']=="" & $row['BP_SYSTOLIC']=="" & $row['BP_DIASTOLIC']==""& $row['bmi']=="" & $row['time']==""){
    echo "<script> alert('No entries found!'); 
          window.location.href = 'Measurements.php';</script>";
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
      <th scope='col'>HEARTRATE</th>
      <th scope='col'>HEARTRATE-STATE</th>
      <th scope='col'>BLOOD-OXYGEN</th>
      <th scope='col'>BLOOD-OXYGEN-STATE</th>
      <th scope='col'>GLUCOSE</th>
      <th scope='col'>GLUCOSE-STATE</th>
      <th scope='col'>BP_SYSTOLIC</th>
      <th scope='col'>BP_DIASTOLIC</th>
      <th scope='col'>BMI</th>
      <th scope='col'>TIME</th>
    </tr>
  </thead>
  <tbody>";

	while ($row=mysqli_fetch_array($result)){
                      $uid = $row['uid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $heartrate = $row['heartrate'];
                      $heartrate_state = $row['heartrate_state'];
                      $bloodoxygen = $row['bloodoxygen'];
                      $bloodoxygen_state = $row['bloodoxygen_state'];
                      $glucose = $row['glucose'];
                      $glucose_status = $row['glucose_status'];
                      $BP_SYSTOLIC = $row['BP_SYSTOLIC'];
                      $BP_DIASTOLIC = $row['BP_DIASTOLIC'];
                      $bmi = $row['bmi'];
                      $time = $row['time'];
                      
        echo "<tr>
        <td>$uid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$heartrate</td>
        <td>$heartrate_state</td>
        <td>$bloodoxygen</td>
        <td>$bloodoxygen_state</td>
        <td>$glucose</td>
        <td>$glucose_status</td>
        <td>$BP_SYSTOLIC</td>
        <td>$BP_DIASTOLIC</td>
        <td>$bmi</td>
        <td>$time</td>
        </tr>";
	}
	echo "</tbody>
    </table>
    <center>
    <a href='Measurements.php' class='btn btn-light'>Back to dashboard
    </a>
    </div>
    </center>
    </div>
    </div>
    </div>";
}
  }


  
  
if(isset($_POST['search_exercise']))
{
  
	$date=$_POST['date'];
  $query = "select * from exercise where uid = $uid and time between '$date 00:00:00' and '$date 23:59:59'";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if( $row['fname']=="" & $row['lname']==""  & $row['exercisetype']==""  & $row['duration']==""& $row['calories']=="" & $row['time']==""){
    echo "<script> alert('No entries found!'); 
          window.location.href = 'Measurements.php';</script>";
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
      <th scope='col'>Exercisetype</th>
      <th scope='col'>Duration</th>
      <th scope='col'>Calories</th>
      <th scope='col'>TIME</th>
    </tr>
  </thead>
  <tbody>";

	while ($row=mysqli_fetch_array($result)){
                      $uid = $row['uid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $exercisetype = $row['exercisetype'];
                      $duration = $row['duration'];
                      $calories = $row['calories'];
                      $time = $row['time'];
                      
        echo "<tr>
        <td>$uid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$exercisetype</td>
        <td>$duration</td>
        <td>$calories</td>
        <td>$time</td>
        </tr>";
	}
	echo "</tbody>
    </table>
    <center>
    <a href='Measurements.php' class='btn btn-light'>Back to dashboard
    </a>
    </div>
    </center>
    </div>
    </div>
    </div>";
}
  }


  if(isset($_POST['mes_search_submit']))
  {
    $contact=$_POST['mes_contact'];
    $query = "select * from contact where contact= '$contact'";
    $result = mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    if($row['name']=="" & $row['email']=="" & $row['contact']=="" & $row['message']==""){
      echo "<script> alert('No entries found! Please enter valid details'); 
            window.location.href = 'admin-panel1.php#list-doc';</script>";
    } 
    else {
      echo "<div class='container-fluid' style='margin-top:50px;'>
      <div class='card'>
      <div class='card-body' style='background-color:#342ac1;color:#ffffff;'>
    <table class='table table-hover'>
      <thead>
        <tr>
          <th scope='col'>User Name</th>
          <th scope='col'>Email</th>
          <th scope='col'>Contact</th>
          <th scope='col'>Message</th>
        </tr>
      </thead>
      <tbody>";
    
      
            $name = $row['name'];
            $email = $row['email'];
            $contact = $row['contact'];
            $message = $row['message'];
            echo "<tr>
              <td>$name</td>
              <td>$email</td>
              <td>$contact</td>
              <td>$message</td>
            </tr>";
      
      echo "</tbody></table><center><a href='admin-panel1.php' class='btn btn-light'>Back to your Dashboard</a></div></center></div></div></div>";
    }
    }


    
?>
     <script src="lib/jquery/jquery-3.2.1.slim.min.js" ></script>
    <script src="lib/js/popper.min.js" ></script>
    <script src="lib/js/bootstrap-4.0.0-beta.min.js" ></script> 
</body>
</html>