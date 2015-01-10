<table>
	<thead>
		<th>Type</th>
		<th>Num</th>
		<th>Adversaire</th>
		<th>Date</th>
		<th>Lien?</th>
		<th>Replay?</th>
		<th>Magic</th>
		<th>Editer</th>
		<th>Supprimer</th>
	</thead>
<?php
	$requete = 'SELECT * FROM srs_videos ORDER BY date DESC, magic DESC, numero DESC';
	$req = mysql_query($requete);
	while ($data = mysql_fetch_assoc($req)) {
?>
	<tr>
		<td><?php echo $data['type']; ?></td>
		<td><?php echo $data['numero']; ?></td>
		<td><?php echo $data['adversaire']; ?></td>
		<td><?php echo $data['date']; ?></td>
		<td><?php if ($data['link'] != "") {echo "oui";} else {echo "<span style=\"color:red\">non</span>";} ?></td>
		<td><?php if ($data['replay'] != "") {echo "oui";} else {echo "non";} ?></td>
		<td><?php if ($data['magic'] != 0) {echo "<strong>".$data['magic']."</strong>";} else {echo $data['magic'];} ?></td>
		<td><a href="edit.php?ID=<?php echo $data['ID']; ?>">edit</a></td>
		<td><a href="delete.php?ID=<?php echo $data['ID']; ?>">delete</a></td>
	</tr>
<?php } ?>
</table>