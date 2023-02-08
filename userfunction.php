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
          window.location.href = 'index.php';</script>");
      
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
          header("Location:Home.php");
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
// if(isset($_POST['update_data']))
// {
// 	$contact=$_POST['contact'];
// 	$status=$_POST['status'];
// 	$query="update appointmenttb set payment='$status' where contact='$contact';";
// 	$result=mysqli_query($con,$query);
// 	if($result)
// 		header("Location:updated.php");
// }

?>