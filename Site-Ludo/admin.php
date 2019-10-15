<!-- FICHIER POUR AFFICHER TABLE ARTICLES SUR TEMPLATE ADMIN -->
<?php

session_start();

include "utilities/pdo.php";

if($_SESSION["connected"] = true && $_SESSION["status"] === "admin"){

	/*Récupére les informations de la TABLE experiences */
	$query_exp = $pdo->prepare("SELECT *
		FROM experiences
		ORDER BY date_end DESC");

	$query_exp->execute();

	$experiences = $query_exp->fetchAll(PDO::FETCH_ASSOC);

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
	$query_form = $pdo->prepare("SELECT *
		FROM formations
		ORDER BY date_end_form DESC");

	$query_form->execute();

	$formations = $query_form->fetchAll( PDO::FETCH_ASSOC );

	$query_form->closeCursor();
}

else{

	header("Location: forbidden.php");
  // header ("refresh: 5; URL=http://www.ludovicfaure.com/");


}

include "templates/admin_tpl.php";

?>