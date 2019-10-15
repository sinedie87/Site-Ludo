<!-- FICHIER POUR GERER AFFICHAGE TABLE experiences SUR PAGE CV -->
<?php

session_start();

include "utilities/pdo.php";

/*Récupére les informations de la TABLE experiences */
$query_exp = $pdo->prepare("SELECT *, DATE_FORMAT(date_start, '%M %Y') as date_start, DATE_FORMAT(date_end, '%M %Y') as dates
	FROM experiences
	ORDER BY date_end DESC");

$query_exp->execute();

$experiences = $query_exp->fetchAll( PDO::FETCH_ASSOC );

/*Code pour afficher les mois en français vs anglais via le serveur (remplace le Set Local Time de MySQL dans le fichier pdo.php)

	$tab_mois = ["JANVIER", "FEVRIER", "MARS", "AVRIL", "MAI", "JUIN", "JUILLET", "AOUT", "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"];
	$tab_months_numbers = [];

foreach ($experiences as $date_article){
	$date = $date_article["date_start"];

	$months_numbers = substr($date, 0, 2);

	array_push($tab_months_numbers, $months_numbers);
}
*/

$query_exp->closeCursor();

/******************************************************************/

/* Récupére les informations de la TABLE compétences */
$query_comp = $pdo->prepare("SELECT *
	FROM competences
	ORDER BY titre_comp ASC");

$query_comp->execute();

$competences = $query_comp->fetchAll( PDO::FETCH_ASSOC );

$query_comp->closeCursor();

/******************************************************************/

/* Récupére les informations de la TABLE formations */
$query_form = $pdo->prepare("SELECT *, DATE_FORMAT(date_start_form, ' %Y') as date_start_form, DATE_FORMAT(date_end_form, '%Y') as dates_form
	FROM formations
	ORDER BY date_end_form DESC");

$query_form->execute();

$formations = $query_form->fetchAll( PDO::FETCH_ASSOC );

$query_form->closeCursor();

include "templates/cv_tpl.php";

?>