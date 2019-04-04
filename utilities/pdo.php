<?php

/* Connexion BDO */

$pdo = new PDO("mysql:host=localhost;dbname=ludo", 
	"ludo", 
	"");

$pdo->exec("SET NAMES UTF8");



?>