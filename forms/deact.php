<!DOCTYPE html>
<html lang="en">
 <?php require 'php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
  <body >
    <div class="be-wrapper">
      <?php include '../forms/template/nav.php';?>
      <?php include '../forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Deactivate'; include '../forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
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