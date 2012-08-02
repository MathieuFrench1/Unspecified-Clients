<?php

$id = $_GET['id'];
$project_search = mysql_query("SELECT * FROM `projects` WHERE `id`='$id'");

if (mysql_num_rows($project_search) != 1){
	echo "Sorry, I couldn't find a project associated with that ID. Lay off the bourbon for 3 minutes and try again.";
} else {
	$pi = mysql_fetch_array($project_search);
	?>
	<p><a href="/client.php?id=<?php echo $pi['client_id']; ?>">Back to the client</a></p>
	<form action="/process/update_project.php" method="post">
		<input type="hidden" name="project_id" value="<?php echo $pi['id']; ?>" />
		<table cellspacing="0" class="alternating">
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" value="<?php echo $pi['title']; ?>" size="50" /></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="description" cols="40" rows="6"><?php echo $pi['description']; ?></textarea></td>
			</tr>
			<tr>
				<th>Status</th>
				<td>
					<select name="status">
						<option value="Pending" <?php if ($pi['status'] == "Pending") { echo "selected=\"selected\""; } ?>>Pending</option>
						<option value="Requirements Gathering" <?php if ($pi['status'] == "Requirements Gathering") { echo "selected=\"selected\""; } ?>>Requirements Gathering</option>
						<option value="Wireframe" <?php if ($pi['status'] == "Wireframe") { echo "selected=\"selected\""; } ?>>Wireframe</option>
						<option value="Awaiting Client Feedback" <?php if ($pi['status'] == "Awaiting Client Feedback") { echo "selected=\"selected\""; } ?>>Awaiting Client Feedback</option>
						<option value="Designing" <?php if ($pi['status'] == "Designing") { echo "selected=\"selected\""; } ?>>Designing</option>
						<option value="Building" <?php if ($pi['status'] == "Building") { echo "selected=\"selected\""; } ?>>Building</option>
						<option value="Completed" <?php if ($pi['status'] == "Completed") { echo "selected=\"selected\""; } ?>>Completed</option>
						<option value="Cancelled" <?php if ($pi['status'] == "Cancelled") { echo "selected=\"selected\""; } ?>>Cancelled</option>
					</select>
				</td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="save_project" value="Save" /></td>
			</tr>
		</table>
	</form>


	
	<?php
}

?>