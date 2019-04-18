<!-- FICHIER POUR AJOUT NOUVEL ADMIN EN BDD (PAGE CACHEE) -->
<?php

session_start();

include "utilities/pdo.php";

/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST) && !empty($_POST["mail"]) && !empty($_POST["password"])){

	/* Variable de stockage infos saisies par utilisateur */
	$mail = $_POST["mail"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$query_users = $pdo->prepare("INSERT INTO users(mail, password)
			VALUES (?, ?)");

$query_users->execute([$mail, $password]);

$query_users->closeCursor();

};

include "templates/add_New_AdmiN_tpl.php";

?>