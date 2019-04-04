<?php

/* Connexion BDO */

$pdo = new PDO("mysql:host=localhost;dbname=ludo", 
	"root", 
	"root");

$pdo->exec("SET NAMES UTF8");



?>