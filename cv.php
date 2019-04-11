<?php

session_start();

include "utilities/pdo.php";

$query = $pdo->prepare("SELECT *, DATE_FORMAT(publish_date, '%M %Y') as publish_date 
	FROM articles
	ORDER BY publish_date DESC");

$query->execute();

$articles = $query->fetchAll( PDO::FETCH_ASSOC );
// var_dump($articles);

/*foreach ($articles as $date_article){
	$date = $date_article["publish_date"];
	// var_dump($date);

	$a = strstr($date, " ", true);
	// var_dump($a);

	$tab_months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
	$tab_mois = ["JANVIER", "FEVRIER", "MARS", "AVRIL", "MAI", "JUIN", "JUILLET", "AOUT", "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"];

	$new_date = str_replace($tab_months, $tab_mois, $a);
	// var_dump($new_date);
	$tab_new_date = array($new_date);
	// array_push($tab_new_date);
	var_dump($tab_new_date);
}
*/

$query->closeCursor();

include "templates/cv_tpl.php";

?>