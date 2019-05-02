<!-- FICHIER POUR GERER LA CONNEXION EN TANT QU'ADMIN -->
<?php

include "utilities/pdo.php";

if(isset($_POST) && !empty($_POST["mail"]) && !empty($_POST["password"])){

	/* Variable de stockage infos saisies par utilisateur */
	$mail = $_POST["mail"];
	$password = $_POST["password"];

	$query = $pdo->prepare("SELECT * 
			FROM users");

	$query->execute();

	$users = $query->fetch(PDO::FETCH_ASSOC);

	$query->closeCursor();

	/* Variables de stockage infos saisies par utilisateur pour comparaison vs BDD */
	$mailDB = $users["mail"];
	$passwordDB = $users["password"];
	$password_check = password_verify($password, $passwordDB);

		if($mail == $mailDB && $password == $password_check){

			session_start();
			$_SESSION["connected"] = true;
			$_SESSION["status"] = $users["status"];

			header("Location: admin.php");

		}
		else{
			echo "Les informations saisies semblent incorrectes";
		}
};

include "templates/connect_tpl.php";

?>