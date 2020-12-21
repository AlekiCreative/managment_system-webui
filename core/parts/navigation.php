<!-- Začátek Navigační lišty-->
        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="dashboard.html"><i class="fas fa-tasks"></i> Smart Managment System</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav">
                  <li class="nav-item" id="date">
                    <a class="nav-link" href="#"><?php echo(date("d. ") . date("F ") . date("Y"));?></a>
                  </li>
                  <li class="nav-item" id="notification">
                    <i class="far fa-bell"></i>
                  </li>
                  <li class="nav-item" id="username">
                    <a class="nav-link" href="#"><?php$_SESSION['name']?></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="../user-data/<?php echo $username;?>/img/profile.jpg" width="30" height="30" style="border-radius: 50%;">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="auth/profile.php"><i class="fas fa-user"></i> Profile</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Setting</a>
                      <a class="dropdown-item" href="auth/logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a>
                    </div>
                  </li>
                    <span class="" style="width: 80px;">
                    </span>
                </ul>
              </div>
            </nav>
        </div>
        <!-- Konec Navigační lišty -->