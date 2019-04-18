<!-- FICHIER POUR AJOUT LIGNE CV EN BDD -->
<?php

session_start();

include "utilities/pdo.php";

/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST) && !empty($_POST["titre"]) && !empty($_POST["contenu"]) && !empty($_POST["date_start"]) && !empty($_POST["date_end"]) && !empty($_POST["links"])){

	/* Variable de stockage infos saisies par utilisateur protégées
	contre XSS */
	$titre = htmlspecialchars($_POST["titre"]);
	$contenu = htmlspecialchars($_POST["contenu"]);
	$date_start = htmlspecialchars($_POST["date_start"]);
	$date_end = htmlspecialchars($_POST["date_end"]);
	$links = htmlspecialchars($_POST["links"]);

$query = $pdo->prepare("INSERT INTO articles(titre, contenu, date_start, date_end, links)
	VALUES(?, ?, ?, ?, ?)");

$query->execute([$titre, $contenu, $date_start, $date_end, $links]);

$query->closeCursor();

};

include "templates/add_post_tpl.php";

?>