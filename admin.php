<?php

session_start();

include "utilities/pdo.php";

if(isset($_POST) && !empty($_POST["titre"]) && !empty($_POST["contenu"]) && !empty($_POST["publish_date"])){

	$titre = htmlspecialchars($_POST["titre"]);
	$contenu = htmlspecialchars($_POST["contenu"]);
	$date = htmlspecialchars($_POST["publish_date"]);

$query = $pdo->prepare("INSERT INTO articles(titre, contenu, publish_date)
	VALUES(?, ?, ?)");

$query->execute([$titre, $contenu, $date]);

$query->closeCursor();

};

include "templates/admin_tpl.php";

?>