/********** Défilement texte sur le H1 **********/

// Contient les mots à afficher
let tab = [
	["Ludovic FAURE"],
	["Cascadeur"],
	["Comédien"],
	["Arts Martiaux"]
];

let pointeur = 0;

function title(){

	let text = document.querySelector("h1").textContent = tab[pointeur];
	// Commence à -1 pour éviter un "blanc" lors du passage du else au if
	if (pointeur < tab.length -1){
		pointeur++;
	}
	else {
		pointeur = 0;
	}
}

// Déclenche le changement de mots toutes les secondes
setInterval("title()", 1000);

/********** ******************** **********/


