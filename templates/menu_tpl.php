<!-- TEMPLATE POUR MENU DE NAVIGATION -->

<nav>
	<a href="index.php">Accueil</a>
	<a href="cv.php">CV</a>
	<a href="photo.php">Photos</a>
	<a href="#">Vidéos</a>
	<a href="contact.php">Contact</a>

	<?php if(!empty($_SESSION) && $_SESSION["connected"] && $_SESSION["status"] === "admin"): ?>
	<a href="admin.php">Admin</a>
	<a href="utilities/destroy.php">Déconnexion</a>
	<?php endif; ?>
</nav>