<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include 'template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
  <body <?php include 'template/notif.php';?>>
    <div class="be-wrapper">
      <?php include 'template/nav.php';?>
      <?php include 'template/sidebar.php';?>
      <div class="be-content">
        <link rel="shortcut icon" href="minilogo unfinal.png">
      <?php $title = 'Compose Report'; include 'template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                <div class="panel-heading">Compose Report</div>
                <div class="panel-body">

                <div class="row"> 


   <form class="form-email" method="POST" action="include/action/request.php" enctype="multipart/form-data">


            <br>
            <div class="col-md-12" style="border-left: 1px solid black;">

            <div class="container-inner">
            

                
                <div class="col-md-12 " style="margin-top: -15px;" >


                <h3><span class="fa fa-pencil"> </span> WRITE MESSAGE</h3>

                <hr>
                    <div class="tab-pane active" id="write">
                    <textarea class="form-control" rows="8" name="mess"></textarea>
                    <div class="attachment">
                        <small>Write your concern to the admins.</small>
                    </div>
                    </div>  
                    <hr>
                    <div class="text-right">

                    <button class="btn btn-success" type="submit">
                    <i class="fa fa-send"></i> &nbsp; Send Request Report
                    </button>
                </div>  
                </div>
                
                </form>
            </div>

 

</form>
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