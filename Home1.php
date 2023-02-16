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

       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet"> -->
       <link href="lib/css/5.2.3-bootstrap.css" rel="stylesheet">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="Style/animate.css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <script src="lib/jquery/3.6.1-jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="lib/js/3.4.1-bootstrap.min.js"></script>



  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

 <link rel="stylesheet" href="biuty.css">
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

  video{
        width: 100%;
        height: auto;
      }
  </style>

<div class="collapse navbar-collapse " id="navbarSupportedContent"  style="animation: bounceOutDown 1s ;transition-delay: 1s;" >
     <ul class="navbar-nav mr-auto" style="margin-left: 2%; ">
       <li class="nav-item " >
         <a class="nav-link" href="#list-dash"><i class="fa fa-sign-out" id="list-dash-list" aria-hidden="true"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Home.php"><i class="fa fa-sign-out" id="list-rec-list"aria-controls="home">Record</i></a>
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

<body style=" background-color: #011a3e;">
<div class="container-fluid " style="animation: rotateInDownLeft 3s ;transition-delay: 1s;">

<h3 style = "color: white; margin-top: 5%;  margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?php echo $username; ?> 
       </h3>

      <div class="tab-pane  active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list" style="animation: flip  1s  ;transition-delay: 1s;" >
  <div style="   ">

<div class="tab-pane  active" id="Contact" style="animation: rotateIn 4s ;" >
<video
src="image/anim.mp4"
muted
loop
autoplay
></video>
</div>
</div>
<div>

            <div class=" tab-pane container active " id="FUTURES" aria-hidden="true" style="padding-top: 5%;padding-bottom: 5%;" >
              <section id="intro" class="intro" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="intro-content">
                  <div class="container"style="color: white">
                       <div class="text-center">
                          <h2 >YOUR HEALTH</h2>
                          <h4 class="h-light" >Provide best quality health monitoring for you</h4>
                        </div>
                        
                    <div class="row">
                      <div class="col-lg-6" style=" animation: bounceInLeft 10s ;">
                       
                        <div class=" ">
                          <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <ul class="lead-list">
                              <li><span class="fa fa-check-square-o fa-2x
                                  icon-success"></span> <span class="list"><strong>Choose your favourite services</strong><br />
                                  <ul>
                                    <li>
                                      HEARTRATE MONITOR
                                    </li>
                                    <li>
                                      BLOOD-GLUCOSE MONITOR
                                    </li>
                                    <li>
                                      BLOOD-OXYGEN MONITOR
                                    </li>
                                    <li>
                                      BLOOD-PRESSURE MONITOR
                                    </li>
                                    <li>
                                      BODY MASS INDEX MONITOR
                                    </li>
                                    <li>
                                      BODY MASS INDEX MONITOR
                                    </li>
                                  </ul>
                                </span></li>
                              <li><span class="fa fa-check-square-o fa-2x
                                  icon-success"></span> <span class="list"><strong>USER friendly environment</strong><br />
                                  <ul>
                                    <li>
                                      TABULAR REPRESENTATION OF MEASUREMENT
                                    </li>
                                    <li>
                                      GRAPHICAL REPRESENTATION OF MEASUREMENT
                                    </li>
                                    <li>
                                      EASY TO GET STARTED
                                    </li>
                                    <li>
                                      BEST CUSTOMER SUPPORT
                                    </li>
                                  </ul>
                                </span></li>
                            </ul>
                            
                          </div>
                        </div>
                        

                      </div>
                      <div class="col-lg-4"  style=" animation: bounceInDown 10s ;">
                        <div class="">
                        <ul class="lead-list">
                              <li><span class="fa fa-check-square-o fa-2x
                                  icon-success"></span> <span class="list"><strong>PROVIDE PRIVACY AND sequrity SECURITY</strong><br />
                                  <ul>
                                    <li>
                                     YOUR DATA ARE PROTECTED
                                    </li>
                                    <li>
                                      WE DO NOT SHARE YOUR DATA TO OTHER'S!
                                    </li>
                                    <li>
                                      WE MAKE SURE YOU HAVE STRONG PASSWORD
                                    </li>
                                </ul>
                                </span></li>
                            </ul>
                            <p class="text-right " >
                              <a href="#" class="btn btn-skin btn-lg"style="background:white;color:#006ccf">Learn more <i class="fa fa-angle-right"></i></a>
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


            </div>
          </div>

          <div class="tab-pane container hiding" id="Gallery" style="padding-top: 5%;padding-bottom: 5%;color: white">
          
          <div class="slider">
        
        <input type="radio" name="toggle" id="btn-1" checked >
        <input type="radio" name="toggle" id="btn-2">
        <input type="radio" name="toggle" id="btn-3">
        <input type="radio" name="toggle" id="btn-4">
      
        <div class="slider-controls">
          <label for="btn-1"></label>
          <label for="btn-2"></label>
          <label for="btn-3"></label>
          <label for="btn-4"></label>
        </div>
      
        <ul class="slides">
          <li class="slide">
            <div class="slide-content">
              <h2 class="slide-title">BLOOD PRESSURE</h2>
              <p class="slide-text">
                 <span class="list"><strong>Help with early diagnosis</strong><br />
                    Self-monitoring can help your health care provider diagnose high blood pressure earlier than if you have only occasional blood pressure readings in a medical office.<br>
                </span>
                 <span class="list"><strong>Cut your health care costs</strong><br />
                    Self-monitoring might help cut down on medical visits.
                </span>
                 <span class="list"><strong>Encourage better control</strong><br />
                    Self-monitoring can give you a stronger sense of control over your health. Self-monitoring might help you feel more motivated to control your blood pressure with improved diet, physical activity and proper medication use.<br>
                </span>
              </p>
              <a href="Home.php" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
              <img src="image/BP.jpg" class="img" alt="stuff" width="100%" height="100%">
            </p>
          </li>
          <li class="slide">
            <div class="slide-content">
              <h2 class="slide-title">Exercise</h2>
              <p class="slide-text">
                <span class="list"><strong>Get Accountable</strong><br />
                It can help you push a little harder with your workouts, too!<br>
                </span>
                <span class="list"><strong>Daily Motivation</strong><br />
                  Another one of the advantages of fitness trackers is the visual progress. Your tracker can show you how many calories you’ve burned, how many steps you’ve taken, and how long you’ve been active.<br>
                  They can also remind you when you aren’t getting that activity. This visual display of your progress can help you push harder, which leads to the next item on our list.<br>
                </span>
              </p>
              <a href="Home.php" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
              <img src="image/exercise.jpg" class="img" alt="stuff" width="100%" height="100%">
            </p>
          </li>
          <li class="slide">
            <div class="slide-content">
              <h2 class="slide-title">Glucose level</h2>
              <p class="slide-text">
                <span class="list"><strong>Briefness</strong><br />
                  Provides information necessary for you and your healthcare provider to determine how well your treatment plan is working<br>
                  Gives insight into how diet, exercise, stress, and illness affect your glucose levels<br>
                  Reduces anxiety associated with not knowing how well you’re managing your diabetes between visits with your healthcare provider<br>
                  Increases motivation to practice healthy habits<br>
                  Helps you determine if your glucose levels are too high or too low to drive or operate heavy machinery<br>
                </span>
              </p>
              <a href="Home.php" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
              <img src="image/Glucose.jpg" class="img" alt="stuff" width="100%" height="100%">
            </p>
          </li>
          <li class="slide">
            <div class="slide-content">
              <h2 class="slide-title">Heartrate</h2>
              <p class="slide-text">
                <span class="list">
                  <strong>Tracks progress and setbacks</strong><br />
                  <strong>Real-time feedback</strong><br />
                  Monitoring your heart rate gives you valuable data, both about your health and about your exercise progress. The measurement provides valuable insight into an individual's development in sport, and it is easy to monitor.<br>
              </span>
              </p>
              <a href="Home.php" class="nav-link">Learn more</a>
            </div>
            <p class="slide-image">
              <img src="image/heartrate.jpg" class="img" alt="stuff" width="100%" height="100%">
            </p>
          </li>
        </ul>
      </div>
          
        </div>
        


      
  
  
  
  
  
  
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
          </body>
</html>

