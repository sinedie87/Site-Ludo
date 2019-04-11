<?php

include "utilities/pdo.php";

if(isset($_POST) && !empty($_POST["mail"]) && !empty($_POST["password"])){

// Variables de stockage info $_POST
	$mail = $_POST["mail"];
	$password = $_POST["password"];

// Requête PDO
	$query = $pdo->prepare("SELECT * 
			FROM users");

	$query->execute();

	$users = $query->fetch(PDO::FETCH_ASSOC);

// Variables de stockage infos comparaison vs BDD
	$mailDB = $users["mail"];
	$passwordDB = $users["password"];
	$password_check = password_verify($password, $passwordDB);

		if($mail == $mailDB && $password == $password_check){

			session_start();
			$_SESSION["connected"] = true;
			$_SESSION["status"] = $users["status"];

			// header("Location: index.php");
		}
		else{
			echo "Les informations saisies semblent incorrectes";
		}
};

include "templates/connect_tpl.php";

?>