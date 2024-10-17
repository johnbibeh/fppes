<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../st-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

    <style>
        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
        }
        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 25px;
        }
        .row {
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .row:before {
            content: " ";
            display: table;
        }
        .badgee {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
        }

        .badge-secondaryy {
            color: #fff;
            background-color: #0d5fe6;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 12.666667%;
            flex: 0 0 12.666667%;
            max-width: 16.666667%;
        }

        .text-right {
            text-align: right !important;
        }

        .row-striped h2{
            margin: 0 !important;
        }
    </style>


  <body >
    <div class="be-wrapper">
      <?php include '../st-forms/template/nav.php';?>
      <?php include '../st-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Schedule'; include '../st-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">SCHEDULE</div> -->
                    <div class="panel-body">

                    <h3> List of Schedules</h3>
                    <hr>

                    <div class="row row-striped">
                        <div class="col-2 text-right">
                            <h1 class="display-4"><span class="badgee badge-secondaryy">23</span></h1>
                            <h2>JUNE</h2>
                        </div>
                        <div class="col-10">
                            <h3 class="text-uppercase"><strong>Caloocan Feeding Program</strong></h3>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe</li>
                            </ul>
                            <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="row row-striped">
                        <div class="col-2 text-right">
                            <h1 class="display-4"><span class="badgee badge-secondaryy">27</span></h1>
                            <h2>JUNE</h2>
                        </div>
                        <div class="col-10">
                            <h3 class="text-uppercase"><strong>Feeding Program sa Bahay</strong></h3>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Room 4019</li>
                            </ul>
                            <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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