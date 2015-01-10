<div style="margin-bottom: 2%; font-size:4vh; color: red; text-align:center">
<?php	$sent =false;
	// Vérification coté serveur que les champs sont remplis
			if (empty($_POST['nom']) || empty($_POST['message']) || empty($_POST['mail'])) { ?>
		Erreur: vous devez remplir tous les champs du formulaire.
<?php		} else {
	//*********************************//
	//**********Envoi du mail**********//
	//*********************************//
	
				$sujet='Message de ' . $_POST['nom'] . ': ' .$_POST['sujet'];
				$message=$_POST['message'] . "\n Adresse de contact:" . $_POST['mail'];
				$sent=mail('chypriote@team-seriouslee.fr', $sujet, $message);
	// Si pas d'erreur, on affiche une confirmation
				if ($sent) { ?>
		Votre message a bien &eacute;t&eacute; envoy&eacute; !
<?php 			} else { 
	// Sinon, message d'erreur ?>
<?php			}
			}  ?>
			</div>