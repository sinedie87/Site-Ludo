<!-- FICHIER POUR GERER SUPPRESSION LIGNES CV -->
<?php

include "utilities/pdo.php";

/*Supprime les informations de la TABLE experiences */
$query_exp = $pdo->prepare("DELETE FROM experiences
	WHERE id = ?");

$idExp = $_GET["id"];

$query_exp->execute([$idExp]);

$query_exp->closeCursor();

/******************************************************************/

/*Supprime les informations de la TABLE competences */
$query_comp = $pdo->prepare("DELETE FROM competences
	WHERE id_comp = ?");

$idComp = $_GET["id_comp"];

$query_comp->execute([$idComp]);

$query_comp->closeCursor();

/******************************************************************/

/*Supprime les informations de la TABLE formations */
$query_form = $pdo->prepare("DELETE FROM formations
	WHERE id_form = ?");

$idForm = $_GET["id_form"];

$query_form->execute([$idForm]);

$query_form->closeCursor();

header("Location: admin.php");

?>