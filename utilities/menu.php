<?php

function link_menu($href, $titre, $class = ''){

	if($_SERVER["SCRIPT_NAME"] === "/Site Ludo/".$href){

		$class = "current_page";
	}

	return <<<HTML

	<a href="$href" class="$class">$titre</a> 

HTML;
}

function general_menu(){

	return link_menu("index.php", "Accueil").
	link_menu("cv.php", "CV").
	link_menu("photo.php", "Photos").
	link_menu("#.php", "Vidéos").
	link_menu("contact.php", "Contact");

}

function admin_menu(){

	return link_menu("admin.php", "Admin").
	link_menu("utilities/destroy.php", "Déconnexion");

}

?>