<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php



?>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  
  
  
  

















    <link rel="stylesheet" href="Style/animate.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/bootstrap.css">
    <!-- <link rel="stylesheet" href="Style/bootstrap.min.css"> -->

    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" rel="stylesheet"> -->
  
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
   

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>  -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- Latest compiled JavaScript -->
    <title>SMART HEALTH MANEGMENT SYSTEM</title>
  </head>
  <body>
    <script>
      

      
      function undisableTxt() {
        document.getElementById("123").disabled = false;
      }
      function calval(){
        let cv=document.getElementById("123");
       
        document.getElementById("321").value=( cv.value*4);
      }



    </script>
<style>
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
    width: 50%;
    position: relative;
   background: #fff;
    padding: 20px;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 08);
    border-radius: 20px;
  }
</style>

     <div class="main ">
                  <header class=""style="animation: bounce 1s ;transition-delay: 1s; ">
                  <nav id="navbar-example2" class="navbar navbar-default navbar-fixed-top "role="navigation">
                      <div class="container rounded-3 " style="animation: bounceInLeft 3s;opacity: 1; " >
                        <div class="navbar-header ">
                          <a href=""><img src="image/logo.jpg" class="w-100" style="height:
                              13vh;"></a>
                        </div>
                        <div>
                          <ul class="nav nav-pills ">
                            <li class="nav-item "><a class="nav-link "data-bs-toggle="navigation"
                                href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link "data-bs-toggle="navigation"
                                    href="#Gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link "data-bs-toggle="navigation" data-bs-target="#FUTURES"
                                href="#HRM">FUTURES</a></li>
                            <li class="nav-item"><a class="nav-link "data-bs-toggle="navigation"
                                href="#Contact">Contact US</a></li>
                            <li class="nav-item"><a class="nav-link "data-bs-toggle="modal"
                                href="#login">Login</a></li>
                            <li class="nav-item"><a class="nav-link "data-bs-toggle="modal"
                                href="#New">SignUP</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </header>
           <main class="widget_wrapper">


           <?php
echo date("Y-m-d");
$uid 

?>



                            <div class="graphBox " Style="animate__rubberBand;">
              


                              <div class="box">
                               
                                <canvas id="myChart"></canvas>
                              </div>

                              <div class="">
                                
                                <canvas id="myChart2"></canvas>
                              </div>

                              <div class="">
                                <canvas id="myChart3"></canvas>
                              </div>
                              <div class="">
                                <canvas id="myChart4"></canvas>
                              </div>
                              
                              <div class="">
                                <canvas id="myChart6"></canvas>
                              </div>
                              <!-- <div class="">  -->
                                <!-- how much calory per ex -->
                                <!-- <canvas id="myChart4"></canvas>
                              </div> -->

                              
                            <!-- </div> -->

                            <div id="tab-pane active  " id="123" >
                              <canvas id="mycanvas"></canvas>
                            </div>

                            <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
                            
                            <script>
                          
                            </script>
                            
                       
                            <div>

                      
                            </div>

          </main>
          
          <script src="graph.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js"></script> -->
  </body>
</html>