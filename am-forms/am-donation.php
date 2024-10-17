<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../am-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

  <body >
    <div class="be-wrapper">
      <?php include '../am-forms/template/nav.php';?>
      <?php include '../am-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Donation Tracking'; include '../am-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->
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