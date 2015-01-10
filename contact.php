<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Contact</title>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
		<section id="contact">
			<h1>Nous contacter</h1>	

<?php	// Si le formulaire a été envoyé, on inclut l'envoi de mail.
		// On met sent à true pour nettoyer les champs du formulaire
		if (!empty($_POST)) {include('include/envoimail.php'); } else {$sent = true;}?>
		<form action="" method="post">
		<fieldset>
				Vous pouvez nous contacter pour des questions concernant l'équipe, le stream, la chaîne Youtube, les partenariats et tout les autres types de demandes.<br />
				
				Nous répondons généralement dans la journée.<br />
			<label for="name" class="blocklabel">Pseudo</label>
			<p class="" ><input name="nom" class="input_bg" type="text" id="name" value="<?php if (isset($sent) && !$sent) {echo $_POST['nom'];} ?>" /></p>
			
			<label for="email" class="blocklabel">E-Mail</label>
			<p class="" ><input name="mail" class="input_bg" type="text" id="email" value="<?php if (isset($sent) && !$sent) {echo $_POST['mail'];} ?>" /></p>
					
			<label for="message" class="blocklabel">Message</label>
			<p class=""><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" value="<?php if (isset($sent) && !$sent) {echo $_POST['sujet'];} ?>" ></textarea></p>
			
			<p>
			<input type="hidden" id="myemail" name="myemail" value="chypriote@team-seriouslee.fr" />
			<div style="display:block;"></div>
			<input name="Send" type="submit" value="Envoyer" class="comment_submit" id="send"/></p>	
		</fieldset>
		</form>
		</section>
		<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>
</html>