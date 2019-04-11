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
	<title>Ludovic FAURE - Expériences</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>

<main>

	<article >

	<h2>Expériences :</h2>

		<?php foreach($articles as $article): ?>

			<section class="experience">

				<h3 class="titleExp">
					<?= $article["publish_date"]; ?>
					<!-- <?= $new_date; ?> -->
					<?= $article["titre"]; ?>
				</h3>

				<p class="contentExp">
					<?= $article["contenu"]; ?>
				</p>
			</section>

		<?php endforeach; ?>
	
	</article>

	<article>
		
		<h2>Formations :</h2>
		
	</article>

</main>

<!-- Footer avec menu navigation -->

	<!-- Apparition bloc CV -->
	<script src="js/cv.js"></script>


<?php include "templates/footer_tpl.php"; ?>

</body>
</html>