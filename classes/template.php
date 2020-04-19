<?php

$success = false;
$data = array();

/**
 * fonction qui retourne un json complet
 *
 * @param [bool] $success
 * @param [array] $data
 * @param [text] $msgErreur
 * @return void
 */
function reponse_json($success, $data, $msgErreur=NULL) {
	$array['success'] = $success;
	$array['msg'] = $msgErreur;
	$array['result'] = $data;

	return json_encode($array,JSON_UNESCAPED_UNICODE);
}

/**
 * Fonction qui retourne un json avec les données renseignées dans data
 *
 * @param [type] $data
 * @return void
 */
function reponse_jsonApi($data) {
	$array['data']  = $data;
	return json_encode($array,JSON_UNESCAPED_UNICODE);
}


?>