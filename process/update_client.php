<?php

	include("../config.php");

	$id = $_POST['client_id'];
	$company = $_POST['company'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	if (isset($_POST['active'])){ $active = 1; } else {  $active = 0; } 

	mysql_query("UPDATE `clients` SET `company` = '$company', `contact`='$contact', `email`='$email', `phone`='$phone', `website`='$website', `active`='$active' WHERE `id`='$id' LIMIT 1") or die(mysql_error());

	$_SESSION['notice'] = "Client saved successfully.";

	header("location: /client.php?id=".$id);

?>