<?php



include "utilities/pdo.php";


$query = $pdo->prepare("SELECT * 
	FROM article");

$query->execute();

$articles = $query->fetchAll( PDO::FETCH_ASSOC );

$query->closeCursor();

var_dump($articles);





include "templates/header_tpl.php"; 

include "templates/cv_tpl.php";

?>