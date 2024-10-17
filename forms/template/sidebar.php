<div class="be-left-sidebar" style="background: #333;">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Menus</a>
      <div class="left-sidebar-spacer">
        <div class="left-sidebar-scroll">
          <div class="left-sidebar-content">
            <ul class="sidebar-elements">
              <li class="divider">Menu</li>
              <li><a href="/FPPES"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>
               <li class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Accounts</span></a>
                <ul class="sub-menu">

               <li><a href="/FPPES/forms/cust.php"><span>Customers</span></a></li>
                 <li><a href="/FPPES/forms/assign.php"><span> Officers</span></a></li>
               <li><a href="/FPPES/forms/drivers.php"><span>Drivers</span></a></li>
                </ul>
              </li>
               <li><a href="/FPPES/forms/reports.php"><i class="icon mdi mdi-info"></i><span>Reports</span></a></li>
               <li><a href="/FPPES/forms/brgy.php"><i class="icon mdi mdi-city"></i><span>Brgy Status</span></a></li>
              <li><a href="/FPPES/forms/sched.php"><i class="icon mdi mdi-calendar-check"></i><span>Scheduled</span></a></li>
              <li><a href="/FPPES/forms/truck.php"><i class="icon mdi mdi-truck"></i><span>Truck</span></a></li>

             

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