<?php
	require_once 'Views\Vue.php';
	require_once ("Controllers/InventionController.php");
	//require_once("controllers\DeclarationInventionController.php");
	
	$action = empty($_GET["action"])?"Accueil":$_GET["action"];
	if($action == 'Accueil'){
		$vue = new Vue('accueil'); 
		$vue->generer(array()); 
	}
	else if($action == 'declarationInvention'){
		$vue = new Vue('declarationInvention'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationInvention"){
		$controller = new InventionController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('createSuccess'); 
		$vue->generer(array()); 
	}


