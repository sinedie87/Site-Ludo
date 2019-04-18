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
	<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<title>Ludovic FAURE - Expériences</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>

<main>

	<section class="experience">

	<h2>Expériences :</h2>

		<!-- Affiche les publications EXP stockées en BDD -->
		<?php foreach($experiences as $experience): ?>

				<h3 class="titleExp">
					<!-- Si dates identiques, n'affiche que date_end renommée en dates -->
					<?php if($experience["date_start"] == $experience["dates"]): ?>
						<?= strtoupper($experience["dates"]); ?>
					<!-- Sinon affichage des deux dates -->
					<?php else: ?>
						<?= strtoupper($experience["date_start"]); ?> à 
						<?= strtoupper($experience["dates"]); ?>
					<?php endif; ?>

					<!-- Code pour afficher les mois en français vs anglais via le serveur (remplace le Set Local Time de MySQL) -->
					<!-- <?php

					for($i = 0; $i < sizeof($tab_months_numbers); $i++){
						if($tab_months_numbers[$i] == substr($experience["publish_date"], 0, 2)){
							echo $tab_mois[($tab_months_numbers[$i]-1)];
							break;
						}
					}
					?> -->
				
					<?= $experience["titre"]; ?>

				</h3>
				
				<p class="contentExp">
					<?= $experience["contenu"]; ?><br>

					<!-- Permet de n'afficher que la balise iframe là où il y a une vidéo. Evite un bloc vide de 560 par 315 dans le HTML si pas de vidéo-->
					<?php if(!empty($experience["links"])): ?>
						<iframe width="560" height="315" src="<?= $experience['links']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?php endif; ?>
				</p>

		<?php endforeach; ?>
	
	</section>

	<section class="competence">
		
	<h2>Compétences :</h2>

		<?php foreach ($competences as $competence): ?>

				<h3 class="titleExp">

					<?= $competence["titre_comp"] ?>
					<?= $competence["contenu_comp"] ?>

				</h3>

		<?php endforeach; ?>
		
	</section>

	<section class="formation">
		
	<h2>Formations :</h2>

		<?php foreach ($formations as $formation): ?>

				<h3 class="titleExp">

					<!-- Si dates identiques, n'affiche que date_end renommée en dates -->
					<?php if($formation["date_start_form"] == $formation["dates_form"]): ?>
						<?= strtoupper($formation["dates_form"]); ?>
					<!-- Sinon affichage des deux dates -->
					<?php else: ?>
						<?= strtoupper($formation["date_start_form"]); ?> à 
						<?= strtoupper($formation["dates_form"]); ?>
					<?php endif; ?>

					<?= $formation["titre_form"] ?>


				</h3>

		<?php endforeach; ?>
		
	</section>

</main>

	<!-- Affiche/Masque bloc CV -->
	<script src="js/cv.js"></script>

<!-- Footer avec menu navigation -->
<?php include "templates/footer_tpl.php"; ?>

</body>
</html>