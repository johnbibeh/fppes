<!DOCTYPE html>
<html lang="en">
 <?php require 'php/app.php';?>
 <?php if(!loggedIn()){ header('Location: ../login.php'); } ?>
 <?php include '../tc-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

  <body >
    <div class="be-wrapper">
      <?php include '../tc-forms/template/nav.php';?>
      <?php include '../tc-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Dashboard'; include '../tc-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              
                <?php include 'includes/tc-dsh.php';?>
                
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
      <?php include '../forms/template/script.php';?>
    
  </body>
</html>