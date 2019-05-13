/********** Minituare **********/

/* Déclaration des variables */
let imageSmall
let prevButton = document.querySelector("#slider-previous")
let nextButton = document.querySelector("#slider-next")
let miniature = document.getElementById("miniature")
let carrouselPhoto = document.querySelector(".carrousel_photo")
let index = 19
let index1 = 19
let index2 = 0
let index3 = 1

/* Tableau stockant les miniatures */
let tabSmallImg = [ { image : "images/carrousel/1.jpg"},
  { image : "images/carrousel/2.jpg"},
  { image : "images/carrousel/3.jpg"},
  { image : "images/carrousel/4.jpg"},
  { image : "images/carrousel/5.jpg"},
  { image : "images/carrousel/6.jpg"},
  { image : "images/carrousel/7.jpg"},
  { image : "images/carrousel/8.jpg"},
  { image : "images/carrousel/9.jpg"},
  { image : "images/carrousel/10.jpg"},
  { image : "images/carrousel/11.jpg"},
  { image : "images/carrousel/12.jpg"},
  { image : "images/carrousel/13.jpg"},
  { image : "images/carrousel/14.jpg"},
  { image : "images/carrousel/15.jpg"},
  { image : "images/carrousel/16.jpg"},
  { image : "images/carrousel/17.jpg"},
  { image : "images/carrousel/18.jpg"},
  { image : "images/carrousel/19.jpg"},
  { image : "images/carrousel/20.jpg"}
]

/* Tableau stockant les images */
let tabBigImg = [ { image : "images/carrousel/big_1.jpg"},
  { image : "images/carrousel/big_2.jpg"},
  { image : "images/carrousel/big_3.jpg"},
  { image : "images/carrousel/big_4.jpg"},
  { image : "images/carrousel/big_5.jpg"}
]

/* Fonction pour afficher les miniatures */
function displayImageSmall () {

  for ( let j = 0; j < 3; j++ ) {
    imageSmall = document.createElement("img");
    imageSmall.className = "imageSmall";
    miniature.appendChild(imageSmall);
    index >= tabSmallImg.length ? index = 0 : null
    imageSmall.src = tabSmallImg[index].image;
    index++
  }
}

displayImageSmall()

let allPictures = document.querySelectorAll(".imageSmall")

carrouselPhoto.src = allPictures[1].src

/* Fonction pour faire défiler les prochaines images */
function next(){  
  index1++
  index2++
  index3++

  index1 >= tabSmallImg.length ? index1 = 0
  : index2 >= tabSmallImg.length ? index2 = 0
  : index3 >= tabSmallImg.length ? index3 = 0
  : null

    allPictures[0].src = tabSmallImg[index1].image
    allPictures[1].src = tabSmallImg[index2].image
    allPictures[2].src = tabSmallImg[index3].image


    carrouselPhoto.src = allPictures[1].src
}

/* Fonction pour faire défiler les précédentes images */
function prev(){
  index1--
  index2--
  index3--

  index1 < 0 ? index1 = tabSmallImg.length -1
  : index2 < 0 ? index2 = tabSmallImg.length -1
  : index3 < 0 ? index3 = tabSmallImg.length -1
  : null

    allPictures[0].src = tabSmallImg[index1].image
    allPictures[1].src = tabSmallImg[index2].image
    allPictures[2].src = tabSmallImg[index3].image


    carrouselPhoto.src = allPictures[1].src
}

/* Défilement des images avec touches clavier */
function keyboard(e){

  if(e.keyCode == 39){

    next()
  } else if(e.keyCode ==37){
    
    prev()
  }
} 

/* Ajout des évènements sur les éléments concernés */
prevButton.addEventListener("click", prev);
nextButton.addEventListener("click", next);

document.addEventListener("keydown", keyboard)


