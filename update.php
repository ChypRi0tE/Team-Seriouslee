<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Vid&eacute;os</title>
</head>
<?php	$bdd = mysql_connect('localhost', 'root', 'root'); 
		mysql_select_db('easyelobsql', $bdd); ?>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
<?php
	mysql_query('DELETE FROM srs_stats');
// Création des arrays avec les champions  !!CODE DEGUELASSE
	$top = array();$jungle = array();$mid = array();$ad = array();$support = array();
	$req = mysql_query('SELECT * FROM srs_videos WHERE type <> \'Smurf\' AND type <> \'WAF lan\'');
	while ($data = mysql_fetch_assoc($req)) {
		$ref = mysql_query('SELECT * FROM srs_lineup WHERE id_game =' .$data['ID']);
		$lineup = mysql_fetch_assoc($ref);
		$top = add_to_array($top, $lineup['fred']);
		$jungle = add_to_array($jungle, $lineup['narmouk']);
		$mid = add_to_array($mid, $lineup['chokichoc']);
		$ad = add_to_array($ad, $lineup['pyoup']);
		$support = add_to_array($support, $lineup['chypriote']);
	}
?>
<?php 
// Ajout des tops
	foreach($top as $tops) {
		$games = mysql_query('SELECT * FROM srs_lineup WHERE fred=\'' .$tops. '\'');
		$nb = 0;
		$victory = 0;
		while ($test = mysql_fetch_assoc($games)) {
			$req = mysql_query('SELECT * FROM srs_videos WHERE ID=' .$test['id_game']);
			$data = mysql_fetch_assoc($req);
			if ($data['type'] != 'WAF lan' && $data['type'] != 'Smurf') {
			
				if ($data['victory'] == true) {$victory = $victory + 1;}
				$nb = $nb +1;
			}
		} 
		$requete = 'INSERT INTO srs_stats (position, champion, games, victoires, ratio) VALUES (\'top\', \''. $tops. '\', '.$nb.', '.$victory.', '. ($victory/$nb*100).')'; 
		mysql_query($requete);
		echo $requete .'<br />';
	} 
?>
<?php 
// Ajout des ads
	foreach($ad as $ads) {
		$games = mysql_query('SELECT * FROM srs_lineup WHERE pyoup=\'' .$ads. '\'');
		$nb = 0;
		$victory = 0;
		while ($test = mysql_fetch_assoc($games)) {
			$req = mysql_query('SELECT * FROM srs_videos WHERE ID=' .$test['id_game']);
			$data = mysql_fetch_assoc($req);
			if ($data['type'] != 'WAF lan' && $data['type'] != 'Smurf') {
				if ($data['victory'] == true) {$victory = $victory + 1;}
			$nb = $nb +1;
			}
		} 
		$requete = 'INSERT INTO srs_stats (position, champion, games, victoires, ratio) VALUES (\'ad\', \''. $ads. '\', '.$nb.', '.$victory.', '. ($victory/$nb*100).')'; 
		mysql_query($requete);
		echo $requete .'<br />';
	} 
?>
<?php 
// Ajout des mids
	foreach($mid as $mids) {
		$games = mysql_query('SELECT * FROM srs_lineup WHERE chokichoc=\'' .$mids. '\'');
		$nb = 0;
		$victory = 0;
		while ($test = mysql_fetch_assoc($games)) {
			$req = mysql_query('SELECT * FROM srs_videos WHERE ID=' .$test['id_game']);
			$data = mysql_fetch_assoc($req);
			if ($data['type'] != 'WAF lan' && $data['type'] != 'Smurf') {
				if ($data['victory'] == true) {$victory = $victory + 1;}
			$nb = $nb +1;
			}
		} 
		$requete = 'INSERT INTO srs_stats (position, champion, games, victoires, ratio) VALUES (\'mid\', \''. $mids. '\', '.$nb.', '.$victory.', '. ($victory/$nb*100).')';
		mysql_query($requete); 
		echo $requete .'<br />';
	} 
?>
<?php 
// Ajout des jungles
	foreach($jungle as $jungles) {
		$games = mysql_query('SELECT * FROM srs_lineup WHERE narmouk=\'' .$jungles. '\'');
		$nb = 0;
		$victory = 0;
		while ($test = mysql_fetch_assoc($games)) {
			$req = mysql_query('SELECT * FROM srs_videos WHERE ID=' .$test['id_game']);
			$data = mysql_fetch_assoc($req);
			if ($data['type'] != 'WAF lan' && $data['type'] != 'Smurf') {
				if ($data['victory'] == true) {$victory = $victory + 1;}
			$nb = $nb +1;
			}
		} 
		$requete = 'INSERT INTO srs_stats (position, champion, games, victoires, ratio) VALUES (\'jungle\', \''. $jungles. '\', '.$nb.', '.$victory.', '. ($victory/$nb*100).')';
		mysql_query($requete); 
		echo $requete .'<br />';
	} 
?>
<?php 
// Ajout des supports
	foreach($support as $supports) {
		$games = mysql_query('SELECT * FROM srs_lineup WHERE chypriote=\'' .$supports. '\'');
		$nb = 0;
		$victory = 0;
		while ($test = mysql_fetch_assoc($games)) {
			$req = mysql_query('SELECT * FROM srs_videos WHERE ID=' .$test['id_game']);
			$data = mysql_fetch_assoc($req);
			if ($data['type'] != 'WAF lan' && $data['type'] != 'Smurf') {
				if ($data['victory'] == true) {$victory = $victory + 1;}
			$nb = $nb +1;
			}
		} 
		$requete = 'INSERT INTO srs_stats (position, champion, games, victoires, ratio) VALUES (\'support\', \''. $supports. '\', '.$nb.', '.$victory.', '. ($victory/$nb*100).')'; 
		mysql_query($requete);
		echo $requete .'<br />';
	} 
?>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>