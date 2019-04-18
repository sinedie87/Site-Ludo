<!-- FICHIER POUR GERER AFFICHAGE TABLE ARTICLES SUR PAGE CV -->
<?php

session_start();

include "utilities/pdo.php";

$query = $pdo->prepare("SELECT *, DATE_FORMAT(date_start, '%M %Y') as date_start, DATE_FORMAT(date_end, '%M %Y') as dates
	FROM articles
	ORDER BY date_end DESC");

$query->execute();

$articles = $query->fetchAll( PDO::FETCH_ASSOC );

/*Code pour afficher les mois en français vs anglais via le serveur (remplace le Set Local Time de MySQL dans le fichier pdo.php)

	$tab_mois = ["JANVIER", "FEVRIER", "MARS", "AVRIL", "MAI", "JUIN", "JUILLET", "AOUT", "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"];
	$tab_months_numbers = [];

foreach ($articles as $date_article){
	$date = $date_article["date_start"];

	$months_numbers = substr($date, 0, 2);

	array_push($tab_months_numbers, $months_numbers);
}
*/

$query->closeCursor();

include "templates/cv_tpl.php";

?>