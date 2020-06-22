<?php
if(isset($_POST['valider'])) {
	if( (empty($_POST['nom'])) || (empty($_POST['email'])) || (empty($_POST['message'])) ) {
		echo '<div class="msg red">Merci de remplir tous les champs</div>';
	} else {
		$nom     = $_POST['nom'];
		$email   = $_POST['email'];
		$message = $_POST['message'];

		
		$destinaire = 'contact@kevinw.be';
		$sujet      = 'Message en provenance de votre site';
		/*$contenu    = "Vous avez reçu un nouveau message depuis votre site internet. \n";
		$contenu   .= "Nom: $nom \n";
		$contenu   .= "Email: $email \n";
		$contenu   .= "Message: $message \n";*/
		
		$contenu    = "
		
		Vous avez reçu un nouveau message depuis votre site internet.

		Nom: $nom
		
		Email: $email
		
		Message: $message";
	
		/*$header = 'From: '.$email. "\r\n" .
				   'Reply-To: '.$email. "\r\n" .
				   'X-Mailer:PHP/' .phpVersion();*/
		$header = "From: formulaire de contact";
		$header = "From: <contact@kevin.be>";
		
		mail($destinaire, $sujet, $contenu, $header);
		
		echo '<div class="msg green">Votre message a bien été envoyé</div>';
	}
}