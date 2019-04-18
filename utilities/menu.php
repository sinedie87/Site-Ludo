<!-- FICHIER POUR MENU -->
<?php

/* Fonction pour créer lien du menu */
function link_menu($href, $titre, $class = ''){

	/* Ajoute $class quand utilisateur se trouve sur la page concernée */
	if($_SERVER["SCRIPT_NAME"] === "/Site Ludo/".$href){

		$class = "current_page";
	}

	/* Crée le HTML */
	return <<<HTML

	<a href="$href" class="$class">$titre</a> 

HTML;
}

/* Fonction pour afficher le menu commun à tous les visiteurs */
function general_menu(){

	return link_menu("index.php", "Accueil").
	link_menu("cv.php", "CV").
	link_menu("photo.php", "Photos").
	link_menu("#.php", "Vidéos").
	link_menu("contact.php", "Contact");

}

/* Fonction pour afficher le menu commun à tous les administrateurs */
function admin_menu(){

	return link_menu("admin.php", "Admin").
	link_menu("utilities/destroy.php", "Déconnexion");

}

?>