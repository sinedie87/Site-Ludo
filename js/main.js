/********** Défilement texte sur le H1 **********/

let text;

// Contient les mots à afficher
let tab = [
	["Cascadeur"],
	["Comédien"]
	
];

let pointeur = 0;

function title(){

	text = document.querySelector(".accueil").textContent = tab[pointeur];
	// Permet de tester si la  propriété .textContent existe et évite le msg d'erreur dans la console
	
		// Commence à -1 pour éviter un "blanc" lors du passage du else au if
		if (pointeur < tab.length -1){
			pointeur++;
		
		}
		else {
			pointeur = 0;
		}

	}

// Déclenche le changement de mots toutes les secondes
setInterval("title()", 1500);