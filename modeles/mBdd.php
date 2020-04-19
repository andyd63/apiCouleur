<?php

/**
 *  fonction pour se connecter à la bdd
 *
 * @return void
 */
function bdd()
{
	try {
	 $bdd = new PDO('mysql:host=localhost; dbname=apiCouleur', 'root', '');  //local
	$bdd->exec("SET CHARACTER SET utf8");
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	return $bdd;
}


?>		
