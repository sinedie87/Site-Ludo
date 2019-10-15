<!-- FICHIER POUR CONNEXION PDO -->
<?php

/* Connexion BDO version localhost */
$pdo = new PDO("mysql:host=localhost;dbname=ludo",
	"root",
	"root");

$pdo->exec("SET NAMES UTF8 , lc_time_names = 'fr_FR'");

?>