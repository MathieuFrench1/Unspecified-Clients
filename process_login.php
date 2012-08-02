<?php
	
	session_start();
	include('config.php');

	if (isset($_POST)){
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		if ($email != "" || $_POST['password'] != ""){
			$user_search = mysql_query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' LIMIT 1");
			if (mysql_num_rows($user_search) == 1){
				$u = mysql_fetch_array($user_search);
				$_SESSION['user'] = $u['id'];
				$_SESSION['name'] = $u['name'];
				header('location: index.php');
			} else {
				// Not found. Incorrect credentials.
				header('location: login.php?failed'); 
			}
		}
	} 
	
?>