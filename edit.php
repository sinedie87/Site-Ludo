<!-- FICHIER POUR MODIFIER UNE PUBLICATION EXISTANTE -->
<?php

session_start();

include "utilities/pdo.php";

/*Récupére les informations de la TABLE experiences */
$query_exp = $pdo->prepare("SELECT * 
	FROM experiences 
	WHERE id = ?");

$idExp = $_GET["id"];

$query_exp->execute([$idExp]);

$experience = $query_exp->fetch(PDO::FETCH_ASSOC);

$query_exp->closeCursor();

/******************************************************************/

/* Récupére les informations de la TABLE compétences */
$query_comp = $pdo->prepare("SELECT *
	FROM competences
	WHERE id_comp = ?");

$idComp = $_GET["id_comp"];

$query_comp->execute([$idComp]);

$competence = $query_comp->fetch( PDO::FETCH_ASSOC );

$query_comp->closeCursor();

/******************************************************************/

/* Récupére les informations de la TABLE formations */
$query_form = $pdo->prepare("SELECT *
	FROM formations
	WHERE id_form = ?");

$idForm = $_GET["id_form"];

$query_form->execute([$idForm]);

$formation = $query_form->fetch( PDO::FETCH_ASSOC );

$query_form->closeCursor();

include "templates/edit_tpl.php";

?>