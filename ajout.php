<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/slider.css" type="text/css"  media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Ajouter une vidéo</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
	<script type="text/javascript" src="js/jquery.datepick.js"></script>
	<script type="text/javascript" src="js/jquery.datepick-fr.js"></script>
	<script type="text/javascript">
$(function() {
	$('#popupDatepicker').datepick({dateFormat: 'yyyy-mm-dd',useMouseWheel: false,showOtherMonths: true, prevText: '< M', todayText: 'M yyyy', nextText: 'M >', commandsAsDateFormat: true,changeMonth: false});
});
</script>
</head>
<body>
<?php include("include/header.php"); ?>
<?php 
	if (isset($_POST['sent']) && ($_POST['pass'] == "seriouslee") && (isset($_POST['adversaire']))) { 
		$type=htmlspecialchars($_POST['type']); 
		$numero=htmlspecialchars($_POST['numero']); 
		$adversaire=htmlspecialchars($_POST['adversaire']);
		if ($_POST['victory'] == "yes") {$victory = 1;} else {$victory = 0;}
		$date=htmlspecialchars($_POST['date']); 
		$link=htmlspecialchars($_POST['link']);
		$replay=htmlspecialchars($_POST['replay']);
		$fred=htmlspecialchars($_POST['fred']);
		$narmouk=htmlspecialchars($_POST['narmouk']);
		$chokichoc=htmlspecialchars($_POST['chokichoc']);
		$pyoup=htmlspecialchars($_POST['pyoup']);
		$chypriote=htmlspecialchars($_POST['chypriote']);
		$magic=htmlspecialchars($_POST['magic']);
		
		$requete='INSERT INTO srs_videos(type,
										numero,
										adversaire,
										victory,
										date,
										link, 
										replay,
										magic) 
						VALUES(\'' . $type .'\', \''
									.$numero . '\', \''
									.$adversaire. '\', \''
									.$victory. '\', \''
									.$date. '\', \''
									.$link. '\', \''
									.$replay. '\', \''
									.$magic. '\' )';
		mysql_query($requete);
		$requete = 'INSERT INTO srs_lineup(id_game,
										chypriote,
										pyoup,
										chokichoc,
										narmouk,
										fred)
							VALUES(\'' . mysql_insert_id() .'\', \''
									.$chypriote. '\', \''
									.$pyoup. '\', \''
									.$chokichoc. '\', \''
									.$narmouk. '\', \''
									.$fred. '\' )';
		mysql_query($requete);
	}
?>
	<div id="website">
	<section id="ajout">
	<h1>Ajouter un résultat </h1>
<?php	if (!isset($_POST['sent']) || ($_POST['pass'] != "seriouslee")) { 
		if (isset($_POST['pass']) && $_POST['pass'] != "seriouslee") {
			echo "<span style=\"color:red\">Mot de passe incorrect</span>";
		}
?>
		<form method=post action="ajout.php" id="add">
		<div style="width:45%;display:inline-block;vertical-align:top;">
			Type<br />
				<select name="type" id="type">
					<option value="Ranked Team">Ranked Team</option>
					<option value="Smurf">Smurf Team</option>
					<option value="GoFr4LoL">GoFr4LoL</option>
					<option value="ESL Pro Series">EPS</option>
					<option value="Finale GoFr">Gofr finale</option>
					<option value="HF.lan">HF lan</option>
					<option value="WAF lan">WAF lan</option>
					<option value="HelloWorld Cup">HelloWorld</option>
					<option value="ELT">Epitech</option>
				</select>
			<br />
			Numero<br />
				<input type=text name=numero /><br />
			Adversaire<br />
				<input type=text name=adversaire /><br />
			Date<br />
				<input type=text name=date id="popupDatepicker" /><br />
			Lien<br />
				<input type=text name=link style="width:90%" /><br />
			Replay<br />
				<input type=text name=replay style="width:90%" /><br />
			Victoire ?<br />	
				<input type="radio" name="victory" value="yes" id="yes" /><label for="yes">Oui</label>
				<input type="radio" name="victory" value="no" id="no" /><label for="no">Non</label>
		</div>
		<div style="width:45%;display:inline-block;vertical-align:top;">
			<h2>Line-up</h2>
				<div style="width:45%;display:inline-block;vertical-align:top;">
				Top<br />
					<input type=text name=fred /><br />
				Jungle<br />
					<input type=text name=narmouk /><br />
				Mid<br />
					<input type=text name=chokichoc /><br />
			</div>
			<div style="width:45%;display:inline-block;vertical-align:top;">
				AD Carry<br />
					<input type=text name=pyoup /><br />
				Support<br />
					<input type=text name=chypriote /><br />
			</div>
			<br /><br />
			Magic<br />
				<input type=text name=magic /><br />
		</div><br /><br />
		Mot de passe<br />
			<input type=password name=pass style="width: 20%" value=seriouslee /><br />
			<input type=submit value="Envoyer" name=sent />
	</form>
<?php } else { ?>
			Résultat enregistré !<br />
			<a href="ajout.php">Ajouter un autre résultat</a>
<?php } ?>
		
	
	</section>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>