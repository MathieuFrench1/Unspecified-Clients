<?php

$id = $_GET['id'];
$client_search = mysql_query("SELECT * FROM `clients` WHERE `id` = '$id' LIMIT 1");

if (mysql_num_rows($client_search) != 1){
	echo "Sorry, I couldn't find a client associated with that ID. Lay off the bourbon for 3 minutes and try again.";
} else {
	$ci = mysql_fetch_array($client_search);
	?>
	<form action="/process/update_client.php" method="post">
		<input type="hidden" name="client_id" value="<?php echo $ci['id']; ?>" />
		<table cellspacing="0" class="alternating">
			<tr>
				<th>Company</th>
				<td><input type="text" name="company" value="<?php echo $ci['company']; ?>" size="50" /></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><input type="text" name="contact" value="<?php echo $ci['contact']; ?>" size="50" /></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email" value="<?php echo $ci['email']; ?>" size="50" /></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><input type="text" name="phone" value="<?php echo $ci['phone']; ?>" size="50" /></td>
			</tr>
			<tr>
				<th>Website</th>
				<td><input type="text" name="website" value="<?php echo $ci['website']; ?>" size="50" /></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="save_client" value="Save" /></td>
			</tr>
		</table>
	</form>

	<h3>Projects</h3>
	<p>These are the projects the client currently has with us. It'll show the status, name, etc.. Click to view more information.</p>
	
	<?php
}

?>