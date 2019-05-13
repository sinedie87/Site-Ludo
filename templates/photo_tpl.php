<!-- TEMPLATE POUR PAGE GALERIE -->

<!-- Header avec menu navigation -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Mes réalisations en photos : arts martiaux, cascades, maniement d'armes, scènes de combat lors de représentations publiques (Puy Du Fou, Disney) ou privées.">
<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- RESPONSIVE DESIGN -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Ludovic FAURE - Galerie</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>	

<main>

		<figure class="bigImg">
			
			<img class="carrousel_photo">
			<figcaption></figcaption>

		</figure>

		<figure class="smallImg">
			
			<div id="miniature"></div>

		</figure>

		<nav class="toolbar">
			<button id="slider-previous"><i class="fas fa-arrow-alt-circle-left"></i></button>
			<button id="slider-next"><i class="fas fa-arrow-alt-circle-right"></i></button>
		</nav>

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