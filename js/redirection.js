/********** Script de redirection **********/
let spanCompteur = document.querySelector("#compteur")
let compteur = spanCompteur.textContent.substring(0,1)

let intervalID = setInterval(redirection, 1000)

console.log(compteur)

function redirection () {
	compteur--;
	spanCompteur.textContent += compteur + ' seconde'

	if (compteur > 1) {
		spanCompteur.textContent += 's '
	} else if (compteur == 0) {
		spanCompteur.textContent = ' maintenant'
		document.location = 'http://www.ludovicfaure.com'
		clearInterval(intervalID)
	}
}

