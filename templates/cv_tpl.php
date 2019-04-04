<article >
	<h2>Expériences :</h2>

	<?php foreach($articles as $article): ?>

		<div class="experience">
			<h3>
				<?= $article["date"]; ?>
			</h3>

			<p class="titleExp">
				<?= $article["titre"]; ?>
			</p>

			<p class="contentExp">
				<?= $article["contenu"]; ?>
			</p>
		</div>

	<?php endforeach; ?>
	
</article>

<article>
	<h2>Formations :</h2>
	
</article>

