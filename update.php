<!-- FICHIER POUR MODIFIER UNE PUBLICATION EXISTANTE -->
<?php

session_start();

include "utilities/pdo.php";

if(isset($_POST)){

	$titre = htmlspecialchars($_POST["titre"]);
	$contenu = htmlspecialchars($_POST["contenu"]);
	$date_start = htmlspecialchars($_POST["date_start"]);
	$date_end = htmlspecialchars($_POST["date_end"]);
	$links = htmlspecialchars($_POST["links"]);

$query = $pdo->prepare("UPDATE articles 
	SET titre = ?, contenu = ?, date_start = ?, date_end = ?, links = ? 
	WHERE id = ?");

$idArticle = $_GET["id"];

$query->execute(
	[$titre, $contenu, $date_start, $date_end, $links, $idArticle]
);

$query->closeCursor();

header("Location: admin.php");

}

include "templates/edit_tpl.php";

?>