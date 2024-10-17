<nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"></a>
          </div>
          <div class="be-right-navbar be-right-navbar-flex">
            <div class="search-container">
              <div class="input-group input-group-sm">
                <input type="text" name="search" placeholder="Search..." class="form-control search-input"><span class="input-group-btn">
                  <button type="button" class="btn btn-primary">Search</button></span>
              </div>
            </div>
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="/FPPES/assets/img/avatar.png" alt="Avatar"><span class="user-name"><?= $_SESSION["4040592cec1880aa70936989f05e7c31"] ?></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?= $_SESSION["4040592cec1880aa70936989f05e7c31"] ?></div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="/FPPES/logout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>