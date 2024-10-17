<!DOCTYPE html>
<html lang="en">
 <?php require 'forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include 'ct-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
  <body <?php include 'ct-forms/template/notif.php';?>>
    <div class="be-wrapper">
      <?php include 'ct-forms/template/nav.php';?>
      <?php include 'ct-forms/template/sidebar.php';?>
      <div class="be-content">
        <link rel="shortcut icon" href="minilogo unfinal.png">
      <?php $title = 'Barangay'; include 'ct-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              

           <?php include 'forms/includes/dashboard.php';?>
              
          </div>
          </div>
        </div>
      </div>
    </div>
      <?php include 'ct-forms/template/script.php';?>
    
  </body>
</html>