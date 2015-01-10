<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Vid&eacute;os</title>
</head>
<body>
<?php	$bdd = mysql_connect('localhost', 'root', 'root'); 
		mysql_select_db('easyelobsql', $bdd); ?>
<?php include("include/header.php"); ?>
	<div id="website">
	<section id="watch">
<?php if (isset($_GET["ID"])) {
	$requete = 'SELECT * FROM srs_videos WHERE ID=' . $_GET["ID"];
	$req = mysql_query($requete);
	$data = mysql_fetch_assoc($req); 
	$link = substr($data['link'], 32);
	?>
<?php $requete = 'SELECT * FROM srs_lineup WHERE id_game=' . $_GET['ID'];
	$ref = mysql_query($requete);
	$lineup = mysql_fetch_assoc($ref);
?>
	<h1><?php echo $data['type']; ?> #<?php echo $data['numero']; ?>: Team SeriousLee vs <?php echo $data['adversaire'];?></h1>
		<img src="./images/icons/<?php echo $lineup['fred']; ?>.png" alt="<?php echo $lineup['fred']; ?>" title="<?php echo $lineup['fred']; ?>" />
		<img src="./images/icons/<?php echo $lineup['narmouk']; ?>.png" alt="<?php echo $lineup['narmouk']; ?>" title="<?php echo $lineup['narmouk']; ?>" />
		<img src="./images/icons/<?php echo $lineup['chokichoc']; ?>.png" alt="<?php echo $lineup['chokichoc']; ?>" title="<?php echo $lineup['chokichoc']; ?>" />
		<img src="./images/icons/<?php echo $lineup['pyoup']; ?>.png" alt="<?php echo $lineup['pyoup']; ?>" title="<?php echo $lineup['pyoup']; ?>" />
		<img src="./images/icons/<?php echo $lineup['chypriote']; ?>.png" alt="<?php echo $lineup['chypriote']; ?>" title="<?php echo $lineup['chypriote']; ?>" />
		<span class="date">Jou&eacute; le <?php echo $data['date']; ?></span>
		<br /><br />
		<div class="player">
<?php if ($data['link'] != "") { ?>
		<object width="90%" height="85%">
			<param name="movie" value="//www.youtube.com/v/<?php echo $link;?>?version=3&amp;hl=fr_FR">
			</param><param name="allowFullScreen" value="true"></param>
			<param name="allowscriptaccess" value="always"></param>
			<embed src="http://www.youtube.com/v/<?php echo $link; ?>?version=3&amp;hl=fr_FR" type="application/x-shockwave-flash" width="90%" height="85%" allowscriptaccess="always" allowfullscreen="true"></embed>
		</object>
<?php } else { ?>
	<div style="margin-top:10%;margin-bottom:10%;">Pas de vid&eacute;o disponible</div>
<?php } ?>
		</div>
	<br />
	<br />
<?php } ?>
<?php if ($data['replay'] != "") { ?>
	<div class="replay">
		<a href="replays/<?php echo $data['replay']; ?>">T&eacute;l&eacute;charger le replay</a>
	</div>
<?php } ?>
	<div class="goback">
		<a href="videos.php">Retour aux vid&eacute;os</a>
	</div>
	</section>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>