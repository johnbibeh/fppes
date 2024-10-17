<!DOCTYPE html>
<html lang="en">
 <?php require 'php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include 'template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
  <body >
    <div class="be-wrapper">
      <?php include 'template/nav.php';?>
      <?php include 'template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Posting Scheduled'; include 'template/page-title.php';?>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading">LIST OF SCHEDULE</div>
                <div class="panel-body">
                <?php 
if($_SESSION['usertype'] == "Admin"){
  echo '<button data-toggle="modal" data-target="#mod-add" class="btn btn-space btn-primary btn-md">Add New Schedule</button>
              ';
}
else{
echo  '<button data-toggle="modal" data-target="#add-truck" class="hidden btn btn-space btn-primary btn-md">Add New Truck</button>';
         ;

}
?>
                  
           <?php include 'includes/psched.php';?>
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