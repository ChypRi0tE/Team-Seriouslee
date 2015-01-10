<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Delete</title>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
		<section id="edit">
<?php if (isset($_GET['ID'])) {
$id = $_GET['ID'];
if (!isset($_POST['sent']) || ($_POST['pass'] != "seriouslee")) { 
		if (isset($_POST['pass']) && $_POST['pass'] != "seriouslee") {
			echo "<span style=\"color:red\">Mot de passe incorrect</span>";
		}
	$requete = 'SELECT * FROM srs_videos WHERE ID=' . $_GET['ID'];
	$req = mysql_query($requete);
	$data = mysql_fetch_assoc($req); 
?>
	<h1>Supprimer la vidéo ?</h1>
		<h2><?php echo $data['type']; ?> #<?php echo $data['numero']; ?>: Team SeriousLee vs <?php echo $data['adversaire'];?></h2>
	ID: <?php echo $data['ID']; ?><br />
	date: <?php echo $data['date']; ?><br />
	link: <?php echo $data['link']; ?><br />
	replay: <?php echo $data['replay']; ?><br />
<?php $requ = mysql_query('SELECT * FROM srs_lineup WHERE id_game='.$data['ID']); 
	$lineup= mysql_fetch_assoc($requ); ?>
	lineup: <?php echo $lineup['chypriote']; ?><br />
		<?php echo $lineup['pyoup']; ?><br />
		<?php echo $lineup['chokichoc']; ?><br />
		<?php echo $lineup['narmouk']; ?><br />
		<?php echo $lineup['fred']; ?><br />

	<form method=post action="delete.php?ID=<?php echo $id; ?>" id="dele">
		Mot de passe<br />
			<input type=password name=pass style="width: 20%" value=seriouslee /><br />
			<input type=submit value="Envoyer" name=sent />
	</form>
<?php } else {
	echo "Vid&eacute;o supprim&eacute;e !<br />
		<a href=\"edit.php\">Retour</a>";
	}
} else {
  header('Location: edit.php');
} ?>
		</section>
		<div class="clear"></div>
	</div>

<?php 
	if (isset($_POST['sent']) && ($_POST['pass'] == "seriouslee")) { 
		$requete=('DELETE FROM srs_videos
					WHERE ID=' .$id);
		mysql_query($requete);
		echo $requete;
		$requete=('DELETE FROM srs_lineup
					WHERE id_game=' .$id);
		mysql_query($requete);
		echo $requete;
	}
?>
<?php include("include/footer.php"); ?>
</body>
</html>