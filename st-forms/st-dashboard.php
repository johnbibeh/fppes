<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../st-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

<style>
        .gallery-item {
            text-align: center;
            margin-bottom: 70px;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
        }
        .gallery-item a {
            text-decoration: none;
            color: inherit;
            transition: transform .2s; /* Animation */
            
        }

        .gallery-item img {
            width: 60%;
            max-width: 100%;
            height: auto;
            
        }

        .gallery-item .label {
          color: black;
          font-size: 18px; 
        }

        .gallery-item:hover {
          transform: scale(1.25);
        }
    </style>


  <body >
    <div class="be-wrapper">
      <?php include '../st-forms/template/nav.php';?>
      <?php include '../st-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Dashboard'; include '../st-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->
                <div class="panel-body">

                <!-- <h3> Choose your Concern</h3> -->
               <hr>



                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-6 gallery-item ">
                            <a href="st-bmi.php" >
                                <img src="../assets/user/logo1.png" alt="Image 1" class="img-fluid">
                                <br><div class="label mt-2">BMI CALCULATOR</div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 gallery-item">
                            <a href="link5.html">
                            <img src="../assets/user/diet.png" alt="Image 2" class="img-fluid" >
                            <br><div class="label mt-2">DIET AND ACTIVITIES</div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 gallery-item">
                            <a href="st-sched.php">
                                <img src="../assets/user/schedule.png" alt="Image 2" class="img-fluid" >
                                <br><div class="label mt-2">FEEDING PROGRAM SCHEDULES</div>
                            </a>
                        </div>
                      
                        <div class="col-12 col-sm-6 col-md-6 gallery-item">
                            <a href="st-stories.php">
                            <img src="../assets/user/logo3.png" alt="Image 2" class="img-fluid" >
                            
                                <br><div class="label mt-2">HEALTHY TIPS</div>
                            </a>
                        </div>
                       
                    </div>



                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
      <?php include '../forms/template/script.php';?>
    
  </body>
</html>