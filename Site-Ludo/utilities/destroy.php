<!-- FICHIER POUR DECONNEXION SESSION ADMIN -->
<?php

session_start();

session_destroy();

header("Location: ../index.php");

?>