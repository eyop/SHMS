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

  <link rel="stylesheet" href="vendor/animate.css/animate.css">

  

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <script src="lib/jquery/3.6.1-jquery.min.js"></script>

          <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
  
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">
  
  
  

       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet"> -->
       <link href="lib/css/5.2.3-bootstrap.css" rel="stylesheet">


       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="lib/js/5.2.3-bootstrap.bundle.min.js"></script>


  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="lib/css/3.4.1-bootstrap.min.css">


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="lib/js/3.4.1-bootstrap.min.js"></script>

  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" href="lib/css/4.0.0-alpha.6-bootstrap.min.css">
  <!-- Latest compiled JavaScript -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="animation: fadeInLeft 1s ;transition-delay: 5s;">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> YOUR HEALTH </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
             
  <style >
    .bg-primary {
      background: -webkit-linear-gradient(left, #7e33df, #5900ff);
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
        <a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Progress</a>
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


 
</style>
 
<body style="">
<div class="container-fluid" style="margin-top:10%;" style="animation: rotateInDownLeft 3s ;transition-delay: 1s;">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome  <?php echo $username ?> </h3> 
    <input type="number" id="uid" name="uid"value=<?php echo $uid ?> hidden ></input>
 
   </div>
<div class=" container  ">

<div class="chart-container  " style="animation: flip  5s  ;transition-delay: 5s;position: relative; ">
          <div>
            <h3>Today Score </h3>
          </div>
<!--       -->
           <canvas class=" chart " id="myChart4"alt="TODAY RECORDED VALUE"></canvas>
           </div>
           <div class="chart-container " style="animation: flip  5s  ;transition-delay: 5s;position: relative; ">
           <!-- heartrates Score        -->
           <canvas class=" chart "  id="mycanvas"></canvas>
           </div>

           <div class="chart-container " style="animation: flip  5s  ;transition-delay: 5s;position: relative; ">
                <!--  //bloodoxygen Score -->
           <canvas class=" chart " id="myChart1"></canvas>
           </div>
         
           <div class="chart-container " style="animation: flip  5s  ;transition-delay: 5s;position: relative;  ">
                  <!-- //glucose Score -->
           <canvas class=" chart "id="myChart2"></canvas>
           </div>

           <div class="chart-container " style="animation: flip  5s  ;transition-delay: 5s;position: relative;  ">
                  <!--   //bmi Score -->
           <canvas class=" chart " id="myChart3"></canvas>
           </div>

           
           <div class="chart-container " style="animation: flip  5s  ;transition-delay: 5s;position: relative;  ">
                  <!--   to be con -->
           <canvas class=" chart " id="myChart5"></canvas>
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
    
          <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
          <script src="lib/js/chart.js"></script>

          <!-- <script src="vendor/Chart.js/Chart.js"></script> -->

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
      <!-- <script src="lib/jquery/jquery-3.2.1.slim.min.js"></script> -->
    
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
    <!-- <script src="lib/js/bootstrap-4.0.0-beta.min.js"></script> -->
    
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
     <script src="lib/js/popper.min.js"></script>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"> -->
   <script src="lib/js/sweetalert2.all.min.js">

   </script>



</body>
</html>