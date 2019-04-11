<?php

// include "utilities/menu.php"

?>

<footer>

	<nav class="oblique">
		
		<?= general_menu(); ?>

			<?php if(!empty($_SESSION) && $_SESSION["connected"] && $_SESSION["status"] === "admin"): ?>

				<?= admin_menu() ?>

			<?php endif; ?>

	</nav>

</footer>
