 
 
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

              <li><a href="/FPPES/am-forms/am-dashboard.php" class="<?= ($page == 'am-dashboard.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
              <li><a href="/FPPES/am-forms/am-analytics.php" class="<?= ($page == 'am-analytics.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-chart-line"></i><span>Analytics</span></a></li>
              <li><a href="/FPPES/am-forms/am-stdb.php" class="<?= ($page == 'am-stdb.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-database-edit"></i><span>Student's Database</span></a></li>
              <li><a href="/FPPES/am-forms/am-sched.php" class="<?= ($page == 'am-sched.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-calendar"></i><span>FP Scheduling</span></a></li>
              <li><a href="/FPPES/am-forms/am-donation.php" class="<?= ($page == 'am-donation.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-gift"></i><span>Donations</span></a></li>
              <li><a href="/FPPES/am-forms/am-mrs.php" class="<?= ($page == 'am-mrs.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-printer"></i><span>Summary Report</span></a></li>
              <li><a href="/FPPES/am-forms/am-message.php" class="<?= ($page == 'am-message.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-forum"></i><span>Messages</span></a></li>
                           

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