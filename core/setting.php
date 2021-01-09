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
<?php include 'config/config.php';?>

<style>
td {
    padding-right: 25px;
    padding-bottom: 15px;
	
}
</style>



    <body>
        <?php include 'parts/navigation.php';?>
		
		<section class="main-info">	
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
				<h2>Generaly</h2>
				</p>
				<table>
										
					<tr>
						<td><b>Dark Mode</b></td>
						<td>
							<label class="switch">
								<input name="" id="" type="checkbox">
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					
					<tr>
						<td><b>Visible Date<br> In Navigation</b></td>
						<td>
							<label class="switch">
								<input name="" id="" type="checkbox">
								<span class="slider round"></span>
							</label>
						</td>
					</tr>
					

				</table>
		
			</div>
        </section>
		
		
		<p>

        <?php include "parts/footer.php"; ?>