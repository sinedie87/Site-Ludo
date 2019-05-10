/********** Carrousel **********/

let prevButton = document.querySelector("#slider-previous");
let nextButton = document.querySelector("#slider-next");

let index = 0;

let imageBig = document.querySelector(".carrousel_photo");

let tabBigImg = [ { image : "images/carrousel/big_1.jpg"},
	{ image : "images/carrousel/big_2.jpg"},
	{ image : "images/carrousel/big_3.jpg"},
	{ image : "images/carrousel/big_4.jpg"},
	{ image : "images/carrousel/big_5.jpg"}
];

imageBig.src = tabBigImg[index].image;

function next(){
	index++;

	if(index >= tabBigImg.length){
		index = 0;
	}

	imageBig.src = tabBigImg[index].image;
}

function prev(){
	index--;

	if(index < 0){
		index = tabBigImg.length -1;
	}

	imageBig.src = tabBigImg[index].image;
}


prevButton.addEventListener("click", prev);
nextButton.addEventListener("click", next);

/********** Minituare **********/

let imageMiniature = document.querySelector(".imageMiniature");

let tabSmallImg = [ { image : "images/carrousel/1.jpg"},
	{ image : "images/carrousel/2.jpg"},
	{ image : "images/carrousel/3.jpg"},
	{ image : "images/carrousel/4.jpg"},
	{ image : "images/carrousel/5.jpg"}
];

function displayImageSmall(){

	for(let i = 0; i < tabSmallImg.length; i++){

		let imageSmall = document.createElement("img");
		imageSmall.className = "imageSmall";
		document.getElementById("miniature").appendChild(imageSmall);

		imageSmall.src = tabSmallImg[i].image;
	}
}

displayImageSmall();



