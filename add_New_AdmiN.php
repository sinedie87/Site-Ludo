<?php

session_start();

include "utilities/pdo.php";

if(isset($_POST) && !empty($_POST["mail"]) && !empty($_POST["password"])){

	$mail = $_POST["mail"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$query = $pdo->prepare("INSERT INTO users(mail, password)
			VALUES (?, ?)");

	$query->execute([$mail, $password]);

};

// header("Location: admin.php");

include "templates/add_New_AdmiN_tpl.php";

?>