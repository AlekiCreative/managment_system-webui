		<div class="menu">
            <div class="sidenav">
			<ul>
			
			<?php
			
				
				if ($_SESSION['num_access_database_module'] >= "1") {
					echo '<p style="color:#767676; padding-left: 13px; padding-top: 8px; padding-bottom: 8px; margin: 0px;"> >_ Database ('; echo $_SESSION['num_access_database_module']; echo ')</p>';
				}
							
				if ($_SESSION['inventory_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../inventory/dashboard.php" class="menu_list"'; if (active_sublist("inventory") == "inventory") { echo 'id="active"'; } echo '><i class="fas fa-box"></i> Inventory</a></li>';
					if (active_sublist("inventory") == "inventory") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['contract_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../contracts/dashboard.php" class="menu_list"'; if (active_sublist("contracts") == "contracts") { echo 'id="active"'; } echo '><i class="fas fa-file-signature"></i> Contracts</a></li>';
					if (active_sublist("contracts") == "contracts") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['projects_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../projects/dashboard.php" class="menu_list"'; if (active_sublist("projects") == "projects") { echo 'id="active"'; } echo '><i class="fas fa-lightbulb"></i> Projects</a></li>';
					if (active_sublist("projects") == "projects") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['documents_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../documents/dashboard.php" class="menu_list"'; if (active_sublist("documents") == "documents") { echo 'id="active"'; } echo '><i class="fas fa-file"></i> Documents</a></li>';
					if (active_sublist("documents") == "documents") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['finance_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../finance/dashboard.php" class="menu_list"'; if (active_sublist("finance") == "finance") { echo 'id="active"'; } echo '><i class="fas fa-wallet"></i> Finance</a></li>';
					if (active_sublist("finance") == "finance") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['contact_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../contacts/dashboard.php" class="menu_list"'; if (active_sublist("contacts") == "contacts") { echo 'id="active"'; } echo '><i class="fas fa-address-book"></i> Contact</a></li>';
					if (active_sublist("contacts") == "contacts") {
						include "sub_sidebar.php";
					}
				}
				
				
				if ($_SESSION['num_access_application_module'] >= "1") {
					echo '<p style="color:#767676; padding-left: 13px; padding-top: 8px; padding-bottom: 8px; margin: 0px;"> >_ Applications ('; echo $_SESSION['num_access_application_module']; echo ')</p>';
				}				
				
				
				if ($_SESSION['mail_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../mail/dashboard.php" class="menu_list"'; if (active_sublist("mail") == "mail") { echo 'id="active"'; } echo '><i class="fas fa-envelope"></i> Mail</a></li>';
					if (active_sublist("mail") == "mail") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['calendar_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../calendar/dashboard.php" class="menu_list"'; if (active_sublist("calendar") == "calendar") { echo 'id="active"'; } echo '><i class="fas fa-calendar-alt"></i> Calendar</a></li>';
					if (active_sublist("calendar") == "calendar") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['notification_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../notification+/dashboard.php" class="menu_list"'; if (active_sublist("notification+") == "notification+") { echo 'id="active"'; } echo '><i class="fas fa-bell"></i> Notification+</a></li>';
					if (active_sublist("notification+") == "notification+") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['control_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../control/dashboard.php" class="menu_list"'; if (active_sublist("control") == "control") { echo 'id="active"'; } echo '><i class="fas fa-gamepad"></i> Control</a></li>';
					if (active_sublist("control") == "control") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['analytics_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../analytics/dashboard.php" class="menu_list"'; if (active_sublist("analytics") == "analytics") { echo 'id="active"'; } echo '><i class="fas fa-chart-pie"></i> Analytics</a></li>';
					if (active_sublist("analytics") == "analytics") {
						include "sub_sidebar.php";
					}
				}
				
				if ($_SESSION['server_modules_access'] == "true") {
					
				 	echo 	'<li><a href="../server/dashboard.php" class="menu_list"'; if (active_sublist("server") == "server") { echo 'id="active"'; } echo '><i class="fas fa-server"></i> Server</a></li>';
					if (active_sublist("server") == "server") {
						include "sub_sidebar.php";
					}
				}
				
				
			
			?>
  
            </ul>
            </div>  
            
            
            
        </div>