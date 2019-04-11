<?php 

session_start();

include "utilities/pdo.php";

$query = $pdo->prepare("SELECT * 
	FROM articles");

$query->execute();

$articles = $query->fetchAll( PDO::FETCH_ASSOC );

$query->closeCursor();

include "templates/index_tpl.php";

?>