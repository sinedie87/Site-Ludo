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
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<title>Ludovic FAURE - cascadeur</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

<main>

	<!-- Formulaire de MàJ -->
	<form action="update.php?id=<?= $article['id'] ?>" method="post" class="form_Admin">

		<fieldset>

			<legend>Modification <?= $article['titre'] ?></legend>

			<h2>Expériences :</h2>
		
				<input type="date" name="date_start" required="required" value="<?= $article['date_start'] ?>">

				<input type="date" name="date_end" required="required" value="<?= $article['date_end'] ?>">

				<input type="text" name="titre" required="required" value="<?= $article['titre'] ?>">

				<textarea name="contenu" cols="30" rows="10" required="required"><?= $article['contenu'] ?></textarea>

				<input type="text" name="links" value="<?= $article['links'] ?>">

				<input type="submit" value="Mettre à jour"><input type="reset" value="Effacer">

		</fieldset>

	</form>

	<form action="" method="post" class="form_Admin">

		<h2>Formations :</h2>
			
			<input type="date" name="publish_date" required="required">

			<input type="text" name="titre" required="required">

			<textarea name="contenu" cols="30" rows="10" required="required"></textarea>

			<input type="submit" value="Valider"><input type="reset" value="Effacer">

	</form>

</main>

<!-- Footer avec menu navigation -->
<?php include "templates/footer_tpl.php"; ?>

</body>
</html>