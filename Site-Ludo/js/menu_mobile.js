/*****************************************************/

/********** Menu mobile **********/
let btn = document.querySelector(".menu_mobile")

let nav = document.querySelector(".menu")

function menu () {
	nav.classList.toggle("menu_close")
}

btn.addEventListener("click", menu)


// $('#form').trumbowyg({
//     btns: [['strong', 'em', 'foreColor', 'backColor'], ['insertImage']],
//     autogrow: true,
//     lang: 'fr'
// });

// $('#form').trumbowyg('html', '<span class="contentEx">Some HTML</span>')