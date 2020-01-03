<?php
	require_once 'Views\Vue.php';
	require_once ("Controllers/InventionController.php");
	require_once ("Controllers/BrevetController.php");
	require_once ("Controllers/FormationController.php");
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
	}else if($action == "listeDeclarationInvention"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Lister())); 
	}else if($action == "detailDeclarationInvention"){ 
		$controller = new InventionController(); 
		$vue = new Vue('detailsDeclarationInvention');
		$vue->generer(array("statement" => $controller->Details($_GET['id']), "nomAndPrenomDemandeur"=> $controller->getInfoDemandeur($_GET['id']))); 
	}else if($action == "deleteDeclarationInvention"){
		$controller = new InventionController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}else if($action =="updateDeclarationInvention"){
		$controller = new InventionController();
		$vue = new Vue('updateDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}else if($action == "saveUpdateDeclarationInvention"){
		$controller = new InventionController();
		$controller->Update($_POST); 
		$vue = new Vue('createSuccess'); 
		$vue->generer(array()); 
	}

    //brevet
    else if($action == 'declarationBrevet'){
		$vue = new Vue('declarationBrevet'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationBrevet"){
		$controller = new BrevetController(); 
		$controller->Ajouter($_POST);
		$statement= $controller->Lister();
		$vue = new Vue('listeDeclarationBrevet'); 
		$alert="la demande a été bien crée"; 
		$vue->generer(array( "statement" => $statement,"alert"=>$alert)); 
	}
	else if($action == "listeDeclarationBrevet"){
		$controller = new BrevetController(); 
		$statement= $controller->Lister();
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array( "statement" => $statement)); 
	}
	else if($action == "rechercheBrevet"){
		$controller = new BrevetController();
		$id = $_GET["id"]; 
		$row= $controller->Detail($id);
		$vue = new Vue('detailDeclarationBrevet'); 
		$vue->generer(array( "row" => $row)); 
	}
    else if($action == "detailModifierBrevet"){
		$controller = new BrevetController();
		$id = $_GET["id"]; 
		$row= $controller->Detail($id);
		$vue = new Vue('ModifierDeclarationBrevet'); 
		$vue->generer(array( "row" => $row)); 
	}
	else if($action == "modifierDeclarationBrevet"){
		$controller = new BrevetController(); 
		$id = $_GET["id"]; 
		$controller->Modifier($_POST,$id);
		$statement= $controller->Lister();
		$vue = new Vue('listeDeclarationBrevet'); 
		$alert="la demande a été bien modifiée";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	else if($action == "supprimerBrevet"){
		$controller = new BrevetController(); 
		$id = $_GET["id"]; 
		$controller->Supprimer($id);
		$statement= $controller->Lister();
		$vue = new Vue('listeDeclarationBrevet'); 
		$alert="la demande a été bien supprimée";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}

	//Formation 
	else if($action == 'declarationFormation'){
		$vue = new Vue('declarationFormation'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationFormation"){
		$controller = new FormationController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('createSuccess'); 
		$vue->generer(array()); 
	}
	else if($action == "listeDeclarationFormation"){
		$controller = new FormationController(); 
		$statement= $controller->Lister();
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array( "statement" => $statement)); 
	}
