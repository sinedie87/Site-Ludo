<!-- FICHIER POUR MODIFIER UNE PUBLICATION EXISTANTE -->
<?php

session_start();

include "utilities/pdo.php";

$query = $pdo->prepare("SELECT * 
	FROM articles 
	WHERE id = ?");

$idArticle = $_GET["id"];

$query->execute([$idArticle]);

$article = $query->fetch(PDO::FETCH_ASSOC);

$query->closeCursor();

include "templates/edit_tpl.php";

?>