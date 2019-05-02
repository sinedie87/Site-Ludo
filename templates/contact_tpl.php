<!-- TEMPLATE POUR FORMULAIRE DE CONTACT -->

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
<!-- RESPONSIVE DESIGN -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Ludovic FAURE - Contact</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>

<main>

	<section class="container_Contact">

		<!-- Formulaire de contact -->
		<form action="contact.php" method="post" class="form_Contact">
			
			<input type="text" name="nom" placeholder="Votre nom*" required="required">
			
			<input type="text" name="prenom" placeholder="Votre prénom*" required="required">
		
			<input type="email" name="mail" placeholder="Votre e-mail*" required="required">

			<p>
			<textarea name="message" placeholder="Votre message*" required="required"></textarea>
			</p>

			<p>
			<input type="submit" value="Envoyer">
			</p>

		</form>

	</section>

</main>
<!-- JS -->
	<!-- Menu mobile -->
	<script src="js/menu_mobile.js"></script>
<!-- Footer avec menu navigation -->


</body>
</html>