/*****************************************************/

/********** Menu mobile **********/

let btn = document.querySelector(".menu_mobile");

let nav = document.querySelector(".menu");

function menu(){
	nav.classList.toggle("menu_close");
}


btn.addEventListener("click", menu);
