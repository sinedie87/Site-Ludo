<!-- TEMPLATE POUR SE CONNECTER (PAGE CACHEE) -->

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
	<title>Ludovic FAURE - Connexion</title>
</head>

<body>

<?php include "templates/header_tpl.php"; ?>

<main>

<!-- Affiche le nom de l'utilisateur qui se connecte -->
<?php if($_SESSION["connected"] = true && isset($mail)): ?>
	<h1>Bonjour <?= $mail ?></h1>
<?php else: ?>
	
	<section>

		<!-- Formulaire de connexion -->
		<form action="" method="post">
		
			<input type="email" name="mail" placeholder="Votre e-mail">

			<input type="password" name="password" placeholder="Votre mot de passe">

			<input type="submit">

		</form>

	</section>
<?php endif; ?>

</main>

<!-- Footer avec menu navigation -->
<?php include "templates/footer_tpl.php"; ?>

</body>
</html>