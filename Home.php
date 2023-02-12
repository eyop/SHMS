<!DOCTYPE html>
<?php
include 'userfunction.php';
// include('newfunc.php');
$con = mysqli_connect('localhost', 'root', '', 'shms');

$uid = $_SESSION['uid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$gender = $_SESSION['gender'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];


if (isset($_POST['app-submit'])) {
  $uid = $_SESSION['uid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $gender = $_SESSION['gender'];
  $contact = $_SESSION['contact'];

  if (!empty($bpm)) {
    $bpm = "NULL";
  } else {

    $bpm = $_POST['HRM_v'];
  }

  if (!empty($bpmstate)) {
    $bpmstate = "NULL";
  } else {
    $bpmstate = $_POST['HRM_state'];
  }

  if (!empty($Glucose)) {
    $Glucose = "NULL";
  } else {
    $Glucose = $_POST['Glucose_v'];
  }

  if (!empty($Glucosestate)) {
    $Glucosestate = "NULL";
  } else {
    $Glucosestate = $_POST['Glucose_state'];
  }

  if (!empty($oxygen)) {
    $oxygen = "NULL";
  } else {
    $oxygen = $_POST['OXY_v'];
  }

  if (!empty($oxygenstate)) {
    $oxygenstate = "NULL";
  } else {
    $oxygenstate = $_POST['OXY_state'];
  }

  if (!empty($BMIwight)) {
    $BMIwight = "NULL";
  } else {
    $BMIwight = $_POST['BMI_w'];
  }

  if (!empty($BMI_h)) {
    $BMI_h = "NULL";
  } else {
    $BMI_h = $_POST['BMI_h'];
  }

  if (!empty($BMI_a)) {
    $BMI_a = "NULL";
  } else {
    $BMI_a = $_POST['BMI_a'];
  }

  if (!empty($BMI_R)) {
    $BMI_R = "NULL";
  } else {
    $BMI_R = $_POST['BMI_r'];
  }
  if (!empty($BPD_v)) {
    $BPD_v = "NULL";
  } else {
    $BPD_v = $_POST['BPD_v'];
  }
  if (!empty($BPS_v)) {
    $BPS_v = "NULL";
  } else {
    $BPS_v = $_POST['BPS_v'];
  }
  if (!empty($BP_state)) {
    $BP_state = "NULL";
  } else {
    $BP_state = $_POST['BP_state'];
  }



  // $bpm = !empty($bpm) ? "'$bpm'" : "NULL";
  // $bpmstate = !empty($bpmstate) ? "'$bpmstate'" : "NULL";
  // $Glucose = !empty($Glucose) ? "'$Glucose'" : "NULL";
  // $Glucosestate = !empty($Glucosestate) ? "'$Glucosestate'" : "NULL";
  // $oxygen = !empty($oxygen) ? "'$oxygen'" : "NULL";
  // $oxygenstate = !empty($oxygenstate) ? "'$oxygenstate'" : "NULL";
  // $BMIwight = !empty($BMIwight) ? "'$BMIwight'" : "NULL";
  // $BMI_a = !empty($BMI_a) ? "'$BMI_a'" : "NULL";
  // $BMI_R = !empty($BMI_R) ? "'$BMI_R'" : "NULL";
  
  $EX_D = $_POST['EX_d'];
  if (!empty($EX_D )) {
    
      $EX_C = $_POST['EX_cal'];
  
    
    
  $EX_State = $_POST['EX_state'];
  
    $query = mysqli_query($con, "insert into exercise(uid,fname,lname,gender,email,contact,exercisetype,duration,calories) values($uid,'$fname','$lname','$gender','$email','$contact','$EX_State','$EX_D','$EX_C')");
    if ($query) {
      echo "<script>alert('Your appointment successfully booked');</script>";
    } else {
      echo "<script>alert('Unable to process your request. Please try again!');</script>";
    }
  } 
  else {
    $query = mysqli_query($con, "insert into records(uid,fname,lname,gender,email,contact,heartrate,heartrate_state,bloodoxygen,bloodoxygen_state,BP_SYSTOLIC,BP_DIASTOLIC,BP_state,glucose,glucose_status,weight,height,Age,bmi) values($uid,'$fname','$lname','$gender','$email','$contact','$bpm','$bpmstate','$oxygen','$oxygenstate','$BPS_v','$BPD_v','$BP_state','$Glucose','$Glucosestate','$BMIwight','$BMI_h','$BMI_a','$BMI_R')");

    if ($query) {
      echo "<script>alert('Your appointment successfully booked');</script>";
    } else {
      echo "<script>alert('Unable to process your request. Please try again!');</script>";
    }
    

  }
  header("Location:Home.php");
}


?>

<html lang="en">
<head>
  <title>Example</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <link rel="stylesheet" href="Style/style.css"> -->
  <!-- Latest compiled and minified CSS -->


  <!-- <link rel="stylesheet" href="Style/style.css"> -->

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="Style/animate.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  <!-- Latest compiled JavaScript -->
</head>
<body  >

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"  style="animation: fadeInRight 1s ;transition-delay: 5s;">
  <a class="navbar-brand" href="#" style="margin-left: 2%;"><i class="fa fa-user-plus" aria-hidden="true"></i> YOUR HEALTH </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <script>
     function clickDiv(id) {
       document.querySelector(id).click();
     }
        
     function BMI(){
      let height= document.getElementById('BMI_h').value;
      let weight= document.getElementById('BMI_w').value;
      let bmi = weight/((height/100)*(height/100));
      
      document.getElementById("BMI_r").value = Math. round(bmi);
      

    }

                            
      function undisableTxt() {
        document.getElementById("EX_d").disabled = false;
      }
      function calval(){
        let cv=document.getElementById("EX_d");
       
        // document.getElementsById("EX_c").value=( cv.value*4);
        document.getElementById("EX_cal").value=( cv.value*4);
      }


 </script>
  <style >
    .bg-primary {
      background:-webkit-linear-gradient(left, #1fb914, #52db2d);
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
li{
  margin-left: 15px
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

<div class="collapse navbar-collapse " id="navbarSupportedContent"  style="animation: bounceOutDown 1s ;transition-delay: 1s;" >
     <ul class="navbar-nav mr-auto" style="margin-left: 2%; ">
       <li class="nav-item " >
         <a class="nav-link" href="Home1.php"><i class="fa fa-sign-out" id="list-dash-list" aria-hidden="true"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#list-rec"><i class="fa fa-sign-out" id="list-rec-list"aria-controls="home">Record</i></a>
          </li>
       <li class="nav-item">
        <a class="nav-link" href="Measurements.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Measurment</a>
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

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

<body style="">
<div class="container-fluid " style="animation: rotateInDownLeft 3s ;transition-delay: 1s;">
        <h3 style = "margin-top: 5%;  margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?php echo $username; ?> 
       </h3>
    <div class="row">
          <div class="col-md-4" style="max-width:49%; margin-top: 3% ">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
              <a class="list-group-item list-group-item-action" href="#HRM" id="list-HRM-list" role="tab" data-toggle="modal" aria-controls="home">HEART RATE MONITOR</a>
              <a class="list-group-item list-group-item-action" href="#OXY" id="list-OXY-list" role="tab" data-toggle="modal" aria-controls="home">Blood OXYGEN MONITOR</a>
              <a class="list-group-item list-group-item-action" href="#Glucose" id="list-Glucose-list" role="tab" data-toggle="modal" aria-controls="home"> BLOOD GLUCOSE</a>
              <a class="list-group-item list-group-item-action" href="#BMI" id="list-BMI-list" role="tab" data-toggle="modal" aria-controls="home"> BODY MASS INDEX MOITOR</a>
              <a class="list-group-item list-group-item-action" href="#BP" id="list-BP-list" role="tab" data-toggle="modal" aria-controls="home"> Blood Pressure</a>
              <a class="list-group-item list-group-item-action" href="#EX" id="list-EX-list" role="tab" data-toggle="modal" aria-controls="home"> Exercise</a>
              
            </div><br>
          </div>
   <div class="col-md-8" style="margin-top: 1%;">
    <div class="tab-content" id="nav-tabContent" style="">


      
      <div class="tab-pane  active" id="list-rec" role="tabpanel" aria-labelledby="list-rec-list" style="animation: flip  1s  ;transition-delay: 1s;" >
        <div class="container-fluid container-fullw bg-white" >
              <div class="row ">

                   <div class="col-sm-4 d-grid" style="">
                       <div class="panel panel-white no-radius text-center">
                         <div class="panel-body" >
                          <img src="image/cardiogram-heartn.svg" style="width: 100px;height: 100px;"/>
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
                           <img src="image/lungs-lung-svgrepo-com.svg" style="width: 100px;height: 100px;"/>
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
                          <div class="panel-body"><img src="image/health-care-blood.svg" style="width: 100px;height: 100px;"/>
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
                          <img src="image/blood-donation-blood-drop.svg" style="width: 100px;height: 100px;"/>
                            <h4 class="StepTitle" style="margin-top: 5%;">Blood Pressure</h2>
                          
                            <p class="cl-effect-1">
                              <a href="#BP" onclick="clickDiv('#list-BP-list')">
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
                              <a href="#BMI" onclick="clickDiv('#list-BMI-list')">
                              Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-sm-4 d-grid" style="">
                        <div class="panel panel-white no-radius text-center">
                          <div class="panel-body" >
                          <img src="image/injection-doctor-svgrepo-com.svg" style="width: 100px;height: 100px;"/>
                            <h4 class="StepTitle" style="margin-top: 5%;">Medication</h2>
                          
                            <p class="cl-effect-1">
                              <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
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
                              <a href="#EX" onclick="clickDiv('#list-EX-list')">
                              Measure
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
      
      
                     

                      </div>

         
                </div>
             </div>


          <!-- <div class="tab-pane fade" id="HRM" role="tabpanel" aria-labelledby=""> -->
                      
          
        <div class="modal fade "id="OXY" tabindex="-1"  aria-hidden="false" aria-labelledby="list-OXY-list" role="tabpanel" aria-hidden="false"  >
          <form class="container" method="post" action="Home.php" style="animation: swing 2s  ;transition-delay: 2s;">
             <div class="modal-dialog">
    

              <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title " id="OXY-t">BLOOD OXYGEN MONITOR</h4>
                 
               </div>
               <div class="modal-body">
                 <div class="modal-body mx-3">
                   <div class="md-form ">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <label data-error="wrong" data-success="right" for="OXY_in">SpO2 value:</label>
                     <input type="number" id="OXY_v" class="form-control " name="OXY_v"><label>%</label>
                   </div>
                   <div class="md-form ">
                         <i class="fas fa-lock prefix grey-text"></i>
                         <label data-error="wrong" data-success="right" for="OXY_state-pass">Select Current Status:</label>
                         <select class="form-control" id="OXY_state" name="OXY_state">
                               <option>General</option>
                               <option>Resting</option>
                               <option>Exercise Lightly</option>
                               <option>Exercise moderatly</option>
                               <option>Hiking</option>
                               <option>Tired</option>
                               <option>Unwell</option>
                         </select>
           
                    </div>
  
                  </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                            <button type="submit" name="app-submit" class="btn btn-primary">Submit</button>
                          </div>
                </div>
               </div>
            </div>
         </form>
     </div>
        <div class="modal fade"id="HRM" tabindex="-1"  aria-hidden="false" aria-labelledby="list-HRM-list" role="tabpanel" aria-hidden="false">
          <form class="container"  method="post" action="Home.php" style="animation: bounceInUp 2s  ;transition-delay: 2s;">
             <div class="modal-dialog">
    

              <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title " id="HRM-t">HEART RATE</h4>
                 
               </div>
               <div class="modal-body">
                 <div class="modal-body mx-3">
                   <div class="md-form ">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <label data-error="wrong" data-success="right" for="HRM_in">bpm value:</label>
                     <input type="number" id="HRM_v" min="15" max="300" class="form-control " name="HRM_v">
                   </div>
                   <div class="md-form ">
                         <i class="fas fa-lock prefix grey-text"></i>
                         <label data-error="wrong" data-success="right" for="Sstate-pass">Select Current Status:</label>
                         <select class="form-control" id="HRM_state" name="HRM_state">
                               <option>General</option>
                               <option>Resting</option>
                               <option>After Exercise</option>
                               <option>Before Exercise</option>
                               <option>Angry</option>
                               <option>Sad</option>
                                <option>Unwell</option>
                         </select>
           
                    </div>
  
                  </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                            <button type="submit" name="app-submit" class="btn btn-primary">Submit</button>
                          </div>
                </div>
               </div>
            </div>
         </form>
     </div>
     <div class="modal fade"id="BP" tabindex="-1"  aria-hidden="false" aria-labelledby="list-BP-list" role="tabpanel" aria-hidden="false">
                                <form class="container"  method="post" action="Home.php" style="animation: flip 2s  ;transition-delay: 2s;">
                                   <div class="modal-dialog">
                          
                      
                                    <div class="modal-content">
                                     <div class="modal-header">
                                        <h4 class="modal-title " id="BP-t">Blood Pressure</h4>
                                       
                                     </div>
                                     <div class="modal-body">
                                       <div class="modal-body mx-3">
                                         <div class="md-form ">
                                           <i class="fas fa-envelope prefix grey-text"></i>
                                           <label data-error="wrong" data-success="right" for="BPS_in">SYSTOLIC (MMHG):</label>
                                           <input type="range" id="BPS_v" value="121" min="121" max="300" class="form-control " name="BPS_v" oninput="this.nextElementSibling.value = this.value">
                                           <output style="text-align: center;font-size: 20px;font-weight: bold;"> 121</output><br>
                                    
                                         </div>
                                         <div class="md-form ">
                                         <i class="fas fa-envelope prefix grey-text"></i>
                                         <label data-error="wrong" data-success="right" for="BPD_in">DIASTOLIC (MMHG)</label>
                                           <input type="range" id="BPD_v" value="121" min="121" max="300" class="form-control " name="BPD_v" oninput="this.nextElementSibling.value = this.value">
                                           <output style="text-align: center;font-size: 20px;font-weight: bold;"> 121</output><br>
                                           </div>
                                           <div class="md-form ">
                                             <i class="fas fa-envelope prefix grey-text"></i>
                                             <label data-error="wrong" data-success="right" for="HRM_in">bpm :</label>
                                             <input type="number" id="HRM_v" min="15" max="300"class="form-control " name="HRM_v"><br>
                                           </div>
                                         <div class="md-form ">
                                               <i class="fas fa-lock prefix grey-text"></i>
                                               <label data-error="wrong" data-success="right" for="Sstate-pass"> Medication:</label>
                                               <select class="form-control" id="BP_state" name="BP_state">
                                                     <option>None</option>
                                                     <option>Taken</option>
                                                     <option>Non taken</option>
                                               </select>
                                 
                                          </div>
                        
                                        </div>
                                                <div class="modal-footer">
                                                  <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                                                  <button type="submit" name="app-submit" class="btn btn-primary">Submit</button>
                                                </div>
                                      </div>
                                     </div>
                                  </div>
                               </form>
                           </div>
                      

        <div class="modal fade"id="Glucose" tabindex="-1"  aria-hidden="false" aria-labelledby="list-Glucose-list" role="tabpanel" aria-hidden="false">
          <form class="container"  method="post" action="Home.php" style="animation: rollIn 2s  ;transition-delay: 2s;">
             <div class="modal-dialog">
    

              <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title " id="Glucose-t">Blood GLUCOSE MONITOR</h4>
                 
               </div>
               <div class="modal-body">
                 <div class="modal-body mx-3">
                   <div class="md-form ">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <label data-error="wrong" data-success="right" for="Glucose_in">MG/DL value:</label>
                     <input type="number" id="Glucose_v" class="form-control " name="Glucose_v"><label>%</label>
                   </div>
                   <div class="md-form ">
                         <i class="fas fa-lock prefix grey-text"></i>
                         <label data-error="wrong" data-success="right" for="Sstate-pass">Select Current Status:</label>
                         <select class="form-control" id="Glucose_state" name="Glucose_state">
                           <option>Fasting</option>
                           <option>Pre-meal</option>
                           <option>Post-meal</option>
                           <option>Before Sleep</option>
                           <option>General</option>
                         </select>
           
                    </div>
  
                  </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                            <button type="submit" name="app-submit" class="btn btn-primary">Submit</button>
                          </div>
                </div>
               </div>
            </div>
         </form>
     </div>




     
     <div class="modal fade"id="EX" tabindex="-1"  aria-hidden="false" aria-labelledby="list-EX-list" role="tabpanel" aria-hidden="false">
                                <form class="container"  method="post" action="Home.php" style="animation: rollIn 2s  ;transition-delay: 2s;">
                                   <div class="modal-dialog">
                          
                      
                                    <div class="modal-content">
                                     <div class="modal-header">
                                        <h4 class="modal-title " id="EX-t">Exercise</h4>
                                       
                                     </div>
                                     <div class="modal-body">
                                       <div class="modal-body mx-3">
                                         <div class="md-form ">
                                           <i class="fas fa-envelope prefix grey-text"></i>
                                           <select class="form-control" id="EX_state" name="EX_state"  onchange="undisableTxt()"  required>
                                            <option value="">Choose an Exercise</option>
                                            <option value="running"> Running</option>
                                            <option value="steps">Steps</option>
                                            <option value="walking">Walking</option>
                                            <option value="football">Football</option>
                                            <option value="benchpress">Benchpress</option>
                                            <option value="plank">Plank</option>
                                            <option value="yoga">Yoga</option>
                                            <option value="swimming">Swimming</option>
                                            <option value="boxing">Boxing</option>
                                            <option value="pushups">Pushups</option>
                                            <option value="squats">Squats</option>
                                        </select><br>
                                         </div>
                                         <div class="md-form ">
                                               <label data-error="wrong" data-success="right" for="Sstate-pass">Exercise duration:</label>
                                          <input type="number" style="" min="0" id="EX_d"class="form-control " name="EX_d" placeholder="in Second *" onkeyup="calval();" disabled /><br>
                                          </div>

                                          <div class="md-form ">
                                            <i class="fas fa-lock prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="Sstate-pass"> TOTAL Calories:</label>
                                            <input type="number"  min="0" id="EX_cal"class="form-control " name="EX_cal"   /><br>
                                       </div>
                        
                                        </div>
                                                <div class="modal-footer">
                                                  <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                                                  <button type="submit" name="app-submit" class="btn btn-primary">Submit</button>
                                                </div>
                                      </div>
                                     </div>
                                  </div>
                               </form>
                           </div>


        <div class="modal fade"id="BMI" tabindex="-1"  aria-hidden="false" aria-labelledby="list-BMI-list" role="tabpanel" aria-hidden="false">
          <form class="container"  method="post" action="Home.php" style="animation: fadeInLeft 3s  ;transition-delay: 3s;">
             <div class="modal-dialog">
    

              <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title " id="BMI-t">BODY MASS INDEX MOITOR</h4>
                 
               </div>
               <div class="modal-body">
                 <div class="modal-body mx-3">
                 <div class="md-form ">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <label data-error="wrong" data-success="right" for="BMI_in_w">Weight:</label>
                     <input type="number" id="BMI_w"class="form-control " name="BMI_w"><label>KG</label>
                   </div>
                 <div class="md-form ">
                   <i class="fas fa-envelope prefix grey-text"></i>
                   <label data-error="wrong" data-success="right" for="BMI_in_h">height:</label>
                   <input type="number" id="BMI_h" class="form-control " name="BMI_h" ><label>CM</label>
                 </div>
                 <div class="md-form ">
                   <i class="fas fa-envelope prefix grey-text"></i>
                   <label data-error="wrong" data-success="right" for="BMI_in_a">Age:</label>
                   <input type="number" id="BMI_a" class="form-control "onclick="BMI()"  name="BMI_a">
                 </div>
                 <div class="md-form ">
                   <i class="fas fa-envelope prefix grey-text"></i>
                   <!-- <label data-error="wrong" data-success="right" for="BMI_in_r">Age:</label> -->
                   <input type="number" id="BMI_r" class="form-control" name="BMI_r" >
                   <!-- <button type="button" class="btn btn-secondary"   >Calculate</button> -->
                 </div>
                  </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                            <button type="submit"  name="app-submit" class="btn btn-primary">Submit</button>
                          </div>
                </div>
               </div>
            </div>
         </form>
     </div>

     


  </div>

                      

          </body>
</html>

