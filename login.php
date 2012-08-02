<?php $title = "Login"; include('_header.php'); ?>

	<form method="post" action="process_login.php">
		<table>
			<tr><th><label for="email">Email</label></th></tr>
			<tr><td><input type="text" id="email" name="email" /></td></tr>
			<tr><th><label for="password">Password</label></th></tr>
			<tr><td><input type="password" id="password" name="password" /></td></tr>
			<tr><td><input type="submit" value="Login" /></td></tr>
		</table>
	</form>

<?php include('_footer.php'); ?>