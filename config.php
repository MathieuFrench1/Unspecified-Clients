<?php

session_start();

// Database configuration

//$con = mysql_connect("localhost", "unspecif_wp", "XBl[V{v$J;JT");
$con = mysql_connect("localhost", "root", "");

if ($con){
	//$db = mysql_select_db("unspecif_internal");
	$db = mysql_select_db("bytefish");
}

if (!isset($_SESSION['user'])){
	if ($_SERVER['PHP_SELF'] != "/login.php"){
		header("location: /login.php");
	}
} 

?>