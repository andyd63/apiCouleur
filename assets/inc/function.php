<?php
/**
 * Created by IntelliJ IDEA.
 * User: Andy Douarre
 * Date: 01/03/2019
 * Time: 15:08
 */

function appelAjax($data){
	header('Content-Type: application/json');
	echo $data;
}

function appelXML($data){
	header('Content-Type: text/xml');
    echo '<?xml version="1.0"?>' . "\n";
	echo $data;
}



?>

