<!-- FICHIER POUR MODIFIER UNE PUBLICATION EXISTANTE -->
<?php

session_start();

include "utilities/pdo.php";

/*MàJ des informations de la TABLE experiences */

/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST)){

	$titre = htmlspecialchars($_POST["titre"]);
	$contenu = htmlspecialchars($_POST["contenu"]);
	$date_start = htmlspecialchars($_POST["date_start"]);
	$date_end = htmlspecialchars($_POST["date_end"]);
	$links = htmlspecialchars($_POST["links"]);
	$visibilite = htmlspecialchars($_POST["visibilite"]);

	$query_exp = $pdo->prepare("UPDATE experiences 
		SET titre = ?, contenu = ?, date_start = ?, date_end = ?, links = ?, visibilite = ? 
		WHERE id = ?");

	$idExp = $_GET["id"];

	$query_exp->execute(
		[$titre, $contenu, $date_start, $date_end, $links, $visibilite, $idExp]
	);

	$query_exp->closeCursor();

	header("Location: admin.php");

}

/******************************************************************/

/*MàJ des informations de la TABLE competences */

/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST)){

	$titre_comp = htmlspecialchars($_POST["titre_comp"]);
	$contenu_comp = htmlspecialchars($_POST["contenu_comp"]);
	$visibilite = htmlspecialchars($_POST["visibilite"]);

	$query_comp = $pdo->prepare("UPDATE competences 
		SET titre_comp = ?, contenu_comp = ?, visibilite = ?
		WHERE id_comp = ?");

	$idComp = $_GET["id_comp"];

	$query_comp->execute(
		[$titre_comp, $contenu_comp, $visibilite, $idComp]
	);

	$query_comp->closeCursor();

	header("Location: admin.php");

}

/******************************************************************/

/*MàJ des informations de la TABLE formations */

/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST)){

	$titre_form = htmlspecialchars($_POST["titre_form"]);
	$date_start_form = htmlspecialchars($_POST["date_start_form"]);
	$date_end_form = htmlspecialchars($_POST["date_end_form"]);
	$visibilite = htmlspecialchars($_POST["visibilite"]);

	$query_form = $pdo->prepare("UPDATE formations 
		SET titre_form = ?, date_start_form = ?, date_end_form = ?, visibilite = ?
		WHERE id_form = ?");

	$idForm = $_GET["id_form"];

	$query_form->execute(
		[$titre_form, $date_start_form, $date_end_form, $visibilite, $idForm]
	);

	$query_form->closeCursor();

	header("Location: admin.php");

}

include "templates/edit_tpl.php";

?>