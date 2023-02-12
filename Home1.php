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

<section id="intro" class="intro" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="intro-content">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6" style=" animation: bounceInLeft 10s ;">
                    <div class="">
                      <h2 >YOUR HEALTH</h2>
                    </div>
                    <div class="" >
                      <h4 class="h-light" >Provide best quality health monitoring for you</h4>
                    </div>
                    <div class="well well-trans"style="color: white">
                      <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <ul class="lead-list">
                          <li><span class="fa fa-check-square-o fa-2x
                              icon-success"></span> <span class="list"><strong>Choose your favourite services</strong><br />Don't forget to add someting</span></li>
                          <li><span class="fa fa-check-square-o fa-2x
                              icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Don't forget to add someting</span></li>
                        </ul>
                        <p class="text-right " >
                          <a href="#" class="btn btn-skin btn-lg"style="background:white;color:#006ccf">Learn more <i class="fa fa-angle-right"></i></a>
                        </p>
                      </div>
                    </div>


                  </div>
                  <div class="col-lg-6"  style=" animation: bounceInDown 10s ;">
                    <div class="">
                      <img src="image/logo.jpg" class="img-responsive"
                        alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div id="FUTURES_s" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#FUTURES_s"
              data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#FUTURES_s"
              data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#FUTURES_s"
              data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#FUTURES_s"
              data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#FUTURES_s"
              data-bs-slide-to="4"></button>
          </div>
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">

            <div class="carousel-item active"style=" animation: swing 5s ; animation-delay: 5s;">
              <img src="image/T (1).jpg" alt="Chicago" class="d-block"style="width:100%">

            </div>
            <div class="carousel-item" style=" animation: swing 5s ; ">
              <img src="image/T (2).jpg" alt="New York" class="d-block"style="width:100%">
              <!-- <div class="carousel-caption">
                           <p>We love the Big Apple!</p>
                           </div>   -->
            </div>
            <div class="carousel-item" style=" animation: swing 5s ;">
              <img src="image/T (3).jpg" alt="New York" class="d-block"style="width:100%">
              <!-- <div class="carousel-caption">
                           <p>We love the Big Apple!</p>
                           </div>   -->
            </div>
            <div class="carousel-item" style=" animation: swing 5s ; ">
              <img src="image/T (4).jpg" alt="New York" class="d-block"style="width:100%">
              <!-- <div class="carousel-caption">
                           <p>We love the Big Apple!</p>
                           </div>   -->
            </div>
            <div class="carousel-item" style=" animation: swing 5s ; ">
              <img src="image/T (5).jpg" alt="New York" class="d-block"style="width:100%">
              <!-- <div class="carousel-caption">
                           <p>We love the Big Apple!</p>
                           </div>   -->
            </div>
          </div>
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button"
            data-bs-target="#FUTURES_s" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button"
            data-bs-target="#FUTURES_s" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        
        <div class="carousel-item active wow fadeInUp" data-wow-offset="0"
            data-wow-delay="1s">
            <img src="./image/T (6).jpg" alt="Los Angeles" class=""style="width:100%">
            
          </div>
  
  
  
  
  
  
</div>

     </div>

     


  </div>

                      

          </body>
</html>

