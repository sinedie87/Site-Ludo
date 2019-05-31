<!-- TEMPLATE POUR AJOUTER NOUVELLE LIGNE A LA PAGE CV -->

<!-- Header avec menu navigation -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<!-- RESPONSIVE DESIGN -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!-- FAVICON -->
	<link rel="icon" href="images/favicon.ico">
	<link rel="icon" type="image/png" href="images/logoLF.png">
	<title>Ludovic FAURE - Ajouter</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

	<main>

		<!-- Formulaire d'ajout EXPERIENCE -->
		<form action="" method="post" class="form_Admin">

			<h2>Expériences :</h2>
			
			<input type="date" name="date_start" required="required">

			<input type="date" name="date_end" required="required">

			<input type="text" name="titre" placeholder="Titre" required="required">

			<textarea name="contenu" cols="30" rows="10" placeholder="Contenu" required="required"></textarea>

			<p>Visibilité : Oui<input type="radio" name="visibilite" value="1" required="required" checked>Non<input type="radio" name="visibilite" value="0" required="required"></p>

			<input type="text" name="links" placeholder="Liens" required="required">

			<input type="submit" value="Valider"><!--<input type="reset" value="Effacer">-->

		</form>

		<!-- Formulaire d'ajout COMPETENCES -->
		<form action="" method="post" class="form_Admin">

			<h2>Compétences :</h2>

			<input type="text" name="titre_comp" placeholder="Titre" required="required">

			<textarea name="contenu_comp" cols="30" rows="10" placeholder="Contenu" required="required"></textarea>

			<p>Visibilité : Oui<input type="radio" name="visibilite" value="1" required="required" checked>Non<input type="radio" name="visibilite" value="0" required="required"></p>

			<input type="submit" value="Valider"><input type="reset" value="Effacer">

		</form>

		<!-- Formulaire d'ajout FORMATION -->
		<form action="" method="post" class="form_Admin">

			<h2>Formations :</h2>

			<input type="date" name="date_start_form" required="required">

			<input type="date" name="date_end_form" required="required">

			<textarea name="titre_form" cols="30" rows="10" placeholder="Titre" required="required"></textarea>

			<p>Visibilité : Oui<input type="radio" name="visibilite" value="1" required="required" checked>Non<input type="radio" name="visibilite" value="0" required="required"></p>

			<input type="submit" value="Valider"><input type="reset" value="Effacer">

		</form>
	</main>
	<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>

	<!-- Footer avec menu navigation -->


</body>
</html>