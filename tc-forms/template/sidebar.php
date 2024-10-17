 
 
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

              <li><a href="/FPPES/tc-forms/tc-dashboard.php" class="<?= ($page == 'tc-dashboard.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a></li>
              <li><a href="/FPPES/tc-forms/tc-students.php" class="<?= ($page == 'tc-parents.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-account-group"></i><span>Parents Record</span></a></li>
             
              <li><a href="/FPPES/tc-forms/tc-students.php" class="<?= ($page == 'tc-students.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-account-group"></i><span>Students Record</span></a></li>
              <!-- <li><a href="/FPPES/tc-forms/tc-tdl.php" class="<?= ($page == 'tc-tdl.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-text-box-edit"></i><span>To Do List</span></a></li> -->
              <li><a href="/FPPES/tc-forms/tc-sched.php" class="<?= ($page == 'tc-sched.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-calendar"></i><span>Feeding Program Schedules</span></a></li>
              <!-- <li><a href="/FPPES/tc-forms/tc-articles.php" class="<?= ($page == 'tc-articles.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-file-document-edit"></i><span>Articles</span></a></li> -->
              <!-- <li><a href="/FPPES/tc-forms/tc-message.php" class="<?= ($page == 'tc-message.php') ? 'active' : ''; ?>"><i class="icon mdi mdi-forum"></i><span>Feedback</span></a></li> -->
                      

              <li class="divider">WELCOME <?= $_SESSION['14c4b06b824ec593239362517f538b29']; ?></li>
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