<?php function change_date($mois) {
	if (strcmp($mois, 'Apr') == 0) {return 'Avril';}
	if (strcmp($mois, 'May') == 0) {return 'Mai';}
	if (strcmp($mois, 'Mar') == 0) {return 'Mars';}
	if (strcmp($mois, 'Feb') == 0) {return 'Fevrier';}
	if (strcmp($mois, 'Jun') == 0) {return 'Juin';}
	return $mois;
	}
?>
<?php function add_to_array($array, $string) {
		$i = 0;
		$found = false;
		foreach($array as $prev) {
			if	(strcmp($prev, $string) == 0)
				$found = true;
		}
	if ($found != true) {array_push($array, $string);}
	return $array;
}
?>
<?php function table_stats($position, $choice) {
	if ($position == 'top') {$sql = 'top'; $title = 'Toplane';}
	if ($position == 'mid') {$sql = 'mid'; $title = 'Midlane';}
	if ($position == 'jung') {$sql = 'jungle'; $title = 'Jungle';}
	if ($position == 'ad') {$sql = 'ad'; $title = 'Carry Ad';}
	if ($position == 'sup') {$sql = 'support'; $title = 'Support';}
	
	echo "<section id=\"stats\">
		<h2>" .$title."</h2>
			<table>
				<thead>
					<th>Champion</th>
					<th>Parties jouées</th>
					<th>Victoires</th>
					<th>Ratio</th>
				</thead>
			<tbody>";
	$req = mysql_query('SELECT * FROM srs_stats WHERE position=\''. $sql.'\' ORDER BY '.$choice.' DESC');
	while ($data = mysql_fetch_assoc($req)) {
			echo	"<tr>
							<td><img src=\"./images/icons/" .$data['champion'].".png\" alt=\"".$data['champion']."\" title=\"".$data['champion']."\" /></td>
							<td>".$data['games']."</td>
							<td>".$data['victoires']."</td>
							<td>";
					if ($data['ratio'] >= 75 && $data['games'] >= 5) {
								echo "<span style=\"color: green\">". $data['ratio'] . "%</span>";
								} else if ($data['ratio'] <= 50 && $data['games'] >= 5) {
								echo "<span style=\"color: red\">". $data['ratio'] . "%</span>";
								} else {
								echo "" .$data['ratio'] . "%";
								}
					echo	"</td>
						</tr>";
			}		
	echo	"</tbody>
		</table>
		</section>";
	}
?>