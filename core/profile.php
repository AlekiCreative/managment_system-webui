<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}

?>


<?php include 'parts/header.php';?>
<?php //include 'config/config.php';?>



    <body>
        <?php include 'parts/navigation.php';?>
		
		<section class="main-info" style="padding-top:  120px;">	
			<div class="container">
			
				<!--Začátek Řádek profilu -->
                <div class="row">
                    <div class="profile-img">
                        <img src="<?php echo $folder_position;?>user-data/<?php echo $username;?>/img/profile.jpg" width="150" height="150" style="border-radius: 50%;">
                    </div>
                    <div class="profile-text">
                        <h3>Welcome</h3>
                        <h1><?php echo $full_name; 
						?></h1>
                        

                    </div>
                </div>
			</div>
        </section>
			
		<section class="main-info">	
			<div class="container">
				<h2>Profile Details</h2>
				<p><i>Your account details are below:</i></p>	
				<table>
					<tr>
						<td><b>Full Name</b></td>
						<td><?php echo ": " . $_SESSION['full_name']; ?></td>
					</tr>
					<tr>
						<td><b>Username</b></td>
						<td><?php echo ": " . $_SESSION['name']; ?></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><?php echo ": " . $password; ?></td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td><?php echo ": " . $email; ?></td>
					</tr>
				</table>
		
			</div>
        </section>
		
		<section class="module-info">	
			<div class="container">
				<h2>Module Details</h2>
				
				 
		<?php
				$id = $_SESSION['id'];
		
						
				if(isset($_POST['SaveChangeDatabase'])){
							
					if(isset($_POST['inventory'])){
						$_SESSION['inventory_modules_access'] = "true";
						} else {
							$_SESSION['inventory_modules_access'] = "false";
						}
						
					if(isset($_POST['contract'])){
						$_SESSION['contract_modules_access'] = "true";
						} else {
							$_SESSION['contract_modules_access'] = "false";
						}
						
					if(isset($_POST['projects'])){
						$_SESSION['projects_modules_access'] = "true";
						} else {
							$_SESSION['projects_modules_access'] = "false";
						}
						
					if(isset($_POST['documents'])){
						$_SESSION['documents_modules_access'] = "true";
						} else {
							$_SESSION['documents_modules_access'] = "false";
						}
						
					if(isset($_POST['finance'])){
						$_SESSION['finance_modules_access'] = "true";
						} else {
							$_SESSION['finance_modules_access'] = "false";
						}
						
					if(isset($_POST['contact'])){
						$_SESSION['contact_modules_access'] = "true";
						} else {
							$_SESSION['contact_modules_access'] = "false";
						}
						
						
						
						
						
						
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "ms";

					// Create connection
					$con = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($con->connect_error) {
					  die("Connection failed: " . $con->connect_error);
					}
					
					
					$inventory = $_SESSION['inventory_modules_access'];
					$contract = $_SESSION['contract_modules_access'];
					$projects = $_SESSION['projects_modules_access'];
					$documents = $_SESSION['documents_modules_access'];
					$finance = $_SESSION['finance_modules_access'];
					$contact = $_SESSION['contact_modules_access'];
					
					$sql = "UPDATE `accounts` SET `database_modules` = 'true;$inventory;$contract;$projects;$documents;$finance;$contact' WHERE `accounts`.`id` = $id;";

					if ($con->query($sql) === TRUE) {
					  
					} else {
					  echo "Error: " . $sql . "<br>" . $con->error;
					}
					$con->close();
				}
				
				if(isset($_POST['SaveChangeApplication'])){
							
					if(isset($_POST['mail'])){
						$_SESSION['mail_modules_access'] = "true";
						} else {
							$_SESSION['mail_modules_access'] = "false";
						}
						
					if(isset($_POST['calendar'])){
						$_SESSION['calendar_modules_access'] = "true";
						} else {
							$_SESSION['calendar_modules_access'] = "false";
						}
						
					if(isset($_POST['notification'])){
						$_SESSION['notification_modules_access'] = "true";
						} else {
							$_SESSION['notification_modules_access'] = "false";
						}
						
					if(isset($_POST['control'])){
						$_SESSION['control_modules_access'] = "true";
						} else {
							$_SESSION['control_modules_access'] = "false";
						}
						
					if(isset($_POST['analytics'])){
						$_SESSION['analytics_modules_access'] = "true";
						} else {
							$_SESSION['analytics_modules_access'] = "false";
						}
						
					if(isset($_POST['server'])){
						$_SESSION['server_modules_access'] = "true";
						} else {
							$_SESSION['server_modules_access'] = "false";
						}
						
						
						
						
						
						
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "ms";

					// Create connection
					$con = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($con->connect_error) {
					  die("Connection failed: " . $con->connect_error);
					}
					
					
					$mail = $_SESSION['mail_modules_access'];
					$calendar = $_SESSION['calendar_modules_access'];
					$notification = $_SESSION['notification_modules_access'];
					$control = $_SESSION['control_modules_access'];
					$analytics = $_SESSION['analytics_modules_access'];
					$server = $_SESSION['server_modules_access'];
					
					
					$sql = "UPDATE `accounts` SET `application_modules` = 'true;$mail;$calendar;$notification;$control;$analytics;$server' WHERE `accounts`.`id` = $id;";

					if ($con->query($sql) === TRUE) {
					  
					} else {
					  echo "Error: " . $sql . "<br>" . $con->error;
					}
					$con->close();
				}
				

	?>		


				
				
				<p><i>Details on activated modules are below:</i></p>	
				<table>
					<tr>
						<td class=""><b>>_ Database</b></td>
					</tr>
					
					<form action="" method="post">
					<tr>
						<td><span>Inventory</span></td>
						<td>
							<label class="switch">
								<input name="inventory" id="inventory" type="checkbox" <?php if ($_SESSION['inventory_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Contract</span></td>
						<td>
							<label class="switch">
								<input name="contract" id="contract" type="checkbox" <?php if ($_SESSION['contract_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Projects</span></td>
						<td>
							<label class="switch">
								<input name="projects" id="projects" type="checkbox" <?php if ($_SESSION['projects_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Documents</span></td>
						<td>
							<label class="switch">
								<input name="documents" id="documents" type="checkbox" <?php if ($_SESSION['documents_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Finance</span></td>
						<td>
							<label class="switch">
								<input name="finance" id="finance" type="checkbox" <?php if ($_SESSION['finance_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Contact</span></td>
						<td>
							<label class="switch">
								<input name="contact" id="contact" type="checkbox" <?php if ($_SESSION['contact_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					
					<tr>
						<td><button type="submit" name="SaveChangeDatabase">Save</button></td>
					</tr>

					<tr>
						<td class="table-module-title"><b>>_ Application</b></td>
					</tr>
					
					<form action="" method="post">
					<tr>
						<td><span>Mail</span></td>
						<td>
							<label class="switch">
								<input name="mail" id="mail" type="checkbox" <?php if ($_SESSION['mail_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Calendar</span></td>
						<td>
							<label class="switch">
								<input name="calendar" id="calendar" type="checkbox" <?php if ($_SESSION['calendar_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Notification+</span></td>
						<td>
							<label class="switch">
								<input name="notification" id="notification" type="checkbox" <?php if ($_SESSION['notification_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Control</span></td>
						<td>
							<label class="switch">
								<input name="control" id="control" type="checkbox" <?php if ($_SESSION['control_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Analytics</span></td>
						<td>
							<label class="switch">
								<input name="analytics" id="analytics" type="checkbox" <?php if ($_SESSION['analytics_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Server</span></td>
						<td>
							<label class="switch">
								<input name="server" id="server" type="checkbox" <?php if ($_SESSION['server_modules_access']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					
					<tr>
						<td><button type="submit" name="SaveChangeApplication">Save</button></td>
					</tr>
					
					
					</form>
					
				</table>
			</div>
        </section>
		<p>

        <?php include "parts/footer.php"; ?>