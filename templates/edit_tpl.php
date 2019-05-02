<!-- TEMPLATE POUR MODIFIER UNE PUBLICATION EXISTANTE -->

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
<!-- RESPONSIVE DESIGN -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Ludovic FAURE - Editer</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

<main>

	<?php if(!empty($_GET['id'])): ?>
	<!-- Formulaire de MàJ -->
	<form action="update.php?id=<?= $experience['id'] ?>" method="post" class="form_Admin">

		<fieldset>

			<legend>Modification <?= $experience['titre'] ?></legend>

			<h2>Expériences :</h2>
		
				<input type="date" name="date_start" required="required" value="<?= $experience['date_start'] ?>">

				<input type="date" name="date_end" required="required" value="<?= $experience['date_end'] ?>">

				<input type="text" name="titre" required="required" value="<?= $experience['titre'] ?>">

				<textarea name="contenu" cols="30" rows="10" required="required"><?= $experience['contenu'] ?></textarea>

				<input type="text" name="links" value="<?= $experience['links'] ?>">

				<input type="submit" value="Mettre à jour"><input type="reset" value="Effacer">

		</fieldset>

	</form>
	
	<?php elseif(!empty($_GET['id_comp'])): ?>

	<form action="update.php?id_comp=<?= $competence['id_comp'] ?>" method="post" class="form_Admin">

		<fieldset>

			<legend>Modification <?= $competence['titre_comp'] ?></legend>

			<h2>Compétences :</h2>

				<input type="text" name="titre_comp" required="required" value="<?= $competence['titre_comp'] ?>">

				<textarea name="contenu_comp" cols="30" rows="10" required="required"><?= $competence['contenu_comp'] ?></textarea>

				<input type="submit" value="Mettre à jour"><input type="reset" value="Effacer">

			</fieldset>

	</form>

	<?php elseif(!empty($_GET['id_form'])): ?>

	<form action="update.php?id_form=<?= $formation['id_form'] ?>" method="post" class="form_Admin">

		<fieldset>

			<legend>Modification <?= $formation['titre_form'] ?></legend>

			<h2>Formations :</h2>

				<input type="date" name="date_start_form" required="required" value="<?= $formation['date_start_form'] ?>">

				<input type="date" name="date_end_form" required="required" value="<?= $formation['date_end_form'] ?>">

				<textarea name="titre_form" required="required"><?= $formation['titre_form'] ?></textarea>

				<input type="submit" value="Mettre à jour"><input type="reset" value="Effacer">

		</fieldset>
		
	</form>

	<?php endif; ?>

</main>
<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>

<!-- Footer avec menu navigation -->


</body>
</html>