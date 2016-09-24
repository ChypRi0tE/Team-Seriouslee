<?php $id = $_GET['ID']; 
	$requete = 'SELECT * FROM srs_videos WHERE ID=' .$id;
	$req = mysqli_query($bdd, $requete);
	$data = mysqli_fetch_assoc($req);
?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
	<script type="text/javascript" src="js/jquery.datepick.js"></script>
	<script type="text/javascript" src="js/jquery.datepick-fr.js"></script>
	<script type="text/javascript">
$(function() {
	$('#popupDatepicker').datepick({dateFormat: 'yyyy-mm-dd',useMouseWheel: false,showOtherMonths: true, prevText: '< M', todayText: 'M yyyy', nextText: 'M >', commandsAsDateFormat: true,changeMonth: false});
});
	</script>
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
		$requete=('UPDATE srs_videos
					SET type=\'' .$type. '\',
						numero=\'' .$numero. '\',
						adversaire=\'' .$adversaire. '\',
						victory=\'' .$victory. '\',
						date=\'' .$date. '\',
						link=\'' .$link. '\',
						replay=\'' .$replay. '\',
						magic=\'' .$magic. '\'
					WHERE ID=' .$id);
		mysqli_query($bdd, $requete);
		$requete=('UPDATE srs_lineup
					SET chypriote=\'' .$chypriote. '\',
						pyoup=\'' .$pyoup. '\',
						chokichoc=\'' .$chokichoc. '\',
						narmouk=\'' .$narmouk. '\',
						fred=\'' .$fred. '\'
					WHERE id_game=' .$id);
		mysqli_query($bdd, $requete);
	}
?>
<h1>Editez la vid&eacute;o <?php echo "#".$id; ?></h1>
<?php	if (!isset($_POST['sent']) || ($_POST['pass'] != "seriouslee")) { 
		if (isset($_POST['pass']) && $_POST['pass'] != "seriouslee") {
			echo "<span style=\"color:red\">Mot de passe incorrect</span>";
		}
?>
	<form method=post action="edit.php?ID=<?php echo $id; ?>" id="edit">
		<div style="width:45%;display:inline-block;vertical-align:top;">
			Type<br />
				<select name="type" id="type">
					<option value="Ranked Team" <?php if ($data['type'] == "Ranked Team") {echo "selected";} ?>>Ranked Team</option>
					<option value="Smurf" <?php if ($data['type'] == "Smurf") {echo "selected";} ?>>Smurf Team</option>
					<option value="GoFr4LoL" <?php if ($data['type'] == "GoFr4LoL") {echo "selected";} ?>>GoFr4LoL</option>
					<option value="Finale GoFr" <?php if ($data['type'] == "Finale GoFr") {echo "selected";} ?>>Gofr finale</option>
					<option value="ESL Pro Series" <?php if ($data['type'] == "ESL Pro Series") {echo "selected";} ?>>EPS</option>
					<option value="HF.lan" <?php if ($data['type'] == "HF.lan") {echo "selected";} ?>>HF lan</option>
					<option value="WAF lan" <?php if ($data['type'] == "WAF lan") {echo "selected";} ?>>WAF lan</option>
					<option value="HelloWorld Cup" <?php if ($data['type'] == "HelloWorld Cup") {echo "selected";} ?>>HelloWorld</option>
					<option value="ELT" <?php if ($data['type'] == "ELT") {echo "selected";} ?>>Epitech</option>
				</select>
			<br />
			Numero<br />
				<input type=text name=numero value="<?php echo $data['numero']; ?>" /><br />
			Adversaire<br />
				<input type=text name=adversaire value="<?php echo $data['adversaire']; ?>" /><br />
			Date<br />
				<input type=text name=date id="popupDatepicker" value="<?php echo $data['date']; ?>" /><br />
			Lien<br />
				<input type=text name=link value="<?php echo $data['link']; ?>" style="width:90%" /><br />
			Replay<br />
				<input type=text name=replay value="<?php echo $data['replay']; ?>" style="width:90%" /><br />
			Victoire ?<br />	
				<input type="radio" name="victory" value="yes" id="yes" <?php if ($data['victory']) {echo "checked";} ?>/><label for="yes">Oui</label>
				<input type="radio" name="victory" value="no" id="no" <?php if (!$data['victory']) {echo "checked";} ?> /><label for="no">Non</label>
		</div>
<?php $ask = mysql_query('SELECT * FROM srs_lineup WHERE id_game='.$data['ID']);
	$lineup = mysql_fetch_assoc($ask); ?>
		<div style="width:45%;display:inline-block;vertical-align:top;">
			<span style="font-size:2.5vw">Line-up</span><br />
				<div style="width:45%;display:inline-block;vertical-align:top;">
				Top<br />
					<input type=text name=fred value="<?php echo $lineup['fred']; ?>" /><br />
				Jungle<br />
					<input type=text name=narmouk value="<?php echo $lineup['narmouk']; ?>" /><br />
				Mid<br />
					<input type=text name=chokichoc value="<?php echo $lineup['chokichoc']; ?>" /><br />
			</div>
			<div style="width:45%;display:inline-block;vertical-align:top;">
				AD Carry<br />
					<input type=text name=pyoup value="<?php echo $lineup['pyoup']; ?>" /><br />
				Support<br />
					<input type=text name=chypriote value="<?php echo $lineup['chypriote']; ?>" /><br />
			</div>
			<br /><br />
			Magic<br />
				<input type=text name=magic value="<?php echo $data['magic']; ?>" /><br />
		</div><br /><br /><br />
		Mot de passe<br />
			<input type=password name=pass style="width: 20%" value=seriouslee /><br />
			<input type=submit value="Envoyer" name=sent />
	</form>
<?php }  else { ?>
		R&eacute;sultat enregistr&eacute; !<br />
		<a href="edit.php">Retour aux edit</a> ou &agrave; la <a href="watch.php?ID=<?php echo $id; ?>">vid&eacute;o</a>
<?php } ?>
