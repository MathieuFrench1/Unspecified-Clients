<?php

	include("../config.php");

	$id = $_POST['project_id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$status = $_POST['status']; 

	mysql_query("UPDATE `projects` SET `title` = '$title', `description`='$description', `status`='$status' WHERE `id`='$id' LIMIT 1") or die(mysql_error());

	$_SESSION['notice'] = "Project saved successfully.";

	header("location: /project.php?id=".$id);

?>