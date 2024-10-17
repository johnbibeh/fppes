<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../st-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>

    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        }
    </style>


  <body >
    <div class="be-wrapper">
      <?php include '../st-forms/template/nav.php';?>
      <?php include '../st-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Reminders'; include '../st-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <!-- <div class="panel-heading">BMI</div> -->
                <div class="panel-body">
                    <br>
                  <section class="vh-100" >
                        <div class=" py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-12 col-xl-6">
                                <div class="card rounded-3">
                                <div class="card-body p-4">

                                    <p class="mb-2"><span class="h2 me-2">Activities</span> <span
                                        class="badge bg-danger">checklist</span></p>
                                    <!-- <p class="text-muted pb-2">04/01/2020 • ML - 1321</p> -->

                                    <ul class="list-group rounded-0">
                                    <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="..." checked />
                                        <s>Gentle Exercise: Engage in light physical activities like walking or yoga to stimulate appetite and improve overall health.</s>
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="..." />
                                        Food Diary: Keep a food diary to track daily intake and identify nutritional gaps or patterns.
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="..." />
                                        Mindful Eating: Practice mindful eating techniques, focusing on the taste, texture, and enjoyment of food, which can improve their relationship with food.
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="..." />
                                        Rainbow Plate Challenge: Encourage eating a variety of colorful fruits and vegetables each day to ensure a broad spectrum of nutrients.
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="..." />
                                        Infused Water: Make flavored water with fruits, herbs, and vegetables to encourage hydration and make it more appealing.
                                    </li>
                                    </ul>

                                   
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                 



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