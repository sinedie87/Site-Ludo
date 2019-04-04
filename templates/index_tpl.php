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

	<h1 class="main">Ludovic FAURE</h1>

	<section class="container">
		<section class="description">

			<h2>Description</h2>

			<article>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, illum! Consequatur, excepturi itaque sed eum reprehenderit possimus
			</article>
				<section class="portrait">
					<img src="images/profil.jpg">
				</section>
			<article>
				maiores voluptates accusantium eos, id dignissimos soluta omnis quam eveniet magnam atque. Sapiente.
			</article>	
		</section>	
	</section>  

	<section class="container2">
		<section class="cascade">

			<h2>Cascade</h2>

			<article >
				<?php foreach($articles as $article): ?>
					<div class="experience">
						<p>
							<?= $article["date"]; ?>
						</p>

						<h1>
							<?= $article["titre"]; ?>
						</h1>

						<p>
							<?= $article["contenu"]; ?>
						</p>
					</div>
				<?php endforeach; ?>	
			</article>	
		</section>

		<section class="acting">
			<h2>Acting</h2>

			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sint omnis repudiandae ducimus vero, tenetur accusantium. Similique dignissimos modi, quasi debitis veritatis ab, commodi excepturi voluptate, sint eaque quam necessitatibus?
			</article>
		</section>

		<section class="artsmartiaux">
			<h2>Arts Martiaux</h2>

			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sint omnis repudiandae ducimus vero, tenetur accusantium. Similique dignissimos modi, quasi debitis veritatis ab, commodi excepturi voluptate, sint eaque quam necessitatibus?
			</article>
		</section>			
	</section>
</main>

<!-- Footer avec menu navigation -->

<!-- JS -->
	<!-- Titres alternatifs -->
	<script src="js/main.js"></script>

<?php include "templates/footer_tpl.php"; ?>

</body>
</html>