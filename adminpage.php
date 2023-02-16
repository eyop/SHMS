<!DOCTYPE html>
<?php 
include 'userfunction.php';

$con=mysqli_connect("localhost","root","","shms");
if(isset($_POST['D-user']))
{
  $uemail=$_POST['uemail'];
  $query="delete from users where email='$uemail';";
  $result=mysqli_query($con,$query);

  $query="delete from exercise where email='$uemail';";
  $result=mysqli_query($con,$query);

  $query="delete from records where email='$uemail';";
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

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet"> -->
<link href="lib/css/5.2.3-bootstrap.css" rel="stylesheet">

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="lib/js/5.2.3-bootstrap.bundle.min.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="lib/js/bootstrap.min-3.4.1.js"></script>


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" href="lib/css/4.0.0-alpha.6-bootstrap.min.css" >
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
  </style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

  
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
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
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
      <a class="list-group-item list-group-item-action" href="#add-user" id="list-user-list"  role="tab" data-toggle="list" aria-controls="home">Add User</a>
      <a class="list-group-item list-group-item-action" href="#user-req" id="list-user-req"  role="tab" data-toggle="list" aria-controls="home">User Request</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



    <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                
                  <canvas  id="mycanvas"></canvas>
                

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
                    <th scope="col">country</th>
                    <th scope="col">region</th>
                    
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
                      $country = $row['country'];
                      $region = $row['region'];
                      
                      echo "<tr>
                        <td>$uid</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                        <td>$password</td>
                        <td>$country</td>
                        <td>$region</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
          <br>
      </div>
            
  <div class="tab-pane fade active" id="user-req" role="tabpanel" aria-labelledby="list-user-req">

  <div class="col-md-8">
      <form class="form-group" action="search.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
    <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","shms");
                    global $con;

                    $query = "select * from contact;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
              
                    
                  ?>
                      <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['message'];?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>
      
      <div class="tab-pane fade active" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
              

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
                     <th scope="col">BP_SYSTOLIC</th>
                     <th scope="col">BP_DIASTOLIC</th>
                     <th scope="col">GLUCOSE</th>
                     <th scope="col">GLUCOSE-STATE</th>
                     <th scope="col">weight</th>
                     <th scope="col">height</th>
                     <th scope="col">Age</th>
                     <th scope="col">BMI</th>
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


  <div class="tab-pane fade" id="add-user" role="tabpanel" aria-labelledby="list-user-list">

      <h3 class="register-heading text-center"  >Register as User</h3><br>

        <form class="form-group"  method="post" action="userfunction.php" style="border: #342ac1;">
          <div class="row">
          
          <div class="col-md-6">
          
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                
                                    <div class="col-md-6"  >
                                         
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" id='country'name='country' placeholder='Country'>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" id='region'name='region' placeholder='Region' >
                                        </div>
              
                                        <div>
                                            <input type="submit" class="btn btn-primary" name="Admin_user" onclick="return checklen();" value="Register"/>
                                       </div>
                                    </div>
                </div>
        </form>
      </div>




      </div>
   </div>




   <footer class="deneb_footer fixed-bottom">
      
        <div class="copyright_area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="copyright_text">
                  <p>Copyright &copy; 2023 All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

          <script src="graph.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="lib/jquery/jquery-3.2.1.slim.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
    <script src="lib/js/popper.min.js"></script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script src="lib/js/bootstrap-4.0.0-beta.min.js" ></script>
   
  </body>
</html>