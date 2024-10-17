<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

<style>
  .gallery-item {
            text-align: center;
            margin-bottom: 30px;
        }
        .gallery-item a {
            text-decoration: none;
            color: inherit;
        }
</style>


  <body >
    <div class="be-wrapper">
      <?php include '../forms/template/nav.php';?>
      <?php include '../forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Status of Barangays'; include '../forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading">Brgy In North Caloocan</div>
                <div class="panel-body">

<h3> CATEGORIES COLOR MARKER</h3>
<hr>
<div class="col-sm-4" style="border-right: 1px solid green;"><div class="col-sm-5"><img src="/WAZE/assets/image/green.png" height="100" width="100"></img></div><div class="col-sm-6"><i  style="color: green;" > <b> CLEAN  </b></i> <p> The Barangay was Clean and Low the Waste Percentage.  </p></div></div>


<div class="col-sm-4" style="border-right: 1px solid darkblue;"><div class="col-sm-5"><img src="/WAZE/assets/image/blue.png" height="100" width="110"></img></div><div class="col-sm-6"><i style="color: darkblue; "> <b> MODERATE  </b></i> <p> The Barangay was Moderate  the Waste Percentage.  </p></div></div>

<div class="col-sm-4"><div class="col-sm-5"><img src="/WAZE/assets/image/red.png" height="100" width="100"></img></div><div class="col-sm-6"><i style="color: darkblue; "> <b> DIRTY  </b></i> <p> The Barangay was Dirty and High the Waste Percentage.  </p></div></div>


<small  style="margin-top: 15px; float: right; color: red;">Note: Click the Marker to see Other Information</small>
<iframe src="http://localhost/WAZE/forms/maps.php" height="700px" border="0" scrolling="no" width="100%"></iframe>
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