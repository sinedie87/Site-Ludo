/********** Minituare **********/

/* Déclaration des variables */
let imageSmall;
let prevButton = document.querySelector("#slider-previous");
let nextButton = document.querySelector("#slider-next");
let index = 0;

/* Tableau stockant les miniatures */
let tabSmallImg = [ { image : "images/carrousel/1.jpg"},
	{ image : "images/carrousel/2.jpg"},
	{ image : "images/carrousel/3.jpg"},
	{ image : "images/carrousel/4.jpg"},
	{ image : "images/carrousel/5.jpg"}
];

/* Fonction pour afficher les miniatures */
function displayImageSmall(){

	for(let i = 0; i < 3; i++){

		imageSmall = document.createElement("img");
		imageSmall.className = "imageSmall";
		document.getElementById("miniature").appendChild(imageSmall);

		imageSmall.src = tabSmallImg[i].image;
	}

}

displayImageSmall();

// imageSmall.src = tabSmallImg[index].image;

/* Fonction pour faire défiler les prochaines images */
function next(){
	index++;

	if(index >= tabSmallImg.length){
		index = 0;
	}

	imageSmall.src = tabSmallImg[index].image;
}

/* Fonction pour faire défiler les précédentes images */
function prev(){
	index--;

	if(index < 0){
		index = tabSmallImg.length -1;
	}

	imageSmall.src = tabSmallImg[index].image;
}

/* Ajout des évènements sur les éléments concernés */
prevButton.addEventListener("click", prev);
nextButton.addEventListener("click", next);

