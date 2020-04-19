<?php
require_once ('../classes/myQuery.php');	
session_start();

	        // Menu MasterPage
	        if (isset($_REQUEST['c']))   {
		       switch ($_REQUEST['c'])      {
				   case 'accueil' : include("../Controleurs/cCouleur.php"); break;                        
		        }
			 }
		     else  {
				include("../Controleurs/cCouleur.php");
		     }
      
?>