<main>

	<h1 class="main">Ludovic FAURE</h1>

	<section class="container">

		<section class="description">

			<h2>Description</h2>

			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, illum! Consequatur, excepturi itaque sed eum reprehenderit possimus<section class="portrait">
				
				<img src="images/profil.jpg">

		</section> maiores voluptates accusantium eos, id dignissimos soluta omnis quam eveniet magnam atque. Sapiente.
			</article>
			
		</section>  

<section class="container2">
		<section class="cascade">

			<h2>Cascade</h2>

			<article>	<?php foreach($articles as $article): ?>

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
			
		</section>

		<section class="acting">

			<h2>Acting</h2>

			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sint omnis repudiandae ducimus vero, tenetur accusantium. Similique dignissimos modi, quasi debitis veritatis ab, commodi excepturi voluptate, sint eaque quam necessitatibus?
			</article>
			
		</section>

		<section class="artsmartiaux">

			<h2>Arts Martiaux</h2>

			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sint omnis repudiandae ducimus vero, tenetur accusantium. Similique dignissimos modi, quasi debitis veritatis ab, commodi excepturi voluptate, sint eaque quam necessitatibus?
			</article>
</section>			
		</section>

	</section>

</main>