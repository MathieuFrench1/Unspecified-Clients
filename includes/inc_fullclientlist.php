<h4>Our Clients</h4>
<p><a href="/add_client.php">Add Client</a></p>
<table cellspacing="0" class="clickable">
	<tr>
		<th>Company</th>
		<th>Contact</th>
		<th>Email</th>
		<th>Phone</th>
	</tr>
	<?php 

		$clients = mysql_query("SELECT * FROM `clients` ORDER BY ID DESC");
		while ($c = mysql_fetch_array($clients)){
			?>

			<tr onclick="document.location.href = '/client.php?id=<?php echo $c['id']; ?>'" <?php if ($c['active'] == 0){ echo "class=\"inactive\""; } ?>>
				<td><?php if ($c['company'] != ""){ echo $c['company']; } else { echo "n/a"; } ?></td>
				<td><?php echo $c['contact']; ?></td>
				<td><?php echo $c['email']; ?></td>
				<td><?php echo $c['phone']; ?></td>
			</tr>

			<?php
		}

	?>

</table>