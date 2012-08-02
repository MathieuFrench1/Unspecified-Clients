<?php

$id = $_GET['id'];
$client_search = mysql_query("SELECT * FROM `clients` WHERE `id` = '$id' LIMIT 1");
$project_search = mysql_query("SELECT * FROM `projects` WHERE `client_id`='$id'");

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
				<th>Active</th>
				<td><input type="checkbox" name="active" value="1" <?php if ($ci['active'] == 1){ echo "checked=\"checked\""; } ?> /></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="save_client" value="Save" /></td>
			</tr>
		</table>
	</form>

	<h3>Projects</h3>
	<p><a href="/add_project.php?client=<?php echo $_GET['id']; ?>">Add Project</a></p>
	<p>These are the projects the client currently has with us. It'll show the status, name, etc.. Click to view more information.</p>
	<?php

		if (mysql_num_rows($project_search) > 0){
		?>
			<table cellspacing="0" class="clickable">
				<tr>
					<th>Title</th>
					<th>Status</th>
				</tr>
				<?php
					while ($p = mysql_fetch_array($project_search)){
						?>
							<tr onclick="document.location.href = '/project.php?id=<?php echo $p['id']; ?>'">
								<td><?php echo $p['title']; ?></td>
								<td><?php echo $p['status']; ?></td>
							</tr>
						<?php
					}
				?>
			</table>
		<?php
		} else {
		?>
			<p>There are no projects assigned to this client.</p>
		<?php
		}

	?>
	
	<?php
}

?>