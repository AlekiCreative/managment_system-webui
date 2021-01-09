<style>
.notifications {
   min-width:420px; 
  }
 
.notifications-wrapper {
    overflow:auto;
    max-height:850px;
    }
.notification-item {
	padding-left: 5px;
	margin:5px;
	border-left: 4px solid ;
	border-radius:4px;
 }
.notification-item.warnig {
	border-color: #F18000;
}
.notification-item.successfully {
	border-color: #28a745;
}
.notification-item.danger {
	border-color: #dc3545;
}

</style>


<!-- Začátek Navigační lišty-->
        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="<?php echo $folder_position;?>dashboard.php"><i class="fas fa-tasks"></i> Managment System</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav">
				
				  <!-- Date -->
				
                  <li class="nav-item" id="date">
                    <a class="nav-link" href="#"><?php echo(date("d. ") . date("F ") . date("Y"));?></a>
                  </li>
				  
				  <!-- Notification Bell -->
				  
                  <li class="nav-item" id="notification">
					<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="far fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notifications" aria-labelledby="navbarDropdownMenuLink" style="right: 0;">
						<div class="notification-item warnig" style="display: flex;">
						Omlouváme se, ale některé funkce mohou být z technických důvodu nedostupné
						</div>
						<div class="notification-item danger" style="display: flex;">
						Omlouváme se, ale některé funkce 
						</div>
						<div class="notification-item successfully" style="display: flex;">
						Best
						</div>
						
						
                    </div>
                  </li>
					
					
					
                  </li>
				  
                  <li class="nav-item" id="username">
                    <a class="nav-link" href="#"><?php echo $_SESSION['username']?></a>
                  </li>
                  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <img src="<?php echo $folder_position;?>user-data/<?php echo $_SESSION['username']?>/img/profile.jpg" width="30" height="30" style="border-radius: 50%;">
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="<?php echo $folder_position;?>profile.php"><i class="fas fa-user"></i> Profile</a>
						  <a class="dropdown-item" href="<?php echo $folder_position;?>setting.php"><i class="fas fa-cog"></i> Setting</a>
						  <a class="dropdown-item" href="<?php echo $folder_position;?>auth/logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a>
						</div>
                  </li>
                    <span class="" style="width: 80px;">
                    </span>
                </ul>
              </div>
            </nav>
        </div>
        <!-- Konec Navigační lišty -->