<!DOCTYPE html>
<?php
include 'userfunction.php';

$con = mysqli_connect('localhost', 'root', '', 'shms');

$uid = $_SESSION['uid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$gender = $_SESSION['gender'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];



              $query = "select password, bloodgroup , country , region from users where $uid = uid";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
                $password=$row['password'];
                $bloodgroup = $row['bloodgroup'];
                $country = $row['country'];
                $region = $row['region'];

              }
              




if (isset($_POST['edit-submit'])) {
    
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact1 = $_POST['contact'];
  $bloodgroup = $_POST['bloodgroup'];
  $country = $_POST['country'];
  $region = $_POST['region'];



  $query = mysqli_query($con,"update users set fname = '$fname',lname = '$lname',contact = '$contact1',bloodgroup = '$bloodgroup', country = '$country', region = '$region' where uid = $uid");
  $query = mysqli_query($con,"update exercise set fname = '$fname',lname = '$lname',contact = '$contact1' where uid = $uid");
  $query = mysqli_query($con,"update records set fname = '$fname',lname = '$lname',contact = '$contact1' where uid = $uid");


$_SESSION['username'] = $_POST['fname']." ".$_POST['lname'];
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['contact'] = $_POST['contact'];
if ($query)
     {
        echo("<script>alert('Your Data successfully Changed. !');
        window.location.href = 'profile.php';</script>");
  }
   else {
    echo("<script>alert('Unable to process your request. Please try again!. Try Again!');
    window.location.href = 'profile.php';</script>");
    echo "<script>alert('');</script>";
  }


// header("Location:profile.php");
  
}
if (isset($_POST['change-submit'])) {
    
    $opassword=$_POST['opassword'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

  $query2 = mysqli_query($con,"update users set password = '$password',cpassword = '$cpassword' where password = $opassword");

if ($query2)
     {
        echo("<script>alert('Your Data successfully Changed. !');
        window.location.href = 'profile.php';</script>");
  }
   else {
    echo("<script>alert('Unable to process your request. Please try again!. Try Again!');
    window.location.href = 'profile.php';</script>");
    echo "<script>alert('');</script>";
  }


// header("Location:profile.php");
  
}
?>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <link rel="stylesheet" href="Style/style.css"> -->
  
  <!-- Latest compiled and minified CSS -->


  <link rel="stylesheet" href="Ste/style.css">

  <link rel="stylesheet" href="Style/animate.css">

       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet"> -->
       <link href="lib/css/5.2.3-bootstrap.css" rel="stylesheet">
  
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="lib/js/5.2.3-bootstrap.bundle.min.js"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="lib/js/3.4.1-bootstrap.min.js"></script>

  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style=" animation: fadeInRight 1s ;transition-delay: 5s;">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> YOUR HEALTH </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                         <script>
                             function clickDiv(id) {
                               document.querySelector(id).click();
                             }
                                
                          
                          </script>
  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #25283D, #25283D);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #942ac1;
    border-color: #007bff;
}
a:active {
    z-index: 2;
    color: #ffff;
    background-color: #942ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
li:active {
    z-index: 2;
    color: #fff;
    background-color: #942ac1;
    border-color: #007bff;
    font-size: larger;
}

body {
   background-color: #6883BA;
    
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
  </style>

 <div class="collapse navbar-collapse" id="navbarSupportedContent"style="color:white; animation: bounceOutDown 1s ;transition-delay: 1s;">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link " href="Home1.php"><i class="fa fa-sign-out " id="list-dash-list"aria-controls="home"></i>Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="Home.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Record</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link " href="Measurements.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Measurment</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="progress.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Progress</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link active" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Profile</a>
      </li>
       <li class="nav-item">
        <a class="nav-link"style=" margin-left: 100px" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
   </nav>

   
   
   <div class="container rounded bg-white mt-5 mb-5" style="padding-top:5%"  >
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="image/anonymous-user.png">
                <span class="font-weight-bold"><?php echo $username ?></span>
                <span class="text-black-50"><?php echo $email ?></span><span>
                <span class="text-black-50"><?php echo $gender ?></span><span>
                    </span>
                </div>
                <form method="post" action="profile.php">
        </div>
        <div class="col-md-5 border-right">
           
            <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
             
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">FirstName</label><input type="text" class="form-control"  value=<?php echo $fname ?> name='fname' id='fname'></div>
                    <div class="col-md-6"><label class="labels">LastName</label><input type="text" class="form-control" value=<?php echo $lname ?> name='lname' id='lname'></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"  class="form-control" value=<?php echo $contact ?> id='contact'name='contact' ></div>
                    <div class="col-md-12"><label class="labels">BloodGroup </label>
                       <select class="form-control" id="bloodgroup" name="bloodgroup" value=<?php echo $bloodgroup ?>>
                              <option><?php echo $bloodgroup ?></option>
                              <option>A RhD positive (A+)</option>
                              <option>A RhD negative (A-)</option>
                              <option>B RhD positive (B+)</option>
                              <option>B RhD negative (B-)</option>
                              <option>O RhD positive (O+)</option>
                              <option>O RhD negative (O-)</option>
                              <option>AB RhD positive (AB+)</option>
                              <option>AB RhD negative (AB-)</option>
                         </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" id='country'name='country' value=<?php echo $country ?>></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" id='region'name='region' value=<?php echo $region ?> ></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="edit-submit">Save Profile</button></div>

            </div>
        </form>
        <form method="post" action="profile.php">
        </div>
        
    <div class="col-md-4">
        <!-- <form> -->
        <div class="p-3 py-5">
               <h4 class="text-center"> Change Password</h4>
                  <div class="col-md-12"><label class="labels">OLD PASSWORD</label><input type="password" class="form-control" placeholder="enter OLD PASSWORD" id='opassword' name='opassword'></div>
                  <div class="col-md-12"><label class="labels">New Password</label><input type="password" class="form-control" placeholder="enter New Password" id='password' name='password'></div>
                  <div class="col-md-12"><label class="labels">Confirm New Password</label><input type="password" class="form-control" placeholder="Confirm  New Password"  id='cpassword' name='cpassword'></div>
                  <div class="col-md-12"><button class="btn btn-primary profile-button" type="submit" name="change-submit">change Password</button></div>

        </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>

<div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #45526e"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              SHMS - Smart Health Management System 
            </h6>
            <p>
              we provide smart daily health manegment system fro you.
              
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">Unlimited Daily health Storage</a>
            </p>
            <p>
              <a class="text-white">Analise your data</a>
            </p>
            <p>
              <a class="text-white">graphical Health progress </a>
            </p>
            <p>
              <a class="text-white">Remote Monitoring</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white" href="https://www.healthchecks360.com/">Health Checks</a>
            </p>
            <p>
              <a class="text-white" href="https://www.thehealthfeed.com/">The Health Feed</a>
            </p>
            <p>
              <a class="text-white" href="https://www.healthyads.com/" >Healthyads</a>
            </p>
           
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Addis Abeba, Ethiopia</p>
            <p><i class="fas fa-envelope mr-3"></i> SHMS_info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 251 11 758496</p>
            <p><i class="fas fa-print mr-3"></i> + 251 13 568497</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2023 Copyright:
              <a class="text-white" 
                 >SHMS</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               href="https://www.facebook.com"
               class="text-white"
               role="button"
              
               ><img  src="image/icon/facebook logo_icon.png" ></img
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               href="https://www.twitter.com"
               role="button"
               ><img src="image/icon/twitter logo_icon.png"></img
              ></a>

        

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               href="https://www.instagram.com"
               role="button"
               ><img src="image/icon/instagram logo_icon.png"></img
              ></a>

              <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               href="https://www.linkedin.com"
               role="button"
               ><img src="image/icon/linkedin logo_icon.png"></img
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>


 
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="lib/jquery/jquery-3.3.1.slim.min.js" ></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="lib/js/popper.min.js" ></script>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->

<script src="lib.js/bootstrap-4.0.0-beta.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"> -->
<script src="lib/js/sweetalert2.all.min.js" ></script>


</body>
</html>