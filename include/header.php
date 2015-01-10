<header>
		<div id="logo">
			<a href="index.php" ><img src="images/logo2.png" style="width:100%; height:100%;" /></a>
		</div>
<!--		<div id="mainhead">
			<div id="annonce">
				<marquee  scrollamount=4" scrolldelay="80">
					La Team SeriousLee sera à la HF Lan #7 le 31 mai !
				</marquee>
			</div>-->
		</div>
		<div class="clear"></div>
</header>
<menu>
	<nav>
		<div id="menubox"><a href="/">Accueil</a></div>
<!--		<div id="menubox"><a href="news.php">News</a></div> -->
		<div id="menubox"><a href="team.php">Équipe</a></div>
<!--		<div id="menubox"><a href="tournois.php">Tournois</a></div>-->
		<div id="menubox"><a href="videos.php">Vidéos</a></div>
		<div id="menubox"><a href="stream.php">Stream</a></div>
		<div id="menubox"><a href="resultats.php">Résultats</a></div>
		<div id="menubox"><a href="contact.php">Contact</a></div>
	</nav>
</menu>
<?php	$bdd = mysql_connect('mysql51-110.perso', 'easyelobsql', '2BNG5tqTx6UH'); 
		mysql_select_db('easyelobsql', $bdd); ?>
<?php include("function.php"); ?>