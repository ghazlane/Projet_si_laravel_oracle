<?php
session_start();
	require_once 'Views\Vue.php';
	require_once ("Controllers/InventionController.php");
	require_once ("Controllers/BrevetController.php");
	require_once ("Controllers/FormationController.php");
	require_once ("Controllers/GuichetUniqueController.php");
	require_once ("Controllers/PoolCompetenceController.php");
	//require_once("controllers\DeclarationInventionController.php");
	
	$action = empty($_GET["action"])?"Home":$_GET["action"];
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
	}else if($action == "connexionGuichetUnique"){
		$controller = new GuichetUniqueController(); 
		$statement = $controller->Lister(); 
		while ($row = $statement->fetch()) {
			if(($_POST['username'] == $row['EMAIL_GU']) && ($_POST['password'] == $row['MOT_DE_PASSE_GU'])){
				$_SESSION['id_gu'] = $row['ID_GU'];
				$_SESSION['nom'] = $row['NOM_GU'];
				$_SESSION['prenom'] = $row['PRENOM_GU'];
				$_SESSION['type'] = 'GuichetUnique'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		}
				$vue = new Vue('MotDePasseIncorrectGU');
				$vue->genererPageSansTemplate();
	}else if($action == "deconnexion"){
			session_unset ();
			session_destroy ();
			$vue = new Vue('listeTousDemande');
		$vue->genererHome();
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
		$statut = $_GET['statut']; 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Lister($statut))); 
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
	}else if($action == "transmettreInventionCir"){
		$controller = new InventionController();
		$controller->TransmettreInventionCir($_GET['id_dmd']); 
		$vue = new Vue('TransmettreDosiierCir'); 
		$vue->generer(array()); 
	}else if($action == "RefuserDemandeGu"){
		$controller = new InventionController();
		$controller->RefuserInventionGu($_GET['id_dmd']); 
		$vue = new Vue('RefuserInventionGu'); 
		$vue->generer(array());
	}else if($action =="InventionPretes"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}else if($action =="AccepterInventionCir"){
		$controller = new InventionController();
		$controller->AccepterInventionGu($_GET['id_dmd']); 
		$vue = new Vue('AccepterDeamnde'); 
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
		$statut =$_GET['statut']; 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->Lister($statut))); 
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
	}else if($action =="brevetsPretes"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}else if($action=="transmettreBrevetCir"){
		$controller = new BrevetController();
		$controller->TransmettreBrevetCir($_GET['id_dmd']); 
		$vue = new Vue('TransmettreDosiierCir'); 
		$vue->generer(array()); 
	}else if($action == "RefuserBrevetGu"){
		$controller = new BrevetController();
		$controller->RefuserBrevetGu($_GET['id_dmd']); 
		$vue = new Vue('RefuserInventionGu'); 
		$vue->generer(array());
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
		$statut =$_GET['statut']; 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array( "statement" => $controller->Lister($statut))); 
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
	}else if($action == "transmettreFormationCir"){
		$controller = new FormationController();
		$controller->TransmettreFormationCir($_GET['id_dmd']); 
		$vue = new Vue('TransmettreDosiierCir'); 
		$vue->generer(array());
	}else if($action == "RefuserFormationGu"){
		$controller = new FormationController();
		$controller->RefuserFormationGu($_GET['id_dmd']); 
		$vue = new Vue('RefuserInventionGu'); 
		$vue->generer(array());
	}else if($action == "FormationPretes"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}

    //liste demandes
    else if($action == "listeDemandeEnCours"){
		$brevet= (new BrevetController())->Lister();
		$invention= (new InventionController())->Lister();
		$formation= (new FormationController())->Lister();

		$vue = new Vue('listeDemandeEncours'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation));  
	}
	else if($action == "listeDemandeTraite"){
		$brevet= (new BrevetController())->Lister();
		$invention= (new InventionController())->Lister();
		$formation= (new FormationController())->Lister();

		$vue = new Vue('listeDemandeTraite'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation));  
	}
	else if($action == "listeTousDemande"){
		$brevet= (new BrevetController())->Lister();
		$invention= (new InventionController())->Lister();
		$formation= (new FormationController())->Lister();

		$vue = new Vue('listeTousDemande'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation));  
	}else if($action == "Home"){
		$vue = new Vue('listeTousDemande');
		$vue->genererHome();
	}


	//services & gestions
	else if($action == "ajouterPoolCompetence"){
		$vue = new Vue('ajouterPoolCompetence'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutPoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$controller->Ajouter($_POST);
		$statement= $controller->Lister();
		$vue = new Vue('listePoolCompetence'); 
		$alert="la demande a été bien crée"; 
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	else if($action == "listePoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$statement= $controller->Lister();
		$vue = new Vue('listePoolCompetence'); 
		$vue->generer(array( "statement" => $statement)); 
	}
	else if($action =="updatePoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$vue = new Vue('updatePoolCompetence'); 
		$vue->generer(array("row" => $controller->Detail($_GET['id'])));
	}
	else if($action == "saveUpdatePoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$id = $_GET["id"]; 
		$controller->Modifier($_POST,$id);
		$statement= $controller->Lister();
		$vue = new Vue('listePoolCompetence'); 
		$alert="la demande a été bien modifiée";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert)); 
	}
	else if($action == "deletePoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$id = $_GET["id"]; 
		$controller->Supprimer($id);
		$statement= $controller->Lister();
		$vue = new Vue('listePoolCompetence'); 
		$alert="la demande a été bien supprimée";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}

