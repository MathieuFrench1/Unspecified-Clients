<?php

session_start();

// Database configuration

if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
	$con = mysql_connect("localhost", "unspecif_admin", "adminuser1234!");
} else {
	$con = mysql_connect("localhost", "root", "");
}

if ($con){
	//$db = mysql_select_db("unspecif_internal");
	
	if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
		$db = mysql_select_db("unspecif_internal");
	} else {
		$db = mysql_select_db("bytefish");
	}
}

if (!isset($_SESSION['user'])){
	if ($_SERVER['PHP_SELF'] != "/login.php"){
		header("location: /login.php");
	}
} 

?>