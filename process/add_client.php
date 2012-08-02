<?php

	include("../config.php");

	$company = $_POST['company'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	if (isset($_POST['active'])){ $active = 1; } else {  $active = 0; } 

	mysql_query("INSERT INTO `clients` (`company`, `contact`, `email`, `phone`, `website`, `active`) VALUES ('$company', '$contact', '$email', '$phone', '$website', '$active')") or die(mysql_error());

	$_SESSION['notice'] = "Client added successfully.";

	header("location: /client.php");

?>