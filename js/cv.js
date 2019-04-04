
let titleExp = document.querySelectorAll(".titleExp");

let contentExp = document.querySelectorAll(".contentExp")

for(let i = 0; i < titleExp.length; i++){

	titleExp[i].addEventListener("click", function(){

		contentExp[i].classList.toggle("hide");
	});
};