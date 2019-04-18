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
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<title>Ludovic FAURE - cascadeur</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

<main>

	<h1><a href="add_post.php">Ajout d'un article</a></h1>

	<!-- Boucle pour afficher tous les titres des publications EXP/FOR -->
	<?php foreach ($articles as $article): ?>

		<h3 class="titleExp"><?= $article['titre'] ?></h3>
		<a href="edit.php?id=<?= $article['id'] ?> ">Modifier</a>
		<a href="delete.php?id=<?= $article['id'] ?> ">Supprimer</a>
		
	<?php endforeach; ?>

</main>

<!-- Footer avec menu navigation -->
<?php include "templates/footer_tpl.php"; ?>

</body>
</html>