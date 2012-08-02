<?php

	include("../config.php");

	$client = $_POST['client_id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$status = $_POST['status']; 

	mysql_query("INSERT INTO `projects` (`client_id`, `title`, `description`, `status`) VALUES ('$client', '$title', '$description', '$status')") or die(mysql_error());

	$_SESSION['notice'] = "Project added successfully.";

	header("location: /client.php?id=".$client);

?>