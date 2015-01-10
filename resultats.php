<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/slider.css" type="text/css"  media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Résultats</title>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
	<h1>Résultats</h1>
	<section id="resultats">
	Rendez vous sur <a href="tutoreplay.php">cette page</a> pour voir comment visionner les replays sur votre ordinateur.<br />
<!--	Filtres:<br />
		Type de partie:
		<select id="type">
			<option value="Toutes
			<option value="Ranked Team">Ranked Team</option>
			<option value="Smurf">Smurf</option>
		</select> -->
<?php if (!isset($_POST['filter']) || $_POST['filter'] == "") {
		include("include/res_unfiltered.php");
	}
?>

	</section>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>