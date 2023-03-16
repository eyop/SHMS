<?php
// include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<!-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" href="lib/css/4.0.0-alpha.6-bootstrap.min.css" >

    <!-- Bootstrap CSS -->
    <link href="lib/css/css-family=IBM+Plex+Sans&display.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="lib/css/bootstrap.min-4.0.0-beta.css" >

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->
    <link rel="stylesheet" href="Style/animate.css">
    <link rel="stylesheet" type="text/css" href="style1.css">


    
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
    .card{
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
}

  </style>
  <body style="background: -webkit-linear-gradient(left, #011627, #0A416E); background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="margin-left:5%; animation: bounceOutDown 1s ;transition-delay: 1s;">
            <div class="container">
        
              <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp YOUR HEALTH</h4></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
                  </li>
          
                  <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="index.html#Gallery" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Gallery</h6></a>
                  </li>
                  <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="index.html#FUTURES" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>FUTURES</h6></a>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
                    </li>
                  </li>
                  <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="index1.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif; "><h6>GET STARTED</h6></a>
                  </li>
        
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E; animation: fadeInLeftBig 2s ;transition-delay: 3s;">
      <div class="row">

        

         <div class="col-md-7" style="padding-left: 180px; animation: bounceInDown 6s ;">
         <img src="image/T (2).jpg" alt="" style="margin-top: 10%; width:70%; border-radius: 20%;height: 70%;" />

                 <div style="animation: mover 2s infinite alternate;">
          <img src="images/ambulance1.png" alt="" style="width: 20%;padding-left: 40px;margin-top: 150px;margin-left: 45px;margin-bottom:15px">
      </div>

      

         </div>

         <div class="col-md-4" style="margin-top: 5%;right: 8%">
          <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="card-body">
              <center>
                <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
                <br>
              <h3 style="margin-top: 10%">User Login</h3><br>
              <form class="form-group" method="POST" action="authenticateuser.php">
                <div class="row" style="margin-top: 10%">
                  <div class="col-md-4"><label>Email-ID: </label></div>
                  <div class="col-md-8"><input type="text" name="email" class="form-control" placeholder="enter email ID" required/></div><br><br>
                  <div class="col-md-4" style="margin-top: 8%"><label>Password: </label></div>
                  <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control" name="password2" placeholder="enter password" required/></div><br><br><br>
                </div>
                <div class="row">
                 <div class="col-md-4"  style="padding-left: 160px;margin-top: 10%">
                    <center><input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-primary"></center></div>           
                 
                </div>
              </form>
            </center>
          </div>
          </div>
        </div>


      </div>
    </div>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script src="lib/js/bootstrap-4.0.0-beta.min.js" ></script>

    
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="lib/css/bootstrap.min-4.0.0-beta.css" ></script>

  </body>
</html>