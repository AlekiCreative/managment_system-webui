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



    <body>
        <?php include 'parts/navigation.php';?>
		
		<!-- Začátek informační sekce -->
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
					
                    <div class="profile-status">
                        <div class="row">
						
						<?php if ($access_module_database['finance']  == "true"){
						
							echo '<div class="col-lg">
                                    <div class="box_info red">
                                        <i class="fas fa-coins red"></i>
                                        <span class="text">Total Value Cash</span>
                                        <span class="number">7.000 CZK</span>
                                        <span class="month_number">-5.000 CZK</span>
                                </div>
                            </div>';
						}	
						
						if ($access_module_database['inventory']  == "true"){
						
							echo '<div class="col-md">
                                <div class="box_info green">
                                    <i class="fas fa-warehouse green"></i>
                                    <span class="text">Total Value Property</span>
                                    <span class="number">30.000 CZK</span>
                                    <span class="month_number">+1.000 CZK</span>
                                </div>
                            </div>';
						} ?>

                        </div>
                    </div>

                </div>
				<!--Konec Řádek profilu -->
            </div>
		
		

        </section>
        <!-- Konec informační sekce -->

        <!-- Začátek notifikační sekce -->
        <section class="info-box">
            <div class="container">
			
				
			<?php
			
			if ($user_setting['visible_notif_in_dashboard'] == "true"){
			echo '
                <div id="general" class="general warnig" style="display: flex;">
                    <div class="warning-title"><i>Omlouváme se, ale některé funkce mohou být z technických důvodu nedostupné</i></div>
                    <div class="warning-cancle_cross close"><a><i class="fas fa-times-circle"></i></a></div>
                </div>
                <div id="general" class="general successfully" style="display: flex;">
                    <div class="warning-title"><i>Zasilká #153124 byla přepravena zakaznikovi</i></div>
                    <div class="warning-cancle_cross close"><a><i class="fas fa-times-circle"></i></a></div>
                </div>
                <div id="general" class="general danger" style="display: flex;">
                    <div class="warning-title"><i>Kritické přetížení serveru!!!</i></div>
                    <div class="warning-cancle_cross close"><a><i class="fas fa-times-circle"></i></a></div>
				</div>';} else {} 	
			
			?>	
				<script>
				$('.close').on('click', function() {
				  $(this).parent('.general').hide();
				});
				</script>

            </div>
        </section>
        <!-- Konec notifikační sekce -->

        <!-- Začátek oddílu pro database -->
        <section class="database">
            <div class="container">
                <h4> Database (<?php echo intval($num_access_database_module["true"] - 1)?>)</h4> <!-- Vypise pocet dostupny modulu --> 
                <div class="row">
					
					<?php
					
						if($num_access_database_module["true"] > "1"){ //první hodnota jen zabranuje k vyhození chyby, vzdy nastavena na hodnotu TRUE 
							echo "<!--Moduly jsou-->";
							
							if ($access_module_database['inventory'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="../modules/inventory/dashboard.php">
												<div class="button_box">
													<i class="fas fa-box"></i>
													<span class="text">Inventory</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_database['contract'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-file-signature"></i>
													<span class="text">Contract</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_database['projects'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-lightbulb"></i>
													<span class="text">Projects</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_database['documents'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-file"></i>
													<span class="text">Documents</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_database['finance'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-wallet"></i>
													<span class="text">Finance</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_database['contact'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-address-book"></i>
													<span class="text">Contact</span>
												</div>
											</a>
										</div>';
							}else {}

						}else {
							
							echo "Žadné moduly";
							
							
						}

					?>

                </div>
            </div>
        </section>
        <!-- Konec oddílu pro database -->

        <!-- Začátek oddílu pro aplikace -->
        <section class="application">
            <div class="container">
                <h4>Application (<?php echo intval($num_access_application_module["true"] - 1); ?>)</h4>
                <div class="row">
				
					<?php
					
						if($num_access_application_module["true"] > "1"){ //první hodnota nepovuluje nic, jen zabranuje k vyhození chyby vzdy nastavena na hodnotu TRUE 
							echo "<!--Moduly jsou-->";
							
							if ($access_module_application['mail'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-envelope"></i>
													<span class="text">Mail</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_application['calendar'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-calendar-alt"></i>
													<span class="text">Calendar</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_application['notification+'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-bell"></i>
													<span class="text">Notification+</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_application['control'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-gamepad"></i>
													<span class="text">Control</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_application['analytics'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-chart-pie"></i>
													<span class="text">Analytics</span>
												</div>
											</a>
										</div>';
							}else {}
							
							if ($access_module_application['server'] == "true") {
							
							 	echo 	'<div class="col-md-2">
											<a href="#">
												<div class="button_box">
													<i class="fas fa-server"></i>
													<span class="text">Server</span>
												</div>
											</a>
										</div>';
							}else {}

						}else {
							
							echo "Žadné moduly";
	
						}

					?>
    
            </div>
        </section>
        <!-- Konec oddílu pro aplikace -->
		
		
		
		<?php 
		
		if ($access_module_database['contract']  == "true" || $access_module_database['projects'] == "true"){
		
		echo '
        <!-- Začátek oddílu poslední práce -->
        <section class="work">
            <div class="container">
                <h4> Last Work</h4>
                <div class="row">

                    <!-- Začátek karty -->
                    <div class="col-lg-4">
                        <div class="work_card">

                            <!-- Začátek Nadpis karty -->
                            <div class="work-card-head">
                                <h2>Project name</h2>
                                <div class="work-card-status working">In Progress</div>
                            </div>
                            <div class="clear"></div>
                            <!-- Konec Nadpis karty -->

                            <!-- Začátek Informace o kartě -->
                            <div class="work-card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>

                                <!-- Pokrok karty -->
                                <span>Progress: 15%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 15%; background: red;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p></p>

                                <!-- Dodatečné informace o kartě -->
                                <p>
                                    Category: Lorem ipsum, Lorem upsum
                                    Investing: Lorem ipsum, Lorem upsum
                                </p>
                            </div>
                            <!-- Konec Informace o kartě -->

                            <!-- Začátek Ovládaní karty -->
                            <div class="work-card-footer clearfix">
                                <a href="#"> <div class="one-second"> View Work </div> </a>
                                <a href="#"> <div class="second-second"> Edit Work </div> </a>
                            </div>
                            <!-- Konec Ovládaní karty -->

                        </div><!-- class:work_card -->
                    </div> <!-- class:col-lg-4 -->
                    <!-- Konec karty -->

                    <!-- Začátek karty -->
                    <div class="col-lg-4">
                        <div class="work_card"> <!-- class:"work_box" -->

                            <div class="work-card-head">
                                <h2>Project name</h2>
                                <div class="work-card-status completed">Completed</div>
                            </div>

                            <div class="clear"></div>

                            <div class="work-card-body">


                                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                                <span>Progress: 100%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%; background: green;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p></p>
                                <p>
                                    Category: Lorem ipsum, Lorem upsum
                                    Investing: Lorem ipsum, Lorem upsum
                                </p>


                            </div>

                            <div class="work-card-footer clearfix">
                                <a href="#">
                                    <div class="one-second">
                                        View Work
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="second-second">
                                        Edit Work
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Konec karty -->
                    <!-- Začátek karty -->
                    <div class="col-lg-4">
                        <div class="work_card"> <!-- class:"work_box" -->

                            <div class="work-card-head">
                                <h2>Project name</h2>
                                <div class="work-card-status planned">Planned</div>
                            </div>

                            <div class="clear"></div>

                            <div class="work-card-body">


                                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                                <span>Progress: 5%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 5%; background: blue;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p></p>
                                <p>
                                    Category: Lorem ipsum, Lorem upsum
                                    Investing: Lorem ipsum, Lorem upsum
                                </p>


                            </div>

                            <div class="work-card-footer clearfix">
                                <a href="#">
                                    <div class="one-second">
                                        View Work
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="second-second">
                                        Edit Work
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Konec karty -->
                </div>
            </div>
        </section>
        <!-- Konec oddílu poslední práce -->
		';}
		
		?>
		
		
        <?php include "parts/footer.php"; ?>
		
		
		
		