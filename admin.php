<!-- FICHIER POUR AFFICHER TABLE ARTICLES SUR TEMPLATE ADMIN -->
<?php

session_start();

include "utilities/pdo.php";

$query = $pdo->prepare("SELECT *
	FROM articles
	ORDER BY date_end DESC");

$query->execute();

$articles = $query->fetchAll(PDO::FETCH_ASSOC);

$query->closeCursor();

include "templates/admin_tpl.php";

?>