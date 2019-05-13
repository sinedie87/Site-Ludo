<!-- FICHIER POUR GERER LE FORMULAIRE DE CONTACT -->
<?php 

session_start();

if($_POST && !empty($_POST)){

	$sujet = "Prise de contact depuis le site WEB";
	$to = "contact@ludovicfaure.com";

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$mail = $_POST["mail"];
	$message = $_POST["message"];

	$headers  = "MIME-Version: 1.0 \n";
	$headers .= "Content-type: text/html; charset=UTF-8 \n";
	$headers .= "From: $mail  \n";
	$headers .= "Disposition-Notification-To: $mail  \n";

	$contenu = $prenom . " " . $nom . " " . "(" . $mail . ")" . " " . " vous a envoyé le message suivant : " . $message;

	$envoiMail = true;
	$envoiMail = mail($to, $sujet, $contenu, $headers);

	if($envoiMail){

		echo "<p class='echo'> Votre message a bien été envoyé </p>";
	} else{

		echo "<p class='echo'> Une erreur est survenue. Vueillez réessayer s'il vous plaît </p>";
	}

}

include "templates/contact_tpl.php";

?>