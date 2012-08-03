<h4>Our Projects</h4>
<table cellspacing="0" class="clickable">
	<tr>
		<th>Title</th>
		<th>Status</th>
		<th>Client</th>
	</tr>
	<?php 

		$projects = mysql_query("SELECT * FROM `projects` ORDER BY ID DESC");
		while ($p = mysql_fetch_array($projects)){
			$client_search = mysql_query("SELECT * FROM `clients` WHERE `id`='".$p['client_id']."' LIMIT 1");
			$c = mysql_fetch_array($client_search);
			?>

			<tr onclick="document.location.href = '/project.php?id=<?php echo $p['id']; ?>'">
				<td><?php echo $p['title']; ?></td>
				<td><?php echo $p['status']; ?></td>
				<td><?php echo $c['company'] . " (".$c['contact'].")"; ?></td>
			</tr>

			<?php
		}

	?>

</table>