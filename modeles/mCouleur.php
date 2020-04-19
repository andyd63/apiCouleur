<?php 

///////////////// Connexion à la base de données///////////////////////
require_once('../modeles/mBdd.php');     
require_once ('../classes/myQuery.php');
require_once ('../classes/template.php');


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



function allCouleur(){
	$req =  new myQueryClass('couleur');
	$r = $req->myQuerySelect('id,name,color');
	$data['couleur'] = $r;
	return reponse_jsonApi($data);
}


function couleurById($id){
	$conditions = array();
	array_push($conditions, array('nameChamps'=>'id','type'=>'=','name'=>'id','value'=>$id));
	$req =  new myQueryClass('couleur',$conditions);
	$r = $req->myQuerySelect('id,name,color');
	$data['couleur'] = $r;
	return reponse_jsonApi($data);
}

?>