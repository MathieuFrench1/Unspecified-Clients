<?php
	include('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if (isset($title)) { echo $title." - "; } ?>byteFish</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<link rel="apple-touch-icon" href="img/icon.png"/> 
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<meta name="apple-mobile-web-app-capable" content="yes" />  
		<!--
			Splash screen whilst loading?
			<link rel="apple-touch-startup-image" href="img/splash.png" />  
		-->
	</head>
	<body>
		<div id="wrapper">
			<?php if (isset($_SESSION['name'])){ ?>
				<h2>Oh, hai <?php echo $_SESSION['name']; ?></h2>
				<h4>Menu: <a href="/client.php">Clients</a> - <a href="/">Home</a> - <a href="/logout.php">Logout</a></h4>
			<?php } else { ?>
				<h2>Login</h2>
			<?php } ?>

<?php
	if (isset($_SESSION['notice'])){
		echo "<div class=\"notice\">".$_SESSION['notice']."</div>";
		unset($_SESSION['notice']);
	}
?>