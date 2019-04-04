<?php



include "utilities/pdo.php";


$query = $pdo->prepare("SELECT * 
	FROM article");

$query->execute();

$articles = $query->fetchAll( PDO::FETCH_ASSOC );

$query->closeCursor();





include "templates/header_tpl.php"; 

include "templates/cv_tpl.php";

include "templates/footer_tpl.php";

?>