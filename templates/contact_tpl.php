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
	<title>Ludovic FAURE - Contact</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>

<main>

	<section class="container_CV">
		
		<img src="images/profil.jpg" alt="">

		<form action="" method="post" class="form_Contact">
			
			<!-- <section class="contact"> -->
				
			<!-- <p>Votre nom : </p> -->
			<input type="text" name="nom" placeholder="Votre nom">
			
			<!-- <p>Votre prénom : </p> -->
			<input type="text" name="prenom" placeholder="Votre prénom">
		
			<!-- <p>Votre e-mail : </p> -->
			<input type="email" name="mail" placeholder="Votre e-mail">
			
		<!-- </section> -->

		<!-- <section class="form"> -->

			<!-- <p>Votre message : </p> -->
			<p>
			<textarea placeholder="Votre message"></textarea>
			</p>

			<p>
			<input type="submit">
			</p>

		<!-- </section> -->

		</form>

	</section>

</main>

<!-- Footer avec menu navigation -->

<?php include "templates/footer_tpl.php"; ?>

</body>
</html>