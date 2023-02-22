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


?>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <link rel="stylesheet" href="Style/style.css"> -->
  
  <!-- Latest compiled and minified CSS -->


  <link rel="stylesheet" href="Style/style.css">

  <link rel="stylesheet" href="Style/animate.css">

       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet"> -->
       <link href="lib/css/5.2.3-bootstrap.css" rel="stylesheet">

       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="lib/js/5.2.3-bootstrap.bundle.min.js"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="lib/js/3.4.1-bootstrap.min.js"></script>

  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <script src="lib/jquery/3.6.1-jquery.min.js"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- <script src="lib/js/bootstrap.min-3.4.1.js"></script> -->


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" href="lib/css/4.0.0-alpha.6-bootstrap.min.css">
  <!-- Latest compiled JavaScript -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="animation: fadeInRight 1s ;transition-delay: 5s;">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> YOUR HEALTH </a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                         <script>
                             function clickDiv(id) {
                               document.querySelector(id).click();
                             }
                                
                          
                          </script>
  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #942ac1;
    border-color: #007bff;
}
a:active {
    z-index: 2;
    color: #fff;
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
.navbar {
    overflow: hidden;
    
    color: white;
    position: fixed;
    top: 0;
    width: auto;
    border-top-right-radius: 10px;
    border: #f2f2f2 2;
    padding: 0;
    
  }
  .nav-link{
  color: white;"
}
  .navbar a:hover {
    background-color: #ddd;
    color: black;
    border-radius: 10vh;
  }


  </style>

 <div class="collapse navbar-collapse" id="navbarSupportedContent"style="animation: bounceOutDown 1s ;transition-delay: 1s;">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link " href="Home1.php"><i class="fa fa-sign-out " id="list-dash-list"aria-controls="home"></i>Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link active" href="Home.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Record</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link " href="Measurements.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Measurment</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="progress.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Progress</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Profile</a>
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

  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}

    li{
  margin-left: 15px
}
  </style>

<body style="">
<div class="container-fluid" style="margin-top:10%;" style="animation: rotateInDownLeft 3s ;transition-delay: 1s;">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?php echo $username ?> 
   </h3>
    <div class="row">
  <div class="col-md-4 " style="max-width:30%; margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#all-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">ALL History</a>
      <a class="list-group-item list-group-item-action" href="#list-home"id="list-home-list" data-toggle="list"  role="tab" aria-controls="home">HEART RATE History</a>
      <a class="list-group-item list-group-item-action" href="#list-oxy" id="list-oxy-list" role="tab" data-toggle="list" aria-controls="home">Blood OXYGEN History</a>
      <a class="list-group-item list-group-item-action" href="#list-glu" id="list-glu-list" role="tab" data-toggle="list" aria-controls="home">Blood Glucose History</a>
      <a class="list-group-item list-group-item-action" href="#list-pre" id="list-pre-list" role="tab" data-toggle="list" aria-controls="home">Blood Pressure History</a>
      <a class="list-group-item list-group-item-action" href="#list-bmi" id="list-bmi-list" role="tab" data-toggle="list" aria-controls="home">BODY MASS INDEX History</a>
      <a class="list-group-item list-group-item-action" href="#list-ex" id="list-ex-list" role="tab" data-toggle="list" aria-controls="home">Exercise History</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="">


      <div class="tab-pane  active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list"  style="animation: flip  5s  ;transition-delay: 5s;">
         <div class="container-fluid container-fullw bg-white" >
              <div class="row">
              
                 <div class="col-sm-4 d-grid" style="">
                          <div class="panel panel-white no-radius text-center">
                            <div class="panel-body" >
                             <img src="image/cardiogram-heartn.svg" style="width: 100px;height: 100px;"/>
                              <h4 class="StepTitle" style="margin-top: 5%;">HEART RATE MONITOR</h2>
                              
                              <p class="cl-effect-1">
                                <a href="#list-home" onclick="clickDiv('#list-home-list')">
                                  Measure
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>


                        <div class="col-sm-4 d-grid" style="">
                         <div class="panel panel-white no-radius text-center">
                           <div class="panel-body" >
                           <img src="image/lungs-lung-svgrepo-com.svg" style="width: 100px;height: 100px;"/>
                             <h4 class="StepTitle" style="margin-top: 5%;">Blood OXYGEN MONITOR</h2>
                           
                             <p class="links cl-effect-1">
                               <a href="#list-oxy" onclick="clickDiv('#list-oxy-list')">
                               Measure
                               </a>
                             </p>
                           </div>
                         </div>
                       </div>

                       <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body"><img src="image/health-care-blood.svg" style="width: 100px;height: 100px;"/>
                            <h4 class="StepTitle" style="margin-top: 5%;"> Blood Glucose MONITOR</h4>
                                                  
                            <p class="links cl-effect-1">
                              <a href="#list-glu" onclick="clickDiv('#list-glu-list')">
                                Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>


                      <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body" >
                          <img src="image/blood-donation-blood-drop.svg" style="width: 100px;height: 100px;"/>
                            <h4 class="StepTitle" style="margin-top: 5%;">Blood Pressure</h2>
                          
                            <p class="cl-effect-1">
                              <a href="#list-pre" onclick="clickDiv('#list-pre-list')">
                              Measure
                              </a>
                            </p>
                          </div>
                        </div>
                        </div>
                


                        <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body" >
                          <img src="image/body-fitness-scale.svg" style="width: 100px;height: 100px;"/>
                            <h4 class="StepTitle" style="margin-top: 5%;">BODY MASS INDEX MOITOR</h2>
                          
                            <p class="cl-effect-1">
                              <a href="#list-bmi" onclick="clickDiv('#list-bmi-list')">
                              Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>

                           
                      <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body" >
                          <img src="image/person-lifting-weights-svgrepo-com.svg" style="width: 100px;height: 100px;"/>
                            <h4 class="StepTitle" style="margin-top: 5%;">Exercise</h2>
                          
                            <p class="cl-effect-1">
                              <a href="#list-ex" onclick="clickDiv('#list-ex-list')">
                              Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                      
                
         
            </div>
     </div>
</div>
      
<div class="tab-pane fade " id="all-hist" role="tabpanel" aria-labelledby="list-pat-list"  style="animation: swing 2s  ;transition-delay: 2s;">
        <form class="form-group" method="post" action="search.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="date"  class="form-control" name="date"format="yyyy-mm-dd"min="2022-02-20" max="2032-02-20" required></div><br><br>
                  
                </div>
          <input type="submit" name="search_data" value="search data" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>

          <!-- SELECT * FROM `records` WHERE `time`=("2023-02-03 13:06:06"); -->
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">HEARTRATE</th>
              <th scope="col">HEARTRATE-STATE</th>
              <th scope="col">BLOOD-OXYGEN</th>
              <th scope="col">BLOOD-OXYGEN-STATE</th>
              <th scope="col">GLUCOSE</th>
              <th scope="col">GLUCOSE-STATE</th>
              <th scope="col">BP_SYSTOLIC</th>
              <th scope="col">BP_DIASTOLIC</th>
              <th scope="col">BMI</th>
              <th scope="col">TIME</th>
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select heartrate,heartrate_state,bloodoxygen,bloodoxygen_state,glucose,glucose_status,BP_SYSTOLIC,BP_DIASTOLIC,bmi,time from records where uid = $uid;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        

            ?><tr>
            <td><?php echo $row['heartrate'];?></td>
            <td><?php echo $row['heartrate_state'];?></td>
            <td><?php echo $row['bloodoxygen'];?></td>
            <td><?php echo $row['bloodoxygen_state'];?></td>
            <td><?php echo $row['glucose'];?></td>
            <td><?php echo $row['glucose_status'];?></td>
            
            <td><?php echo $row['BP_SYSTOLIC'];?></td>
            <td><?php echo $row['BP_DIASTOLIC'];?></td>
            <td><?php echo $row['bmi'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
</div>





<div class="tab-pane fade " id="list-home" role="tabpanel" aria-labelledby="list-home-list" style="animation: bounceInUp 2s  ;transition-delay: 2s;">
<table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">HEARTRATE</th>
              <th scope="col">HEARTRATE-STATE</th>
              <th scope="col">TIME</th>
             
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select heartrate,heartrate_state,time from records where uid ='$uid' and heartrate > 0;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        
                #$fname = $row['fname'];
                #$lname = $row['lname'];
                #$email = $row['email'];
                #$contact = $row['contact'];
            ?><tr>
            <td><?php echo $row['heartrate'];?></td>
            <td><?php echo $row['heartrate_state'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
  </div>

<div class="tab-pane fade " id="list-oxy" role="tabpanel" aria-labelledby="list-oxy-list" style="animation: flip 2s  ;transition-delay: 2s;">
<table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">BLOOD-OXYGEN</th>
              <th scope="col">BLOOD-OXYGEN-STATE</th>
              <th scope="col">TIME</th>
             
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select bloodoxygen,bloodoxygen_state,time from records where uid ='$uid' and bloodoxygen > 0;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        
                #$fname = $row['fname'];
                #$lname = $row['lname'];
                #$email = $row['email'];
                #$contact = $row['contact'];
            ?><tr>
            <td><?php echo $row['bloodoxygen'];?></td>
            <td><?php echo $row['bloodoxygen_state'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
  </div>

<div class="tab-pane fade " id="list-glu" role="tabpanel" aria-labelledby="list-glu-list"  style="animation: rollIn 2s  ;transition-delay: 2s;">
<table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">GLUCOSE</th>
              <th scope="col">GLUCOSE-STATE</th>
              <th scope="col">TIME</th>
             
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select glucose,glucose_status,time from records where uid ='$uid' and glucose > 0;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        
                #$fname = $row['fname'];
                #$lname = $row['lname'];
                #$email = $row['email'];
                #$contact = $row['contact'];
            ?><tr>
            <td><?php echo $row['glucose'];?></td>
            <td><?php echo $row['glucose_status'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
  </div>

  <div class="tab-pane fade " id="list-bmi" role="tabpanel" aria-labelledby="list-bmi-list"  style="animation: rollIn 2s  ;transition-delay: 2s;">
<table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">WEIGHT</th>
              <th scope="col">HEIGHT</th>
              <th scope="col">BMI</th>
              <th scope="col">TIME</th>
             
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select weight,height,bmi,time from records where uid ='$uid' and bmi > 0 ;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        
            ?><tr>
            <td><?php echo $row['weight'];?></td>
            <td><?php echo $row['height'];?></td>
            <td><?php echo $row['bmi'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
  </div>


  <div class="tab-pane fade " id="list-pre" role="tabpanel" aria-labelledby="list-pre-list"  style="animation: rollIn 2s  ;transition-delay: 2s;">
<table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">BP_SYSTOLIC</th>
              <th scope="col">BP_DIASTOLIC</th>
              <th scope="col">TIME</th>
             
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select BP_SYSTOLIC,BP_DIASTOLIC,time from records where uid ='$uid' and BP_SYSTOLIC > 0 and BP_DIASTOLIC > 0;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        
            ?><tr>
            <td><?php echo $row['BP_SYSTOLIC'];?></td>
            <td><?php echo $row['BP_DIASTOLIC'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
  </div>


  <div class="tab-pane fade " id="list-ex" role="tabpanel" aria-labelledby="list-ex-list"  style="animation: rollIn 2s  ;transition-delay: 2s;">
  <form class="form-group" method="post" action="search.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="date"  class="form-control" name="date"format="yyyy-mm-dd"min="2022-02-20" max="2032-02-20" required></div><br><br>
                  
                </div>
          <input type="submit" name="search_exercise" value="search data" class="btn btn-primary" onclick="confirm('do you really want to Search?')">
        </form>

  <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">EXERCISE-TYPE</th>
              <th scope="col">DURATION</th>
              <th scope="col">CALORIES</th>
              <th scope="col">TIME</th>
             
            </tr>
          </thead>
          <tbody>
            <?php 

              $con=mysqli_connect("localhost","root","","shms");
              global $con;

              $query = "select exercisetype,duration,calories,time from exercise where uid ='$uid' and duration > 0 ;";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        
            ?><tr>
            <td><?php echo $row['exercisetype'];?></td>
            <td><?php echo $row['duration'];?></td>
            <td><?php echo $row['calories'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   

   </script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="lib/jquery/jquery-3.3.1.slim.min.js" ></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="lib/js/popper.min.js" ></script>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->

<script src="lib/js/bootstrap-4.0.0-beta.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"> -->
<script src="lib/js/sweetalert2.all.min.js" ></script>


</body>
</html>