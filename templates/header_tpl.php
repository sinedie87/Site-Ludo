<!-- TEMPLATE POUR HEADER -->

<?php

include "utilities/menu.php"

?>

<header>

	<nav class="oblique">

		<!-- Affiche le menu commun à tous les visiteurs -->
		<?= general_menu(); ?>

			<!-- Affiche le menu commun à tous les administrateurs si utilisateur connecté -->
			<?php if(!empty($_SESSION) && $_SESSION["connected"] && $_SESSION["status"] === "admin"): ?>

				<?= admin_menu() ?>

			<?php endif; ?>

	</nav>

</header>