<?php


	//Module Access
	$array_module_access = explode (";", $_SESSION['modules_acces']); 

	//set session var module access
	$_SESSION['inventory_modules_access'] = $array_module_access["1"];
	$_SESSION['contract_modules_access'] = $array_module_access["2"];
	$_SESSION['projects_modules_access'] = $array_module_access["3"];
	$_SESSION['documents_modules_access'] = $array_module_access["4"];
	$_SESSION['finance_modules_access'] = $array_module_access["5"];
	$_SESSION['contact_modules_access'] = $array_module_access["6"];

	$num_access_module = array_count_values($array_module_access); //vygenerování array s počtem povoleních a nepovolenou modulu
	
	
	
	
	



	












?>