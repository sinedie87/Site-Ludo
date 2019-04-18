<!-- FICHIER POUR GERER SUPPRESSION LIGNES CV -->
<?php

include "utilities/pdo.php";

$query = $pdo->prepare("DELETE FROM articles
	WHERE id = ?");

$idArticle = $_GET["id"];

$query->execute([$idArticle]);

$query->closeCursor();

header("Location: admin.php");

?>