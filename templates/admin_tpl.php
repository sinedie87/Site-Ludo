<!-- TEMPLATE PAGE ADMIN POUR GERER LES PUBLICATIONS DE PAGE CV -->

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
	<title>Ludovic FAURE - Admin</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

	<main>

		<h1 class="lienAdmin"><a href="add_post.php" class="lienAdmin">Ajout d'un article</a></h1>

		<section class="experience">

			<h2>Experiences</h2>

			<!-- Boucle pour afficher tous les titres des publications EXP/FOR -->
			<?php foreach ($experiences as $experience): ?>

				<h3><?= $experience['titre'] ?></h3>
				<a href="edit.php?id=<?= $experience['id'] ?> " class="lienAdmin">Modifier</a>
				<a href="delete.php?id=<?= $experience['id'] ?> " class="lienAdmin">Supprimer</a>
				
			<?php endforeach; ?>

		</section>

		<section class="competence">

			<h2>Compétences</h2>

			<!-- Boucle pour afficher tous les titres des publications EXP/FOR -->
			<?php foreach ($competences as $competence): ?>

				<h3><?= $competence['titre_comp'] ?></h3>
				<a href="edit.php?id_comp=<?= $competence['id_comp'] ?> " class="lienAdmin">Modifier</a>
				<a href="delete.php?id_comp=<?= $competence['id_comp'] ?> " class="lienAdmin">Supprimer</a>
				
			<?php endforeach; ?>

		</section>

		<section class="formation">

			<h2>Formations</h2>

			<!-- Boucle pour afficher tous les titres des publications EXP/FOR -->
			<?php foreach ($formations as $formation): ?>

				<h3><?= $formation['titre_form'] ?></h3>
				<a href="edit.php?id_form=<?= $formation['id_form'] ?> " class="lienAdmin">Modifier</a>
				<a href="delete.php?id_form=<?= $formation['id_form'] ?> " class="lienAdmin">Supprimer</a>
				
			<?php endforeach; ?>

		</section>

	</main>
	<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>

	<!-- Footer avec menu navigation -->


</body>
</html>