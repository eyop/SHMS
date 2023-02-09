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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
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
  </style>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link " href="Home.php"><i class="fa fa-sign-out " id="list-dash-list"aria-controls="home"></i>Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link active" href="#list-dash"><i class="fa fa-sign-out" aria-hidden="true"></i>Record</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link " href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Measurment</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Progress</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Profile</a>
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
<div class="container-fluid" style="margin-top:10%;">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?php echo $username ?> 
   </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:30%; margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#all-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">ALL History</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">HEART RATE History</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Blood OXYGEN History</a>
      <a class="list-group-item list-group-item-action" href="#list-pre" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Blood Glucose History</a>
      <a class="list-group-item list-group-item-action" href="#list-pr" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Blood Pressure History</a>
      <a class="list-group-item list-group-item-action" href="#list-pr" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">BODY MASS INDEX History</a>
      <a class="list-group-item list-group-item-action" href="#list-pr" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Medication History</a>
      <a class="list-group-item list-group-item-action" href="#list-pr" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Exercise History</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="">


      <div class="tab-pane  active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
         <div class="container-fluid container-fullw bg-white" >
              <div class="row">
              <div class="col-sm-4 d-grid" style="">
                       <div class="panel panel-white no-radius text-center">
                         <div class="panel-body" >
                           <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                           <h4 class="StepTitle" style="margin-top: 5%;">HEART RATE MONITOR</h2>
                           
                           <p class="cl-effect-1">
                             <a href="#HRM" onclick="clickDiv('#list-HRM-list')">
                               Measure
                             </a>
                           </p>
                         </div>
                       </div>
                     </div>

                       <div class="col-sm-4 d-grid" style="">
                         <div class="panel panel-white no-radius text-center">
                           <div class="panel-body" >
                             <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                             <h4 class="StepTitle" style="margin-top: 5%;">Blood OXYGEN MONITOR</h2>
                           
                             <p class="links cl-effect-1">
                               <a href="#OXY" onclick="clickDiv('#list-OXY-list')">
                               Measure
                               </a>
                             </p>
                           </div>
                         </div>
                       </div>


                     <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body">
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                            <h4 class="StepTitle" style="margin-top: 5%;"> Blood Glucose MONITOR</h4>
                                                  
                            <p class="links cl-effect-1">
                              <a href="#Glucose" onclick="clickDiv('#list-Glucose-list')">
                                Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>


                
                      <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body" >
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                            <h4 class="StepTitle" style="margin-top: 5%;">BODY MASS INDEX MOITOR</h2>
                          
                            <p class="cl-effect-1">
                              <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                              Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                
         
            </div>
     </div>
</div>
      
<div class="tab-pane fade active" id="all-hist" role="tabpanel" aria-labelledby="list-pat-list">
         

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
              <!-- <th scope="col">weight</th>
              <th scope="col">height</th>
              <th scope="col">Age</th> -->
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

              $query = "select heartrate,heartrate_state,bloodoxygen,bloodoxygen_state,glucose,glucose_status,bmi,stress,stress_state,time from records where fname ='$fname' and lname='$lname';";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
        

            ?><tr>
            <td><?php echo $row['heartrate'];?></td>
            <td><?php echo $row['heartrate_state'];?></td>
            <td><?php echo $row['bloodoxygen'];?></td>
            <td><?php echo $row['bloodoxygen_state'];?></td>
            <td><?php echo $row['glucose'];?></td>
            <td><?php echo $row['glucose_status'];?></td>
            
            <td><?php echo $row['bmi'];?></td>
            <td><?php echo $row['stress'];?></td>
            <td><?php echo $row['stress_state'];?></td>
            <td><?php echo $row['time'];?></td>
              <?php } ?>
          </tbody>
        </table>
  <br>
</div>





<div class="tab-pane fade active" id="list-home" role="tabpanel" aria-labelledby="list-messages-list">
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

              $query = "select heartrate,heartrate_state,time from records where fname ='$fname' and lname='$lname' and heartrate > 0;";
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

<div class="tab-pane fade active" id="list-pres" role="tabpanel" aria-labelledby="list-messages-list">
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

              $query = "select bloodoxygen,bloodoxygen_state,time from records where fname ='$fname' and lname='$lname' and bloodoxygen > 0;";
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

<div class="tab-pane fade active" id="list-pre" role="tabpanel" aria-labelledby="list-messages-list">
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

              $query = "select glucose,glucose_status,time from records where fname ='$fname' and lname='$lname' and glucose > 0;";
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


  
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">

   </script>



</body>
</html>