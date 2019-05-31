<!-- FICHIER POUR MODIFIER UNE PUBLICATION EXISTANTE -->
<?php

session_start();

include "utilities/pdo.php";

if(isset($_GET) && !empty($_GET)){

	if(!empty($_GET['id'])){
		
		$idParam = $_GET['id'];

		/*Récupére les informations de la TABLE experiences */
		$query_exp = $pdo->prepare("SELECT * 
			FROM experiences 
			WHERE id = ?");

		$query_exp->execute([$idParam]);

		$experience = $query_exp->fetch(PDO::FETCH_ASSOC);

		$query_exp->closeCursor();

	}

	elseif (!empty($_GET['id_comp'])){
		
		$idParam = $_GET['id_comp'];

		/* Récupére les informations de la TABLE compétences */
		$query_comp = $pdo->prepare("SELECT *
			FROM competences
			WHERE id_comp = ?");

		$query_comp->execute([$idParam]);

		$competence = $query_comp->fetch(PDO::FETCH_ASSOC);

		$query_comp->closeCursor();

	}

	elseif(!empty($_GET['id_form'])){
		
		$idParam = $_GET['id_form'];

		/* Récupére les informations de la TABLE formations */
		$query_form = $pdo->prepare("SELECT *
			FROM formations
			WHERE id_form = ?");

		$query_form->execute([$idParam]);

		$formation = $query_form->fetch(PDO::FETCH_ASSOC);

		$query_form->closeCursor();

	}
	
}

include "templates/edit_tpl.php";

?>