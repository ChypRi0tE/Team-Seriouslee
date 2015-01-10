<?php $reponse = mysql_query('SELECT * FROM srs_videos WHERE adversaire <> \'\' ORDER BY date DESC, magic DESC, numero DESC'); ?>
		<table id="replays">	
			<thead><tr>
				<th>Type</th>
				<th>N°</th>
				<th style="width:35%;">Adversaire</th>
				<th style="width:25%">Line-up</th>
				<th>Date</th>
				<th>Médias</th>
			</tr></thead>
			<tbody>
<?php while ($data = mysql_fetch_assoc($reponse)) { ?>
			<tr>
				<td><?php echo $data['type']; ?></td>
				<td><?php echo $data['numero']; ?></td>
				<td><a href="watch.php?ID=<?php echo $data['ID']; ?>"><?php echo $data['adversaire']; ?></a></td>
				<td>
	<?php 	$test = mysql_query('SELECT * FROM srs_lineup WHERE id_game=\'' .$data['ID']. '\'');
			$lineup = mysql_fetch_assoc($test); ?>
					<img src="./images/icons/<?php echo $lineup['fred']; ?>.png" alt="<?php echo $lineup['fred']; ?>" title="<?php echo $lineup['fred']; ?>" />
					<img src="./images/icons/<?php echo $lineup['narmouk']; ?>.png" alt="<?php echo $lineup['narmouk']; ?>" title="<?php echo $lineup['narmouk']; ?>" />
					<img src="./images/icons/<?php echo $lineup['chokichoc']; ?>.png" alt="<?php echo $lineup['chokichoc']; ?>" title="<?php echo $lineup['chokichoc']; ?>" />
					<img src="./images/icons/<?php echo $lineup['pyoup']; ?>.png" alt="<?php echo $lineup['pyoup']; ?>" title="<?php echo $lineup['pyoup']; ?>" />
					<img src="./images/icons/<?php echo $lineup['chypriote']; ?>.png" alt="<?php echo $lineup['chypriote']; ?>" title="<?php echo $lineup['chypriote']; ?>" />
				</td>
				<td><?php echo date('j', strtotime($data['date'])); ?> <?php echo change_date(date('M', strtotime($data['date']))); ?></td>
				<td class="media">
					<?php 
					if ($data['link'] != "") {echo "<img src=\"images/video.png\" title=\"Video disponible\" />"; }
					if ($data['replay'] != "") { echo "<a href=\"replays/". $data['replay']. "\"><img src=\"images/replay.png\" title=\"T&eacute;l&eacute;charger le replay\" /></a>"; }
					?>
				</td>
			</tr>
<?php } ?>
			</tbody>
		</table>