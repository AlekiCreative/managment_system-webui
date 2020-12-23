<?php

	// Database

	//Module Access
	$array_database_module_access = explode (";", $_SESSION['database_modules_access']); 

	//set session var module access
	$_SESSION['inventory_modules_access'] = $array_database_module_access["1"];
	$_SESSION['contract_modules_access'] = $array_database_module_access["2"];
	$_SESSION['projects_modules_access'] = $array_database_module_access["3"];
	$_SESSION['documents_modules_access'] = $array_database_module_access["4"];
	$_SESSION['finance_modules_access'] = $array_database_module_access["5"];
	$_SESSION['contact_modules_access'] = $array_database_module_access["6"];

	$num_access_database_module = array_count_values($array_database_module_access); //vygenerování array s počtem povoleních a nepovolenou modulu
	
	
	// Application
	
	
	
	//Module Access
	$array_application_module_access = explode (";", $_SESSION['application_modules_access']); 

	//set session var module access
	$_SESSION['mail_modules_access'] = $array_application_module_access["1"];
	$_SESSION['calendar_modules_access'] = $array_application_module_access["2"];
	$_SESSION['notification_modules_access'] = $array_application_module_access["3"];
	$_SESSION['control_modules_access'] = $array_application_module_access["4"];
	$_SESSION['analytics_modules_access'] = $array_application_module_access["5"];
	$_SESSION['server_modules_access'] = $array_application_module_access["6"];

	$num_access_application_module = array_count_values($array_application_module_access); //vygenerování array s počtem povoleních a nepovolenou modulu
	
	
	
	
	



	












?>