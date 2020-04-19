<?php 

///////////////// Connexion à la base de données///////////////////////
require_once('../modeles/mBdd.php');     
require_once ('../classes/myQuery.php');
require_once ('../classes/template.php');

/**
 * Fonction qui permet l'ajout d'une couleur
 *
 * @param [name] $name
 * @param [color] $color
 * @param [year] $year
 * @param [pantone] $pantone
 * @return void
 */
function addCouleur($name,$color,$year,$pantone){
	$conditions = array();
	array_push($conditions, array('name'=>'name','value'=>$name));
	array_push($conditions, array('name'=>'color','value'=>$color));
	array_push($conditions, array('name'=>'year','value'=>$year));
	array_push($conditions, array('name'=>'pantone_value','value'=>$pantone));
	$req =  new myQueryClass('couleur', $conditions);
	$r = $req->myQueryInsert("couleur");
	return reponse_json(true,'La couleur est ajoutée!');
}

/**
 * fonction qui retourne toutes les couleurs avec ses informations : id name couleur
 *
 * @return void en json
 */
function allCouleur(){
	$req =  new myQueryClass('couleur');
	$r = $req->myQuerySelect('id,name,color');
	$data['couleur'] = $r;
	return reponse_jsonApi($data);
}

/**
 * fonction qui retourne la couleur de l'id toutes ses informations
 *
 * @param [id] id de la couleur souhaitée
 * @return void
 */
function couleurById($id){
	$conditions = array();
	array_push($conditions, array('nameChamps'=>'id','type'=>'=','name'=>'id','value'=>$id));
	$req =  new myQueryClass('couleur',$conditions);
	$r = $req->myQuerySelect();
	$data['couleur'] = $r;
	return reponse_jsonApi($data);
}

?>