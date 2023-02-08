<!DOCTYPE html>
<?php 
include 'userfunction.php';

$con=mysqli_connect("localhost","root","","shms");
if(isset($_POST['D-user']))
{
  $uemail=$_POST['uemail'];
  $query="delete from users where email='$uemail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}
?>
<html lang="en">
<meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="Style/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<!-- Latest compiled JavaScript -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> YOUR HEALTH </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
    <body style="">

   
   <div class="container-fluid" style="margin-top:9%;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME RECEPTIONIST </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:35%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">User's List</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Record's List</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete User</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Patient List</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Doctor</a>
      <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Queries</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
      <div class="container-fluid container-fullw bg-white" >
          <div class="row ">

            <div class="col-sm-4 d-grid" style="">
                <div class="panel panel-white no-radius text-center">
                  <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">User's List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                          View Doctors
                        </a>
                      </p>
                    </div>
                </div>

             </div>



            <div class="col-sm-4 d-grid" style="">
                <div class="panel panel-white no-radius text-center">
                  <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Record's List</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          View Prescriptions
                        </a>
                      </p>
                    </div>
                </div>

             </div>
            <div class="col-sm-4 d-grid" style="">
                <div class="panel panel-white no-radius text-center">
                  <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>
                    
                    <p class="cl-effect-1">
                      <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                      &nbsp|
                      <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                        Delete User
                      </a>         
                      </p>
                    </div>
                </div>

             </div>

                <!-- <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Patients
                        </a>
                      </p>
                    </div>
                  </div>
                </div> -->
              

                <!-- <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div> -->

                <!-- <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Record's List</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          View Prescriptions
                        </a>
                      </p>
                    </div>
                  
                </div> -->

                

<!-- 
                <div class="col-sm-4 d-grid" style="">
                         <div class="panel panel-white no-radius text-center">
                           <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Delete User
                        </a>
                      </p>
                    </div>
                  </div>
                </div> -->
              </div>
                        

      
                
              </div>
            </div>
      
      
            
  <div class="tab-pane fade active" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
              

              <div class="col-md-8">
      <form class="form-group" action="search.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="user_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="User_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Password</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $con=mysqli_connect("localhost","root","","shms");
                    global $con;
                    $query = "select * from users";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
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
                    }

                  ?>
                </tbody>
              </table>
          <br>
      </div>
      <div class="tab-pane fade active" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
              

              <div class="col-md-8">
                 <form class="form-group" action="search.php" method="post">
                   <div class="row">
                   <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class = "form-control"></div>
                   <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>
                 </form>
               </div>
   
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Record ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                       
                     <th scope="col">HEARTRATE</th>
                     <th scope="col">HEARTRATE-STATE</th>
                     <th scope="col">BLOOD-OXYGEN</th>
                     <th scope="col">BLOOD-OXYGEN-STATE</th>
                     <th scope="col">GLUCOSE</th>
                     <th scope="col">GLUCOSE-STATE</th>
                     <th scope="col">weight</th>
                     <th scope="col">height</th>
                     <th scope="col">Age</th>
                     <th scope="col">BMI</th>
                     <th scope="col">STRESS</th>
                     <th scope="col">STRESS-STATE</th>
                     <th scope="col">TIME</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $con=mysqli_connect("localhost","root","","shms");
                    global $con;
                    $query = "select * from records";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
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
                      $glucose = $row['glucose'];
                      $glucose_status = $row['glucose_status'];
                      $weight = $row['weight'];
                      $height = $row['height'];
                      $Age = $row['Age'];
                      $bmi = $row['bmi'];
                      $stress = $row['stress'];
                      $stress_state = $row['stress_state'];
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
                        <td>$glucose</td>
                        <td>$glucose_status</td>
                        <td>$weight</td>
                        <td>$height</td>
                        <td>$Age</td>
                        <td>$bmi</td>
                        <td>$stress</td>
                        <td>$stress_state</td>
                        <td>$time</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>


      
      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="adminpage.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="uemail" required></div><br><br>
                  
                </div>
          <input type="submit" name="D-user" value="Delete user" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>




      </div>
   </div>




   <footer class="deneb_footer ">
        <div class="widget_wrapper" style="background-image:
          url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="widget widegt_about">
                  <div class="widget_title">
                    <img src="assets/images/logo_1.png" class="img-fluid"
                      alt="">
                  </div>
                  <p>Wecare.</p>
                  <ul class="social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="widget widget_link">
                  <div class="widget_title">
                    <h4>Links</h4>
                  </div>
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="widget widget_contact">
                  <div class="widget_title">
                    <h4>Contact Us</h4>
                  </div>
                  <div class="contact_info">
                    <div class="single_info">
                      <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                      </div>
                      <div class="info">
                        <p><a href="tel:+919246147999">1800-121-3637</a></p>
                        <p><a href="tel:+919246147999">+91 924-614-7999</a></p>
                      </div>
                    </div>
                    <div class="single_info">
                      <div class="icon">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="info">
                        <p><a href="mailto:info@deneb.com">info@deneb.com</a></p>
                        <p><a href="mailto:services@deneb.com">services@deneb.com</a></p>
                      </div>
                    </div>
                    <div class="single_info">
                      <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="info">
                        <p>125, Park street aven, Brocklyn,<span>Newyork.</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright_area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="copyright_text">
                  <p>Copyright &copy; 2020 All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>