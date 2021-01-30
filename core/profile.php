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
				
					
				// Create connection
				$con = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
				// Check connection
				if ($con->connect_error) {
				  die("Connection failed: " . $con->connect_error);
				}
						
				if(isset($_POST['SaveChangeDatabase'])){
							
					if(isset($_POST['inventory'])){
						$access_module_database['inventory'] = "true";
						} else {
							$access_module_database['inventory'] = "false";
						}
						
					if(isset($_POST['contract'])){
						$access_module_database['contract'] = "true";
						} else {
							$access_module_database['contract'] = "false";
						}
						
					if(isset($_POST['projects'])){
						$access_module_database['projects'] = "true";
						} else {
							$access_module_database['projects'] = "false";
						}
						
					if(isset($_POST['documents'])){
						$access_module_database['documents'] = "true";
						} else {
							$access_module_database['documents'] = "false";
						}
						
					if(isset($_POST['finance'])){
						$access_module_database['finance'] = "true";
						} else {
							$access_module_database['finance'] = "false";
						}
						
					if(isset($_POST['contact'])){
						$access_module_database['contact'] = "true";
						} else {
							$access_module_database['contact'] = "false";
						}

					$access_module_database_save = json_encode($access_module_database);
					
					$sql = "UPDATE `accounts` SET `database_modules` = '$access_module_database_save' WHERE `accounts`.`id` = $id;";

					if ($con->query($sql) === TRUE) {
					  
					} else {
					  echo "Error: " . $sql . "<br>" . $con->error;
					}
					$con->close();
				}
				
				if(isset($_POST['SaveChangeApplication'])){
							
					if(isset($_POST['mail'])){
						$access_module_application['mail'] = "true";
						} else {
							$access_module_application['mail'] = "false";
						}
						
					if(isset($_POST['calendar'])){
						$access_module_application['calendar'] = "true";
						} else {
							$access_module_application['calendar'] = "false";
						}
						
					if(isset($_POST['notification'])){
						$access_module_application['notification+'] = "true";
						} else {
							$access_module_application['notification+'] = "false";
						}
						
					if(isset($_POST['control'])){
						$access_module_application['control'] = "true";
						} else {
							$access_module_application['control'] = "false";
						}
						
					if(isset($_POST['analytics'])){
						$access_module_application['analytics'] = "true";
						} else {
							$access_module_application['analytics'] = "false";
						}
						
					if(isset($_POST['server'])){
						$access_module_application['server'] = "true";
						} else {
							$access_module_application['server'] = "false";
						}

		
					$access_module_application_save = json_encode($access_module_application);
					
					$sql = "UPDATE `accounts` SET `application_modules` = '$access_module_application_save' WHERE `accounts`.`id` = $id;";

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
								<input name="inventory" id="inventory" type="checkbox" <?php if ($access_module_database['inventory']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Contract</span></td>
						<td>
							<label class="switch">
								<input name="contract" id="contract" type="checkbox" <?php if ($access_module_database['contract']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Projects</span></td>
						<td>
							<label class="switch">
								<input name="projects" id="projects" type="checkbox" <?php if ($access_module_database['projects']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Documents</span></td>
						<td>
							<label class="switch">
								<input name="documents" id="documents" type="checkbox" <?php if ($access_module_database['documents']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Finance</span></td>
						<td>
							<label class="switch">
								<input name="finance" id="finance" type="checkbox" <?php if ($access_module_database['finance']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Contact</span></td>
						<td>
							<label class="switch">
								<input name="contact" id="contact" type="checkbox" <?php if ($access_module_database['contact']  == "true"){echo "checked";}?>>
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
								<input name="mail" id="mail" type="checkbox" <?php if ($access_module_application['mail']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Calendar</span></td>
						<td>
							<label class="switch">
								<input name="calendar" id="calendar" type="checkbox" <?php if ($access_module_application['calendar']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Notification+</span></td>
						<td>
							<label class="switch">
								<input name="notification" id="notification" type="checkbox" <?php if ($access_module_application['notification+']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Control</span></td>
						<td>
							<label class="switch">
								<input name="control" id="control" type="checkbox" <?php if ($access_module_application['control']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Analytics</span></td>
						<td>
							<label class="switch">
								<input name="analytics" id="analytics" type="checkbox" <?php if ($access_module_application['analytics']  == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td><span>Server</span></td>
						<td>
							<label class="switch">
								<input name="server" id="server" type="checkbox" <?php if ($access_module_application['server']  == "true"){echo "checked";}?>>
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