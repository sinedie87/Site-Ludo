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
	<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<title>Ludovic FAURE - cascadeur</title>
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

			<input type="text" name="links">

			<input type="submit" value="Valider"><input type="reset" value="Effacer">

	</form>

	<!-- Formulaire d'ajout COMPETENCES -->
	<form action="" method="post" class="form_Admin">

		<h2>Compétences :</h2>

			<input type="text" name="titre_comp" placeholder="Titre" required="required">

			<textarea name="contenu_comp" cols="30" rows="10" placeholder="Contenu" required="required"></textarea>

			<input type="submit" value="Valider"><input type="reset" value="Effacer">

	</form>

	<!-- Formulaire d'ajout FORMATION -->
	<form action="" method="post" class="form_Admin">

		<h2>Formations :</h2>

			<input type="date" name="date_start_form" required="required">

			<input type="date" name="date_end_form" required="required">

			<input type="text" name="titre_form" placeholder="Titre" required="required">

			<input type="submit" value="Valider"><input type="reset" value="Effacer">

	</form>
</main>

<!-- Footer avec menu navigation -->
<?php include "templates/footer_tpl.php"; ?>

</body>
</html>