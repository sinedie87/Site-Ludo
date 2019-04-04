<?php

include "utilities/pdo.php";

if(isset($_POST) && !empty($_POST["titre"]) && !empty($_POST["contenu"]) && !empty($_POST["date"])){

	$titre = htmlspecialchars($_POST["titre"]);
	$contenu = htmlspecialchars($_POST["contenu"]);
	$date = htmlspecialchars($_POST["date"]);

$query = $pdo->prepare("INSERT INTO article(titre, contenu, date)
	VALUES(?, ?, ?)");

$query->execute([$titre, $contenu, $date]);

$query->closeCursor();

};





include "templates/header_tpl.php";

include "templates/admin_tpl.php";

?>