<?php


$folder_position = "";

//Inializace MySQL database
$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "ms";

$ID = (int)$_SESSION['id'];

//Inializace po příhlášení
if ($ID >= 1){
	echo "kurva";
	include "get_data.php";

	//Inializace uživatelských parametru z database
	$user_setting = json_decode($_SESSION['setting'], true);
	$access_module_database = json_decode($_SESSION['database_modules_access'], true);
	$access_module_application = json_decode($_SESSION['application_modules_access'], true);

		//Velikost pole
		$num_access_database_module = array_count_values($access_module_database);
		$num_access_application_module = array_count_values($access_module_application);

}













?>