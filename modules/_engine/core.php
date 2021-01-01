<?php 

include "../../core/config/session.php";

// Inialiazation

$folder_position = "../../core/";


// Get parts
$getNavigation = include "../../core/parts/navigation.php";
$getSidebar = include "sidebar.php";

// Funkce pro sublist

function active($currect_page){
	$url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // ziska celou url adresu a rozdeli je do array
	$url = end($url_array);  // nastavi hodnotu posledni filename
	if($currect_page == $url){
	echo 'active'; //class name in css 
	 } 
	}
	
function active_sublist($currect_sublist_modules){
	$url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // ziska celou url adresu a rozdeli je do array
	$sublist_module = $url_array[count($url_array)-2];  // nastavi hodnotu otevreneho modulu
	if($currect_sublist_modules == $sublist_module){
	return $sublist_module; //
	 } 
	}





?>