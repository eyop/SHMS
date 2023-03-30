<?php
// for registering and authenticating a user
session_start();
$con=mysqli_connect("localhost","root","","shms");

if(isset($_POST['patsub1'])){
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
	$password=$_POST['password'];
  $cpassword=$_POST['cpassword'];


  $Queryc="select email from users where email = '$email'";
  // $check=mysqli_query($con,$Queryc);
  $result=mysqli_query($con,$Queryc);
	if(mysqli_num_rows($result)!=0)
	{
    echo("<script>alert('User already exists. Try Again!');
          window.location.href = 'index1.php';</script>");
      
  }

  else
  {

    if($password==$cpassword){
      $query="insert into users(fname,lname,gender,email,contact,password,cpassword) values ('$fname','$lname','$gender','$email','$contact','$password','$cpassword');";
      $result=mysqli_query($con,$query);
      if($result){
          $_SESSION['username'] = $_POST['fname']." ".$_POST['lname'];
          $_SESSION['fname'] = $_POST['fname'];
          $_SESSION['lname'] = $_POST['lname'];
          $_SESSION['gender'] = $_POST['gender'];
          $_SESSION['contact'] = $_POST['contact'];
          $_SESSION['email'] = $_POST['email'];
          header("Location:login.php");
      }
      $query1 = "select * from users;";
      $result1 = mysqli_query($con,$query1);
      if($result1){
        $_SESSION['uid'] = $row['uid'];
      }
  
  }
  else{
    header("Location:error1.php");
  }

  }


  

}



if(isset($_POST['Admin_user'])){
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
	$password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $country=$_POST['country'];
  $region=$_POST['region'];



  $Queryc="select email from users where email = '$email'";
  // $check=mysqli_query($con,$Queryc);
  $result=mysqli_query($con,$Queryc);
	if(mysqli_num_rows($result)!=0)
	{
    echo("<script>alert('User already exists. Try Again!');
          window.location.href = 'adminpage.php';</script>");
      
  }

  else
  {

    if($password==$cpassword){
      $query="insert into users(fname,lname,gender,email,contact,password,cpassword,country,region) values ('$fname','$lname','$gender','$email','$contact','$password','$cpassword',' $country',' $region');";
      $result=mysqli_query($con,$query);
      	if($result)
        {
          echo("<script>alert('User Succesfully added .');
          window.location.href = 'adminpage.php';</script>");
        }
        else{
          echo("<script>alert('Error . Try Again!');
          window.location.href = 'adminpage.php';</script>");
        }

    }
  }
}


?>