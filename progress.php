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

  <title>Progress</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  


  <link rel="stylesheet" href="Style/style.css">

  <link rel="stylesheet" href="vendor/animate.css/animate.css">

  

  

<link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">
  
  
  
       <link href="lib/css/5.2.3-bootstrap.css" rel="stylesheet">



  <link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">


  <script src="lib/js/3.4.1-bootstrap.min.js"></script>

        <script src="lib/js/5.2.3-bootstrap.bundle.min.js"></script>
        <script src="lib/jquery/3.6.1-jquery.min.js"></script>
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="position: fixed; animation: fadeInLeft 1s ;transition-delay: 5s;">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> YOUR HEALTH </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
             

 <div class="collapse navbar-collapse" id="navbarSupportedContent"style="animation: bounceOutDown 1s ;transition-delay: 1s;">
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
        <a class="nav-link active" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Progress</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Profile</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
   </nav>

  <style type="text/css">
     .bg-primary {
      background: -webkit-linear-gradient(left, #001427, #001427);
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

    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}

    li{
  margin-left: 15px
}



  .graphBox{
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 30px;
    min-height: 200px;
  

    
  }
  .graphBox .box{
    
    /* width: 50%; */
    position: relative;
   background: #fff;
    padding: 20px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 08);
    border-radius: 20px;
    display: grid;
         border: 1px solid red;
         padding: 1rem 1rem;
         margin-bottom: 2%;
  }
  .chart-container{
  display : flex;
align-items: center;
justify-content: center;
width:100%;
min-height: 50%;
margin:1%

  }
  .chart{
    padding: 2rem;
border: 1px solid #f49131;
border-radius: 1rem;

box-shadow: 0 0 16px rgba(0,0,0,0.);

  }
  .allt{
    text-align: center;
    font-size: x-large;
    font-style: italic;
    font-family: fangsong;
    color: darkslategrey;
    background-color: lavender;
  }


 
</style>
 
<body style="background-color: #FFFFFA;">
<div class="container-fluid"  style="margin-top: 5%; animation: rotateInDownLeft 3s ;transition-delay: 1s;">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome  <?php echo $username ?> </h3> 
    <input type="number" id="uid" name="uid"value=<?php echo $uid ?> hidden ></input>
 
   </div>
<div class=" container  ">


           <!-- heartrates Score        -->
           <div class="allt">Total Heartrates Score</div>
           <div class="chart-container " style="animation: flip  2s  ;transition-delay: 1s;position: relative; ">
           <canvas class=" chart " id="mycanvas"></canvas>
           </div>

           <div class="allt">Total Bloodoxygen Score</div>
           <!--  //bloodoxygen Score -->
           <div class="chart-container " style="animation: flip  2s  ;transition-delay: 1s;position: relative; ">
           <canvas class=" chart "id="myChart1"></canvas>
           </div>

           <div class="allt" >Total Glucose Score</div>
           <!-- //glucose Score -->
           <div class="chart-container " style="animation: flip  2s  ;transition-delay: 1s;position: relative;  ">
           <canvas class=" chart "id="myChart2"></canvas>
           </div>

           <div class="allt" >Total BMI Score</div>
           <!--   //bmi Score -->
           <div class="chart-container " style="animation: flip  2s  ;transition-delay: 1s;position: relative;  ">

           <canvas class=" chart " id="myChart3"></canvas>
           </div>

           <div class="allt" >Today Exercise Score</div>
           <div class="chart-container " style="animation: flip  2s  ;transition-delay: 1s;position: relative;  ">
           <canvas class=" chart " id="myChart4"></canvas>
           </div>

           <div class="allt" >Total Exercise Scoree</div>
          <div class="chart-container  " style=" animation: flip  2s  ;transition-delay: 1s;position: relative; ">
       
                     <!--       -->
                  <canvas class=" chart " id="myChart5"></canvas></div>

    
</div>
  

    <script src="graph1.js"></script>
    
          <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
          <script src="lib/js/chart.js"></script>

       
     <script src="lib/js/popper.min.js"></script>
   
   <script src="lib/js/sweetalert2.all.min.js">

   </script>

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

</body>
</html>