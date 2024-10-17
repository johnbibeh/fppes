 
 
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

              ?>

              <li><a href="/FPPES/st-forms/st-dashboard.php" class="<?= ($page == 'st-dashboard.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
              <li><a href="/FPPES/st-forms/st-bmi.php" class="<?= ($page == 'st-bmi.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-human-male-height"></i><span>BMI</span></a></li>
              <li><a href="/FPPES/st-forms/st-reminder.php" class="<?= ($page == 'st-reminder.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-silverware"></i><span>Diet and Activities</span></a></li>
              
              <li><a href="/FPPES/st-forms/st-sched.php" class="<?= ($page == 'st-sched.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-calendar"></i><span>Schedule</span></a></li>
              <li><a href="/FPPES/st-forms/st-stories.php" class="<?= ($page == 'st-stories.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-newspaper-variant-multiple-outline"></i><span>Articles</span></a></li>
              <!-- <li><a href="/FPPES/st-forms/404.php" class="<?= ($page == '404.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-silverware-fork-knife"></i><span>Dietary</span></a></li> -->
              <!-- <li><a href="/FPPES/st-forms/st-message.php" class="<?= ($page == 'st-message.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-forum"></i><span>Messages</span></a></li> -->
                           

              <li class="divider">WELCOME <?= $_SESSION['4040592cec1880aa70936989f05e7c31']; ?></li>
              <li class="parent"><a href="#"><i class="icon mdi mdi-account-circle"></i><span>Profile</span></a>
                <ul class="sub-menu">
                  <li><a href="/FPPES/printers">Change Profile</a></li>
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