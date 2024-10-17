<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
  <body >
    <div class="be-wrapper">
      <?php include '../forms/template/nav.php';?>
      <?php include '../forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Truck Info'; include '../forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading">Truck List</div>
                <div class="panel-body">
<?php
if($_SESSION['usertype'] === "Admin"){
           echo '<button data-toggle="modal" data-target="#add-truck" class="btn btn-space btn-primary btn-md">Add New Truck</button>';
         }
             else{
              echo   '<button data-toggle="modal" data-target="#add-truck" class="hidden btn btn-space btn-primary btn-md">Add New Truck</button>';
         
             } 
             ?>
           <?php include 'includes/truck.php';?>
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