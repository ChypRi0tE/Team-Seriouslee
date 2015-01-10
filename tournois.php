<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Tournois</title>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
	<h1>La Team SeriousLee en tournoi</h1>
	<section>
<?php $req = mysql_query('SELECT * FROM srs_videos WHERE type <> \'Ranked Team\' AND type <> \'Smurf\' ORDER BY date DESC, magic DESC, ID DESC');
//	echo "<div class=\"clear\">";
//	while ($data = mysql_fetch_assoc($req)) {
//		if ($name != $data['type'] || $num != $data['numero']) {echo "</div><div id=\"record\">";
//			echo "<h2>" .$data['type'] . " #" . $data['numero']. "</h2>";
//		}
//		echo "<a href=\"watch.php?ID=" . $data['ID']. "\" >Team SeriousLee vs " . $data['adversaire']. "</a><br />";
//		$name = $data['type'];
//		$num = $data['numero'];
//	}
//	echo "</div>";
?>
	Page en construction
	</section>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>