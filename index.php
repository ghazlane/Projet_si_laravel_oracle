<?php
	require_once 'Views\Vue.php';
	require_once ("Controllers/InventionController.php");
	require_once ("Controllers/BrevetController.php");
	require_once ("Controllers/FormationController.php");
	require_once ("Controllers/GuichetUniqueController.php");
	//require_once("controllers\DeclarationInventionController.php");
	
	$action = empty($_GET["action"])?"Accueil":$_GET["action"];
	//Guichet unique;
	if($action == "ajouterGuichetUnique"){
		$vue = new Vue('ajouterGuichetUnique'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutGuichetUnique"){
		$controller = new GuichetUniqueController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('createSuccess'); 
		$vue->generer(array()); 
	}else if($action == "listerGuichetUnique"){
		$controller = new GuichetUniqueController(); 
		$vue = new Vue('listeGuichetUnique'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}else if($action == "updateGuichetUnique"){
		$controller = new GuichetUniqueController();
		$vue = new Vue('updateGuichetUnique'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}else if($action =="saveUpdateGuichetUnique"){
		$controller = new GuichetUniqueController();
		$resultat = $controller->Update($_POST); 
		if($resultat == true){
			$vue = new Vue('createSuccess'); 
			$vue->generer(array()); 
		}else {
			$vue = new Vue('createFailed'); 
			$vue->generer(array()); 
		}
	}else if($action == "detailGuichetUnique"){
		$controller = new GuichetUniqueController(); 
		$vue = new Vue('detailsGuichetUnique');
		$vue->generer(array("statement" => $controller->Details($_GET['id']))); 
	}else if($action == "deleteGuichetUnique"){
		$controller = new GuichetUniqueController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeGuichetUnique'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}

	//Invention 
	else if($action == 'Accueil'){
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
		$prof = $controller->getInfoDemandeur($id);
		$vue = new Vue('detailDeclarationBrevet'); 
		$vue->generer(array( "row" => $row, "nomAndPrenomDemandeur"=> $prof)); 
		 

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
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array( "statement" => $controller->Lister())); 
	}
	else if($action == "detailsDeclarationFormation"){ 
		$controller = new FormationController(); 
		$vue = new Vue('detailsDeclarationFormation');
		$vue->generer(array("statement" => $controller->Details($_GET['id']), "nomAndPrenomDemandeur"=> $controller->getInfoDemandeur($_GET['id']))); 
	}
	else if($action == "deleteDeclarationFormation"){
		$controller = new FormationController(); 
		$controller->Supprimer($_GET['id']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action =="updateDeclarationFormation"){
		$controller = new FormationController();
		$vue = new Vue('updateDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}
	else if($action == "saveUpdateDeclarationFormation"){
		$controller = new FormationController();
		$controller->Update($_POST); 
		$vue = new Vue('createSuccess'); 
		$vue->generer(array()); 
	}
