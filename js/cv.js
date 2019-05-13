/* Affiche/Masque bloc sur la partie CV au clique */

/* Déclaration des variables */
let titleExp = document.querySelectorAll(".titleExp")
let contentExp = document.querySelectorAll(".contentExp")

/*Boucle pour parcourir la NodeList de titleExp, 
ajouter l'évènement au clique et afficher/masque le bloc */
for (let i = 0; i < titleExp.length; i++) {

	titleExp[i].addEventListener("click", function () {

		contentExp[i].classList.toggle("hide")
	})
}

/* Déclaration des variables */
let titleExpBis = document.querySelectorAll(".titleExpBis")

/*Boucle pour parcourir la NodeList de titleExp, 
ajouter l'évènement au clique et afficher/masque le bloc */
for (let i = 0; i < titleExpBis.length; i++) {

	titleExpBis[i].addEventListener("click", function () {

		contentExp[i].classList.toggle("hide")
	})
}


/* Affiche TELECHARGER ou VISUALISER selon périphérique utilisé */

/* Déclaration des variables */
let cv = document.querySelector("#cv")
let width = document.body.clientWidth

if (width < 769) {

	cv.textContent = "Visualiser mon CV"
	cv.setAttribute("target", "_blank")
}