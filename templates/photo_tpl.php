<!-- TEMPLATE POUR PAGE GALERIE -->

<!-- Header avec menu navigation -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Mes réalisations en photos : arts martiaux, cascades, maniement d'armes, scènes de combat lors de représentations publiques (Puy Du Fou, Disney) ou privées.">
<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- RESPONSIVE DESIGN -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Ludovic FAURE - Galerie</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>	<section class="carrousel">

<main>

		<figure>
			
			<img class="carrousel_photo">
			<figcaption></figcaption>

		</figure>

		<figure>
			
			<p id="miniature"></p>

		</figure>

		<nav class="toolbar">
			<button id="slider-previous"><i class="fas fa-backward"></i></button>
			<button id="slider-next"><i class="fas fa-forward"></i></button>
		</nav>

	</section>

</main>
<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>
	<!-- Slider -->
	<!-- <script src="js/slider.js" async></script> -->
	<script src="js/newSlider.js" async></script>

<!-- Footer avec menu navigation -->


</body>
</html>