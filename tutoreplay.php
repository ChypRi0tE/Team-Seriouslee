<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/slider.css" type="text/css"  media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Comment regarder les replays ?</title>
	<script src="../apis.google.com/js/platform.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.html"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
	<section>
	<h1>Comment regarder les replays de nos parties ?</h1>
	<ul id ="tuto">
		<li>Téléchargez <a href="http://ahri.tw/BaronReplays/GetLatest/" />BaronReplays</a>.</li>
		<li>Installez et lancez le logiciel </li>
		<li>Dans le menu, cliquez sur Functions > Settings</li>
		<li>Dans le volet de droite, cliquez sur <strong>"Choose"</strong> sur la ligne <strong>League of Legends.exe</strong></li>
		<li>Sélectionnez le dossier contenant l'exécutable <strong>League of Legends.exe</strong>. Le chemin devrait ressembler à:<br />
			<span style="margin-left:5%;font-style:italic;font-size:18px;color:#999999">C:\Riot Games\League of legends\RADS\solutions\lol_game_client_sln\releases\0.0.1.XX\deploy\League of Lege nds.exe</span></li>
		<li>Sur la ligne d'en dessous, sélectionnez le dossier dans lequel vous souhaitez enregistrer les replays</li>
	</ul>
	<ul id="tuto">
		Une fois ces manipulations effectuées, vous pouvez télécharger les replays sur la <a href="replays.php" style="text-decoration:none;">page de téléchargement</a>, et les placer dans le dossier que vous avez au préalable séléctionné. Lancez ensuite <strong>BaronReplays</strong> et cliquez sur "Watch" pour observer la partie séléctionnée.
	</ul>
	<h1>Un probleme/bug splat ?</h1>
	<ul id="tuto">Malheureusement, le programme est encore en phase de développement et peut donc crasher ou refuser de lire un replay.
	<li>Si au lancement d'un replay le client se ferme et affiche la fenêtre de bug splat, il vous faudra lancer une partie de League of Legends avant de pouvoir lancer le replay (10 secondes dans une partie personalisée avec un bot suffisent)</li>
	<li>Si le programme affiche une erreur au moment du lancement d'un replay, il se peut que celui-ci soit corrompu et illisible. Essayez de le retélécharger. Ce problème peut aussi apparaître si le replay a été enregistré par une version différente du programme. Dans ce cas-là, le replay ne pourra pas être regardé.</li>
	<li>Si rien ne fonctionne, essayez de désinstaller puis réinstaller le programme. Si celà ne fonctionne toujours pas, redémarrez votre ordinateur et réessayez.</li>
	</ul><br />
	</section>
	<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>