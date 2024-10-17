 
 
 <div class="be-left-sidebar" style="background: #333;">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Menus</a>
      <div class="left-sidebar-spacer">
        <div class="left-sidebar-scroll">
          <div class="left-sidebar-content">
            <ul class="sidebar-elements">
              <li class="divider">Menu</li>
              <?php 

              $link = $_SERVER['PHP_SELF'];
              $link_array = explode('/',$link);
              $page = end($link_array);

              $is_have_kids = CheckParentKids($_SESSION['b80bb7740288fda1f201890375a60c8f']);

              if($is_have_kids){
              ?>

              <li><a href="/FPPES/st-forms/st-dashboard.php" class="<?= ($page == 'st-dashboard.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
              <li><a href="/FPPES/st-forms/st-register-kids.php" class="<?= ($page == 'st-register-kids.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-account-plus"></i><span>Registered Children</span></a></li>
           
              <li><a href="/FPPES/st-forms/st-bmi.php" class="<?= ($page == 'st-bmi.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-human-male-height"></i><span>BMI Calculator</span></a></li>
              <li><a href="/FPPES/st-forms/st-reminder.php" class="<?= ($page == 'st-reminder.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-silverware"></i><span>Diet and Activities</span></a></li>
              
              <li><a href="/FPPES/st-forms/st-sched.php" class="<?= ($page == 'st-sched.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-calendar"></i><span>Feeding Program Schedules</span></a></li>
              <li><a href="/FPPES/st-forms/st-stories.php" class="<?= ($page == 'st-stories.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-newspaper-variant-multiple-outline"></i><span>Healthy Tips</span></a></li>
                        
              <?php

              }else{
              ?>
              <li><a href="/FPPES/st-forms/st-register-kids.php" class="<?= ($page == 'st-register-kids.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-account-plus"></i><span>Register Children</span></a></li>
              <li><a href="/FPPES/st-forms/st-stories.php" class="<?= ($page == 'st-stories.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-newspaper-variant-multiple-outline"></i><span>Healthy Tips</span></a></li>
            
              <?php
              }
              
              ?>               

              <li class="divider">WELCOME <?= $_SESSION['24da566a943e89c762a0e18328fe874a']; ?></li>
              <li class="parent"><a href="#"><i class="icon mdi mdi-account-circle"></i><span>Profile</span></a>
                <ul class="sub-menu">
                  <li><a href="/FPPES/SCFPrinters">Deactivate</a></li>
                  <li><a href="/FPPES/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>