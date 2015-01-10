<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Vid&eacute;os</title>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
	<section id="videos">
	<h1>Toutes les vid&eacute;os</h1>
<?php	$requete='SELECT * FROM srs_videos ORDER BY date DESC, magic DESC, numero DESC';
	$req = mysql_query($requete);
	$n = 0;
	while ($data = mysql_fetch_assoc($req)) { 
		if ($data['link']) {
			$link = substr($data['link'], 32);
		?>
	<div class="frameVideo">
		<a href="watch.php?ID=<?php echo $data['ID']; ?>" >
		Team SeriousLee vs <?php echo $data['adversaire']; ?></a><hr />
		<div class="frameVideobot">
			<a href="watch.php?ID=<?php echo $data['ID']; ?>" >
			<img src="https://i1.ytimg.com/vi/<?php echo $link; ?>/0.jpg" />
			</a>
		</div>
		<div class="frameVideobot2" >
		<?php echo $data['type']. " #" .$data['numero']; ?><hr />
		Jou&eacute; le <?php echo date('j', strtotime($data['date'])); ?> <?php echo change_date(date('M', strtotime($data['date']))); ?>
		<hr />
			<?php $rep = mysql_query('SELECT * FROM srs_lineup WHERE id_game=' .$data['ID']);
				$lineup=mysql_fetch_assoc($rep);
			?>
		<img src="./images/icons/<?php echo $lineup['fred']; ?>.png" alt="<?php echo $lineup['fred']; ?>" style="width:15%;" title="<?php echo $lineup['fred']; ?>" />
		<img src="./images/icons/<?php echo $lineup['narmouk']; ?>.png" alt="<?php echo $lineup['narmouk']; ?>" style="width:15%;" title="<?php echo $lineup['narmouk']; ?>" />
		<img src="./images/icons/<?php echo $lineup['chokichoc']; ?>.png" alt="<?php echo $lineup['chokichoc']; ?>" style="width:15%;" title="<?php echo $lineup['chokichoc']; ?>" />
		<img src="./images/icons/<?php echo $lineup['pyoup']; ?>.png" alt="<?php echo $lineup['pyoup']; ?>" style="width:15%;" title="<?php echo $lineup['pyoup']; ?>" />
		<img src="./images/icons/<?php echo $lineup['chypriote']; ?>.png" alt="<?php echo $lineup['chypriote']; ?>" style="width:15%;" title="<?php echo $lineup['chypriote']; ?>" />
		<?php if ($data['replay'] != "") { echo "<a href=\"replays/". $data['replay']. "\"><img src=\"images/replay.png\" style=\"width: 15%\" title=\"T&eacute;l&eacute;charger le replay\" /></a>";} ?>
		</div>
	</div>
<?php	} $n++;
	} ?>
	<br />
	</section>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>