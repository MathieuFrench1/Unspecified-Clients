<?php $title = "Add Project"; include('_header.php'); ?>

<h2>Add Project</h2>
<form action="/process/add_project.php" method="post">
	<input type="hidden" value="<?php echo $_GET['client']; ?>" name="client_id" />
	<table cellspacing="0" class="alternating">
		<tr>
			<th>Title</th>
			<td><input type="text" name="title" size="50" /></td>
		</tr>
		<tr>
			<th>Description</th>
			<td><textarea name="description" cols="40" rows="6"></textarea></td>
		</tr>
		<tr>
			<th>Status</th>
			<td>
				<select name="status">
					<option value="Pending">Pending</option>
					<option value="Requirements Gathering">Requirements Gathering</option>
					<option value="Wireframe">Wireframe</option>
					<option value="Awaiting Client Feedback">Awaiting Client Feedback</option>
					<option value="Designing">Designing</option>
					<option value="Building">Building</option>
					<option value="Completed">Completed</option>
					<option value="Cancelled">Cancelled</option>
				</select>
			</td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="add_project" value="Add" /></td>
		</tr>
	</table>
</form>

<?php include('_footer.php'); ?>
