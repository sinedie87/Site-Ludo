<article class="experience">

	<?php foreach($articles as $article): ?>

		<p>
			<?= $article["date"]; ?>
		</p>

		<h1>
			<?= $article["titre"]; ?>
		</h1>

		<p>
			<?= $article["contenu"]; ?>
		</p>

	<?php endforeach; ?>
	
</article>