<!-- TEMPLATE POUR PAGE CV -->

<!-- Header avec menu navigation -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Toutes mes expériences, formations et compétences sont listées sur cette page. Entre autres, arts martiaux, cascades etc." />
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
	<title>Ludovic FAURE - Parcours</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

	<main>

		<section class="experience">

			<h2>Mon parcours :</h2>

			<p id="infos">(Cliquez sur les lignes de mon parcours pour avoir plus d'informations)</p>

			<a id="cv" href="datas/CVLudovicFaure.pdf">Télécharger mon CV</a>

			<!-- Affiche les publications EXP stockées en BDD -->
			<?php foreach($experiences as $experience): ?>
				<?php if($experience["visibilite"] == 1): ?>	

					<h3 class="titleExp">
						<!-- Si dates identiques, n'affiche que date_end renommée en dates -->
						<?php if($experience["date_start"] == $experience["dates"]): ?>
							<?= strtoupper($experience["dates"]); ?>
							<!-- Sinon affichage des deux dates -->
							<?php else: ?>
								<?= strtoupper($experience["date_start"]); ?> à 
								<?= strtoupper($experience["dates"]); ?>
							<?php endif; ?>
						</h3>

						<h3 class="titleExpBis">

							<?= htmlspecialchars_decode($experience["titre"]); ?>

						</h3>

						<p class="contentExp">
							<?= htmlspecialchars_decode($experience["contenu"]); ?><br>

							<!-- Permet de n'afficher que la balise iframe là où il y a une vidéo. Evite un bloc vide de 560 par 315 dans le HTML si pas de vidéo-->
							<?php if(!empty($experience["links"]) && ($experience["links"] == "Aucun")): ?>
							<p class="menu_mobile"></p>

							<?php else: ?>

							<?= htmlspecialchars_decode($experience["links"]); ?>
						
						</p>

							<?php endif; ?>
				<?php endif; ?>

			<?php endforeach; ?>
			
		</section>

		<section class="competence">
			
			<h2>Mes compétences :</h2>

			<?php foreach ($competences as $competence): ?>
				<?php if($competence["visibilite"] == 1): ?>

				<h3 class="h3">

					<?= htmlspecialchars_decode($competence["titre_comp"]) ?>
					<?= htmlspecialchars_decode($competence["contenu_comp"]) ?>

				</h3>

				<?php endif; ?>

			<?php endforeach; ?>
			
		</section>

		<section class="formation">
			
			<h2>Mes formations :</h2>

			<?php foreach ($formations as $formation): ?>
				<?php if($formation["visibilite"] == 1): ?>

				<h3 class="h3">

					<!-- Si dates identiques, n'affiche que date_end renommée en dates -->
					<?php if($formation["date_start_form"] == $formation["dates_form"]): ?>
						<?= strtoupper($formation["dates_form"]); ?>
						<!-- Sinon affichage des deux dates -->
						<?php else: ?>
							<?= strtoupper($formation["date_start_form"]); ?> à 
							<?= strtoupper($formation["dates_form"]); ?>
						<?php endif; ?>

						<?= htmlspecialchars_decode($formation["titre_form"]) ?>

					</h3>
					
					<?php endif; ?>

				<?php endforeach; ?>
				
			</section>

		</main>
		<!-- JS -->
		<!-- Menu mobile -->
		<script src="js/menu_mobile.js"></script>
		<!-- Affiche/Masque bloc CV -->
		<script src="js/cv.js"></script>

		<!-- Footer avec menu navigation -->


	</body>
	</html>