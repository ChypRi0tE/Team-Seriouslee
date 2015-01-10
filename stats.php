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
<?php if (isset($_POST['sent']) && isset($_POST['choice'])) {$choice = $_POST['choice'];} else {$choice = 'games';} ?>
		<form method=post action="stats.php" id="order">
			Trier par:
				<select name="choice">
					<option value="games" selected>Parties jouées</option>
					<option value="victoires">Victoires</option>
					<option value="ratio">Ratio</option>
				</select>
				<input type=submit value="OK" name=sent />
		</form><br />
<?php	$pos = array('top', 'jung', 'mid', 'ad', 'sup');
	foreach ($pos as $p) {table_stats($p, $choice);}
?>
		</div>
		<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>
</html>