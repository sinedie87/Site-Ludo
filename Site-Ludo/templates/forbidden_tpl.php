<!-- TEMPLATE PAGE forbidden POUR GERER LES ACCES AUX PAGES ADMIN -->

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
	<title>Ludovic FAURE - Refus</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>
	
		<main>

			<h1 class="error">Vous n'êtes pas autorisé à visualiser cette page en tant que visiteur</h1>

			<p class="error">Vous allez être redirigé vers l'accueil dans <span id="compteur">5 secondes </span></p>

		</main>

	<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>
	<script src="js/redirection.js"></script>

</body>

</html>