<?php $title = "Add Client"; include('_header.php'); ?>

<h2>Add Client</h2>
<form action="/process/add_client.php" method="post">
	<table cellspacing="0" class="alternating">
		<tr>
			<th>Company</th>
			<td><input type="text" name="company" size="50" /></td>
		</tr>
		<tr>
			<th>Contact</th>
			<td><input type="text" name="contact" size="50" /></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" name="email" size="50" /></td>
		</tr>
		<tr>
			<th>Phone</th>
			<td><input type="text" name="phone" size="50" /></td>
		</tr>
		<tr>
			<th>Website</th>
			<td><input type="text" name="website" size="50" /></td>
		</tr>
		<tr>
			<th>Active</th>
			<td><input type="checkbox" name="active" value="1" /></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="add_client" value="Add" /></td>
		</tr>
	</table>
</form>

<?php include('_footer.php'); ?>
