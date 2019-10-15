<!-- FICHIER POUR CONNEXION PDO -->
<?php

/* Connexion BDO version localhost */
$pdo = new PDO;

$pdo->exec("SET NAMES UTF8 , lc_time_names = 'fr_FR'");

?>