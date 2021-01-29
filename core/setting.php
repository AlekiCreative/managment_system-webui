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


<?php 


//echo $user_setting['dark_mode'];

?>



<style>
td {
    padding-right: 25px;
    padding-bottom: 15px;
	
}
</style>



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
						?>						
						</h1>
                        
						
						
                    </div>
                </div>
			</div>
        </section>
			
		<section class="main-info">	
			<div class="container">
				<h2>Generaly</h2>
				</p>
				<table>
						
				<?php					
				if(isset($_POST['SaveChangeSetting'])){
							
					if(isset($_POST['dark_mode'])){
						$user_setting['dark_mode'] = "true";
						} else {
							$user_setting['dark_mode'] = "false";
						}
						
					if(isset($_POST['visible_date_in_navigation'])){
						$user_setting['visible_date_in_navigation'] = "true";
						} else {
							$user_setting['visible_date_in_navigation'] = "false";
						}
					
					//přihlašovací údaje k databasi
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
					
					//zakodování pole do json
					$user_setting_save = json_encode($user_setting);
					
					
					//mysql příkaz k aktualizaci
					$sql = "UPDATE `accounts` SET `setting` = '$user_setting_save' WHERE `accounts`.`id` = $id;";



					if ($con->query($sql) === TRUE) {
					  
					} else {
					  echo "Error: " . $sql . "<br>" . $con->error;
					}
					$con->close();
					
					echo "Aktualizujte si prosím stranku";
				}
				?>
				<p></p>
				<form action="" method="post">						
					<tr>
						<td><b>Dark Mode</b></td>
						<td>
							<label class="switch">
								<input name="dark_mode" id="" type="checkbox" <?php if ($user_setting['dark_mode'] == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					
					<tr>
						<td><b>Visible Date<br> In Navigation</b></td>
						<td>
							<label class="switch">
								<input name="visible_date_in_navigation" id="" type="checkbox"<?php if ($user_setting['visible_date_in_navigation'] == "true"){echo "checked";}?>>
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					
					<tr>
						<td><button type="submit" name="SaveChangeSetting">Save</button></td>
					</tr>
				</form>
				</table>
		
			</div>
        </section>
		
		
		<p>

        <?php include "parts/footer.php"; ?>