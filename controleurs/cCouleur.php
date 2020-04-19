<?php
require_once "../modeles/mCouleur.php";
require_once "../assets/inc/function.php";

if(isset($_GET['action']))
	$action = $_GET['action'];
else{
	$action = "colores";
}
switch ($action){
    //recherche global
    case 'colores' :
        $allCouleur = allCouleur();
        appelAjax($allCouleur);
    break;

    case 'insert' :
        if((isset($_GET['name'])) && (isset($_GET['color'])) && (isset($_GET['pantone'])) && (isset($_GET['year']))){
        $allCouleur = addCouleur($_GET['name'],$_GET['color'],$_GET['pantone'],$_GET['year']);
        appelAjax($allCouleur);
        } else {
            echo reponse_json(false, '', "Un des champs n'est pas renseigné");
        }
    break;
    
    //recherche par id
    case 'search' :
        $couleur = couleurById($_GET['id']);
        appelAjax($couleur);
	break;

    default :
        $allCouleur = allCouleur();
        appelAjax($allCouleur);
    break;
}

?>