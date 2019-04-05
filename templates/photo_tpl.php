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
	<title>Ludovic FAURE - Photos</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>

<main>

	<section class="carrousel">
	
		<figure>
			
			<img class="carrousel_photo" src="">
			<figcaption></figcaption>

		</figure>

		<nav class="toolbar">
			<button id="slider-previous"><i class="fas fa-backward"></i></button>
			<button id="slider-next"><i class="fas fa-forward"></i></button>
		</nav>

	</section>

</main>

<!-- Footer avec menu navigation -->

	<!-- Slider -->
	<script src="js/slider.js" async></script>


<?php include "templates/footer_tpl.php"; ?>

</body>
</html>