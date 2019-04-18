/* Affiche/Masque bloc sur la partie CV au clique */

/* Déclaration des variables */
let titleExp = document.querySelectorAll(".titleExp");
let contentExp = document.querySelectorAll(".contentExp")

/*Boucle pour parcourir la NodeList de titleExp, 
ajouter l'évènement au clique et afficher/masque le bloc */
for(let i = 0; i < titleExp.length; i++){

	titleExp[i].addEventListener("click", function(){

		contentExp[i].classList.toggle("hide");
	});
};