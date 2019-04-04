/********** Carrousel **********/

let prevButton = document.querySelector("#slider-previous");
let nextButton = document.querySelector("#slider-next");

let index = 0;

let image = document.querySelector(".carrousel_photo");

let tabImg = [ { image : "images/carrousel/1.jpg"},
	{ image : "images/carrousel/2.jpg"},
	{ image : "images/carrousel/3.jpg"},
	{ image : "images/carrousel/4.jpg"},
	{ image : "images/carrousel/5.jpg"}
];

image.src = tabImg[index].image;

function next(){
	index++;

	if(index >= tabImg.length){
		index = 0;
	}

	image.src = tabImg[index].image;
}

function prev(){
	index--;

	if(index < 0){
		index = tabImg.length -1;
	}

	image.src = tabImg[index].image;
}


prevButton.addEventListener("click", prev);
nextButton.addEventListener("click", next);