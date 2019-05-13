<!-- FICHIER POUR AJOUT LIGNE CV EN BDD -->
<?php

session_start();

include "utilities/pdo.php";

/* Ajout en BDD des expériences /*
/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST) && !empty($_POST["titre"]) && !empty($_POST["contenu"]) && !empty($_POST["date_start"]) && !empty($_POST["date_end"]) && !empty($_POST["links"]) && !empty($_POST["visibilite"])){

	/* Variable de stockage infos saisies par utilisateur protégées
	contre XSS */
	$titre = htmlspecialchars($_POST["titre"]);
	$contenu = htmlspecialchars($_POST["contenu"]);
	$date_start = htmlspecialchars($_POST["date_start"]);
	$date_end = htmlspecialchars($_POST["date_end"]);
	$links = htmlspecialchars($_POST["links"]);
	$visibilite = $_POST["visibilite"];


	$query_exp = $pdo->prepare("INSERT INTO experiences(titre, contenu, date_start, date_end, links, visibilite)
		VALUES(?, ?, ?, ?, ?, ?)");

	$query_exp->execute([$titre, $contenu, $date_start, $date_end, $links, $visibilite]);

	$query_exp->closeCursor();

};

/******************************************************************/

/* Ajout en BDD des compétences */
/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST) && !empty($_POST["titre_comp"]) && !empty($_POST["contenu_comp"])){

	/* Variable de stockage infos saisies par utilisateur protégées
	contre XSS */
	$titre_comp = htmlspecialchars($_POST["titre_comp"]);
	$contenu_comp = htmlspecialchars($_POST["contenu_comp"]);

	$query_comp = $pdo->prepare("INSERT INTO competences(titre_comp, contenu_comp)
		VALUES(?, ?)");

	$query_comp->execute([$titre_comp, $contenu_comp]);

	$query_comp->closeCursor();

};

/******************************************************************/

/* Ajout en BDD des formations */
/* Condition pour éviter msg d'erreur quand champs non remplis */
if(isset($_POST) && !empty($_POST["date_start_form"]) && !empty($_POST["date_end_form"]) && !empty($_POST["titre_form"])){

	/* Variable de stockage infos saisies par utilisateur protégées
	contre XSS */
	$titre_form = htmlspecialchars($_POST["titre_form"]);
	$date_start_form = htmlspecialchars($_POST["date_start_form"]);
	$date_end_form = htmlspecialchars($_POST["date_end_form"]);


	$query_form = $pdo->prepare("INSERT INTO formations(titre_form, date_start_form, date_end_form)
		VALUES(?, ?, ?)");

	$query_form->execute([$titre_form, $date_start_form, $date_end_form]);

	$query_form->closeCursor();

};

include "templates/add_post_tpl.php";

?>