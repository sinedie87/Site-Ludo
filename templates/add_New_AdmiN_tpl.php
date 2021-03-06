<!-- TEMPLATE POUR AJOUTER NOUVEL ADMINISTRATEUR (PAGE CACHEE)-->

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
	<title>Ludovic FAURE - Connexion</title>
</head>

<body>

	<?php include "templates/header_tpl.php"; ?>

	<main>

		<section>

			<form action="add_New_AdmiN.php" method="post" class="form_Admin">
				
				<input type="email" name="mail" placeholder="Votre e-mail">

				<input type="password" name="password" placeholder="Votre mot de passe">

				<input type="submit">

			</form>

		</section>

	</main>
	<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>

	<!-- Footer avec menu navigation -->


</body>
</html>