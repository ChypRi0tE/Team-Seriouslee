<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Home</title>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
		<h1>Stats</h1><div style="text-align:center;">
<?php 	if (isset($_POST['sent']) && isset($_POST['choice'])) {$choice = $_POST['choice'];} else {$choice = 'games';} ?>
		<form method=post action="stats2.php" id="order">
			Trier par:
				<select name="choice">
					<option value="games">Parties jouées</option>
					<option value="victoires">Victoires</option>
					<option value="ratio">Ratio</option>
				</select>
				<input type=submit value="OK" name=sent />
		</form><br />
 	<section id="stats">
			<table>
				<thead>
					<th>Champion</th>
					<th>Position</th>
					<th>Parties jouées</th>
					<th>Victoires</th>
					<th>Ratio</th>
				</thead>
			<tbody>
<?php	$requete = 'SELECT * FROM srs_stats'; 
	if ($choice == 'ratio') {$requete .= ' WHERE games >= 5';}
	$requete .= ' ORDER BY '.$choice.' DESC, games DESC';
	$req = mysql_query($requete);
	while ($data = mysql_fetch_assoc($req)) {
			echo	"<tr>
							<td><img src=\"./images/icons/" .$data['champion'].".png\" alt=\"".$data['champion']."\" title=\"".$data['champion']."\" /></td>
							<td>".$data['position']."</td>
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
			}	?>	
			</tbody>
		</table>
		</section>
		</div>
		<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>
</html>