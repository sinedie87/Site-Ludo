<!-- TEMPLATE POUR PAGE CV -->

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

	<section class="experience">

	<h2>Expériences :</h2>

		<!-- Affiche les publications EXP stockées en BDD -->
		<?php foreach($articles as $article): ?>

				<h3 class="titleExp">
					<!-- Si dates identiques, n'affiche que date_end renommée en dates -->
					<?php if($article["date_start"] == $article["dates"]): ?>
						<?= strtoupper($article["dates"]); ?>
					<!-- Sinon affichage des deux dates -->
					<?php else: ?>
						<?= strtoupper($article["date_start"]); ?>
						<?= strtoupper($article["dates"]); ?>
					<?php endif; ?>

					<!-- Code pour afficher les mois en français vs anglais via le serveur (remplace le Set Local Time de MySQL) -->
					<!-- <?php

					for($i = 0; $i < sizeof($tab_months_numbers); $i++){
						if($tab_months_numbers[$i] == substr($article["publish_date"], 0, 2)){
							echo $tab_mois[($tab_months_numbers[$i]-1)];
							break;
						}
					}
					?> -->
					
					<?= $article["titre"]; ?>
				</h3>

				<p class="contentExp">
					<?= $article["contenu"]; ?><br>

					<!-- Permet de n'afficher que la balise iframe là où il y a une vidéo. Evite un bloc vide de 560 par 315 dans le HTML si pas de vidéo-->
					<?php if(!empty($article["links"])): ?>
						<iframe width="560" height="315" src="<?= $article['links']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?php endif; ?>
				</p>

		<?php endforeach; ?>
	
	</section>

	<section class="formations">
		
		<h2>Formations :</h2>
		
	</section>

</main>

	<!-- Affiche/Masque bloc CV -->
	<script src="js/cv.js"></script>

<!-- Footer avec menu navigation -->
<?php include "templates/footer_tpl.php"; ?>

</body>
</html>