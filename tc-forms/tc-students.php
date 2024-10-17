<!DOCTYPE html>
<html lang="en">
 <?php require 'php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../tc-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

  <body <?php #include '../tc-forms/template/notif.php';?> >
    <div class="be-wrapper">
      <?php include '../tc-forms/template/nav.php';?>
      <?php include '../tc-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'List Of Students'; include '../tc-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->
                <div class="panel-body">
                <h3> <i class="fa fa-group"></i> Student Records </h3>
                <hr>

                <?php 

                  if($_SESSION['usertype'] == "Teacher"){
                      echo'  <button data-toggle="modal" data-target="#add-student" class="btn btn-space btn-primary btn-md">Add New Student</button>';
                  }
                  else{
                    echo  '<button data-toggle="modal" data-target="#add-truck" class="hidden btn btn-space btn-primary btn-md">Add New Truck</button>';
              
                  }
                ?>
                <?php include 'includes/tc-std.php';?>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
      <?php include 'template/script.php';?>
    
  </body>
</html>