<!-- FICHIER POUR GERER LE FORMULAIRE DE CONTACT -->
<?php 

session_start();

if($_POST && empty($_POST)){

	$sujet = "Prise de contact depuis le site WEB";

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$mail = $_POST["mail"];
	$message = $_POST["message"];

	$contenu = $prenom . " " . $nom . " " . "(" . $mail . ")" . " " . " vous a envoyé le message suivant : " . $message;

	$mail = mail("dovmailbox@gmail.com", $sujet, $contenu);

}

include "templates/contact_tpl.php";

?>