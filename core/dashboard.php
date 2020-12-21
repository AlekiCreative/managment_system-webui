<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}
?>

<?php include 'get_data.php';?>

<!DOCTYPE html>
<html>
    <head>


    <meta charset="latin1">
	<title>Dashboard</title>


    <!-- =CSS= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- =Fonts= -->
    <script src="https://kit.fontawesome.com/d77a98d2b4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>
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

        <!-- Začátek informační sekce -->
        <section class="main-info" style="padding-top:  120px;">
            <div class="container">
			
				<!--Začátek Řádek profilu -->
                <div class="row">
                    <div class="profile-img">
                        <img src="../user-data/<?php echo $username;?>/img/profile.jpg" width="150" height="150" style="border-radius: 50%;">
                    </div>
                    <div class="profile-text">
                        <h3>Welcome</h3>
                        <h1><?php echo $full_name; ?></h1>
                        

                    </div>
					
                    <div class="profile-status">
                        <div class="row">
                            <div class="col-lg">
                                    <div class="box_info red">
                                        <i class="fas fa-coins red"></i>
                                        <span class="text">Total Value Cash</span>
                                        <span class="number">7.000 CZK</span>
                                        <span class="month_number">-5.000 CZK</span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="box_info green">
                                    <i class="fas fa-warehouse green"></i>
                                    <span class="text">Total Value Property</span>
                                    <span class="number">30.000 CZK</span>
                                    <span class="month_number">+1.000 CZK</span>
                                </div>
                            </div>


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
                <div class="general warnig">
                    <div class="warning-title"><i>Omlouváme se, ale některé funkce mohou být z technických důvodu nedostupné</i></div>
                    <div class="warning-cancle_cross"><a href="#"><i class="fas fa-times-circle"></i></a></div>
                </div>
                <div class="general successfully">
                    <div class="warning-title"><i>Zasilká #153124 byla přepravena zakaznikovi</i></div>
                    <div class="warning-cancle_cross"><a href="#"><i class="fas fa-times-circle"></i></a></div>
                </div>
                <div class="general danger">
                    <div class="warning-title"><i>Kritické přetížení serveru!!!</i></div>
                    <div class="warning-cancle_cross"><a href="#"><i class="fas fa-times-circle"></i></a></div>
                </div>

            </div>
        </section>
        <!-- Konec notifikační sekce -->

        <!-- Začátek oddílu pro database -->
        <section class="database">
            <div class="container">
                <h4> Database</h4>
                <div class="row">

                    <div class="col-md-2">
                        <a href="parts/database/inventory/inventory-all.html">
                            <div class="button_box">
                                <i class="fas fa-box"></i>
                                <span class="text">Inventory</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-file-signature"></i>
                                <span class="text">Contract</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-lightbulb"></i>
                                <span class="text">Projects</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-file"></i>
                                <span class="text">Documents</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-wallet"></i>
                                <span class="text">Finance</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-address-book"></i>
                                <span class="text">Contact</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Konec oddílu pro database -->

        <!-- Začátek oddílu pro aplikace -->
        <section class="application">
            <div class="container">
                <h4>Application</h4>
                <div class="row">
                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-envelope"></i>
                                <span class="text">Mail</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="text">Calendar</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-bell"></i>
                                <span class="text">Notification</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-gamepad"></i>
                                <span class="text">Control</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-chart-pie"></i>
                                <span class="text">Analytics</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2">
                        <a href="#">
                            <div class="button_box">
                                <i class="fas fa-server"></i>
                                <span class="text">Server</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Konec oddílu pro aplikace -->

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

        <!-- Začátek patičky -->
        <footer class="wrapper">
          <p class="font-sans-semibold">Copyright © 2020 Aleš Pavlík</p>
          <p class="font-sans-regular">Powered by Smart_Managment_System_0.1-2alpha</p>
        </footer>
        <!-- Konec patičky -->

    </body>




</html>
