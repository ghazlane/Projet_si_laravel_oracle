<?php
session_start();
	require_once 'Views\Vue.php';	
	require_once ("Controllers/InventionController.php");
	require_once ("Controllers/BrevetController.php");
	require_once ("Controllers/FormationController.php");
	require_once ("Controllers/StartupController.php");
	require_once ("Controllers/GuichetUniqueController.php");
	require_once ("Controllers/ProfesseurController.php");
	require_once ("Controllers/EtudiantController.php");
	require_once ("Controllers/ChercheurController.php");
	require_once ("Controllers/PoolCompetenceController.php");
	require_once ("Controllers/RespPoolCompetenceController.php");
	require_once ("Controllers/ResponsableCirController.php");
	require_once ("Controllers/PointNodalController.php");
	require_once ("Controllers/EtablissementController.php");
	require_once ("Controllers/StatistiqueController.php");

	//require_once("controllers\DeclarationInventionController.php");
	$action = empty($_GET["action"])?"Accueil":$_GET["action"];
	
	//Etudiant
	function getLatestMonth($dernierMois){
    $arParMois = array();
  $date_courant = date("Y-m-d");
    $year = date("Y");
    for($i = 0; $i < $dernierMois; $i++){
           if($i === 0){
                $arParMois[$i] = array(
                  'month' => date("m"),
          'year' => $year
                );
            }else{
                $mois = date("m", strtotime("-1 month", strtotime($date_courant)));
        if($mois == '12')
        {
        $year = date("Y", strtotime("-1 year", strtotime($date_courant)));
        }
 
                $arParMois[$i] = array(
                    'month' => $mois,
          'year' => $year
                );
                $date_courant = date($year."-".$mois."-d");
            }
        }
  return $arParMois;
}


	//Etudiant

	if($action == "ajouterEtudiant"){
		$vue = new Vue('ajouterEtudiant'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutEtudiant"){
		$controller = new EtudiantController(); 
		$rep=$controller->Ajouter($_POST);
		$vue = new Vue('listeEtudiant'); 
		if ($rep == true) 
		$alert="Félicitations ! Votre nouveau compte étudiant a été créé avec succès !";
	    else if ($rep == false)
	    $alert="Vous n'êtes pas un étudiant ! La création du compte est annulée ! "; 
		$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
	}
	else if($action == "registerEtudiant"){
		$vue = new Vue("registerEtudiant"); 
		$vue->genererPageSansTemplate();
	}
	else if($action == "saveRegisterEtudiant"){
		$controller = new EtudiantController(); 
		$rep=$controller->Ajouter($_POST);
		$vue = new Vue('createSuccess');
		if ($rep == true) 
		$alert="Félicitations ! Votre nouveau compte étudiant a été créé avec succès !";
	    else  
	    $alert="Vous n'êtes pas un étudiant ! La création du compte est annulée !";

		$vue->genererHome(array("alert" => $alert));    
	}
	else if($action == "listeEtudiant"){
		$controller = new EtudiantController(); 
		$vue = new Vue('listeEtudiant'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action == "updateEtudiant"){
		$controller = new EtudiantController();
		$vue = new Vue('updateEtudiant'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}
	else if($action =="saveUpdateEtudiant"){
		$controller = new EtudiantController();
		$resultat = $controller->Update($_POST); 
		if($resultat == true){
			$alert="le compte étudiant a été bien modifiée";
			$vue = new Vue('listeEtudiant');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}else {
			$vue = new Vue('createFailed'); 
			$vue->generer(array()); 
		}
	}
	else if($action == "detailEtudiant"){
		$controller = new EtudiantController(); 
		$vue = new Vue('detailsEtudiant');
		$vue->generer(array("statement" => $controller->Details($_GET['id']))); 
	}
	else if($action == "deleteEtudiant"){
		$controller = new EtudiantController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeEtudiant'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action == "connexionEtudiant"){
		$controller = new EtudiantController(); 
		$statement = $controller->Lister(); 
		while ($row = $statement->fetch()) {
			if(($_POST['email'] == $row['EMAIL_ET']) && ($_POST['password'] == $row['MOT_DE_PASSE_ET'])){
				$_SESSION['code'] = $row['CODE_ET'];
				$_SESSION['nom'] = $row['NOM_ET'];
				$_SESSION['prenom'] = $row['PRENOM_ET'];
				$_SESSION['type'] = 'etudiant'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		}
		$vue = new Vue('MotDePasseIncorrectEtudiant');
		$vue->genererPageSansTemplate();
	}
	//Chercheur
	else if($action == "registerChercheur"){
		$vue = new Vue("registerChercheur"); 
		$vue->genererPageSansTemplate();
	}
	else if($action == "saveAjoutChercheur"){
		$controller = new ChercheurController(); 
		$rep=$controller->Ajouter($_POST);
		$vue = new Vue('listeChercheur'); 
		if ($rep == true) 
		$alert="Félicitations ! Votre nouveau compte chercheur a été créé avec succès !";
	    else  
	    $alert="Vous n'êtes pas un chercheur ! La création du compte est annulée ! "; 
		$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
	}
	else if($action == "ajouterChercheur"){
		$vue = new Vue('ajouterChercheur'); 
		$vue->generer(array()); 
	}
	else if($action == "saveRegisterChercheur"){
		$controller = new ChercheurController(); 
		$rep=$controller->Ajouter($_POST);
		$vue = new Vue('createSuccess');
		if ($rep == true) 
		$alert="Félicitations ! Votre nouveau compte chercheur a été créé avec succès !";
	    else  
	    $alert="Vous n'êtes pas un chercheur ! La création du compte est annulée ! ";

		$vue->genererHome(array("alert" => $alert));
	}
	else if($action == "listeChercheur"){
		$controller = new ChercheurController(); 
		$vue = new Vue('listeChercheur'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action == "updateChercheur"){
		$controller = new ChercheurController();
		$vue = new Vue('updateChercheur'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}
	else if($action =="saveUpdateChercheur"){
		$controller = new ChercheurController();
		$resultat = $controller->Update($_POST); 
		if($resultat == true){
			$alert="le compte chercheur a été bien modifié";
			$vue = new Vue('listechercheur');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}else {
			$alert="le mot de passe est incorrecte";
			$vue = new Vue('listeChercheur');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}
	}
	else if($action == "detailChercheur"){
		$controller = new ChercheurController(); 
		$vue = new Vue('detailsChercheur');
		$vue->generer(array("statement" => $controller->Details($_GET['id']))); 
	}
	else if($action == "deleteChercheur"){
		$controller = new ChercheurController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeChercheur'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action == "connexionChercheur"){
		$controller = new ChercheurController(); 
		$statement = $controller->Lister(); 
		while ($row = $statement->fetch()) {
			if(($_POST['email'] == $row['EMAIL_CHER']) && ($_POST['password'] == $row['MOT_DE_PASSE_CHER'])){
				//session_start();
				$_SESSION['code'] = $row['CODE_CHER'];
				$_SESSION['nom'] = $row['NOM_CHER'];
				$_SESSION['prenom'] = $row['PRENOM_CHER'];
				$_SESSION['type'] = 'chercheur'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		}
		$vue = new Vue('MotDePasseIncorrectCher');
		$vue->genererPageSansTemplate();
	}
	//Professeur
	else if($action == "registerProfesseur"){
		$vue = new Vue("registerProfesseur"); 
		$vue->genererPageSansTemplate();
	}
	else if($action == "ajouterProfesseur"){
		$vue = new Vue('ajouterProfesseur'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutProfesseur"){
		$controller = new ProfesseurController(); 
		$rep=$controller->Ajouter($_POST);
		$vue = new Vue('listeProfesseur'); 
		if ($rep == true) 
		$alert="Félicitations ! Votre nouveau compte professeur a été créé avec succès !";
	    else  
	    $alert="Vous n'êtes pas un professeur ! La création du compte est annulée ! "; 
		$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert));  

	}else if($action == "saveRegisterProfesseur"){
		$controller = new ProfesseurController(); 
		$rep=$controller->Ajouter($_POST);
		$vue = new Vue('createSuccess');
		if ($rep == true) 
		$alert="Félicitations ! Votre nouveau compte professeur a été créé avec succès !";
	    else  
	    $alert="Vous n'êtes pas un professeur ! La création du compte est annulée ! ";

		$vue->genererHome(array("alert" => $alert));   
	}
	else if($action == "listeProfesseur"){
		$controller = new ProfesseurController(); 
		$vue = new Vue('listeProfesseur'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action == "updateProfesseur"){
		$controller = new ProfesseurController();
		$vue = new Vue('updateProfesseur'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}
	else if($action =="saveUpdateProfesseur"){
		$controller = new ProfesseurController();
		$resultat = $controller->Update($_POST); 
		if($resultat == true){
			$alert="le compte professeur a été bien modifiée";
			$vue = new Vue('listeProfesseur');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}else {
			$alert="le mot de passe est incorrecte";
			$vue = new Vue('listeProfesseur');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}
	}
	else if($action == "detailProfesseur"){
		$controller = new ProfesseurController(); 
		$vue = new Vue('detailsProfesseur');
		$vue->generer(array("statement" => $controller->Details($_GET['id']))); 
	}
	else if($action == "deleteProfesseur"){
		$controller = new ProfesseurController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeProfesseur'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}
	else if($action == "connexionProfesseur"){
		$controller = new ProfesseurController(); 
		$statement = $controller->Lister(); 
		while ($row = $statement->fetch()) {
			if(($_POST['email'] == $row['EMAIL_PROF']) && ($_POST['password'] == $row['MOT_DE_PASSE_PROF'])){
				$_SESSION['code'] = $row['CODE_PROF'];
				$_SESSION['nom'] = $row['NOM_PROF'];
				$_SESSION['prenom'] = $row['PRENOM_PROF'];
				$_SESSION['type'] = 'professeur'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		}
		$vue = new Vue('MotDePasseIncorrectProfesseur');
		$vue->genererPageSansTemplate();
	}


	//Guichet unique;
	else if($action == "ajouterGuichetUnique"){
		$vue = new Vue('ajouterGuichetUnique'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutGuichetUnique"){
		$controller = new GuichetUniqueController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('listeGuichetUnique');  
		$alert="Félicitations ! Votre nouveau compte Guichet Unique a été créé avec succès !";
		$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
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
			$alert="le compte Guichet Unique
 a été bien modifiée";
			$vue = new Vue('listeGuichetUnique');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}else {
			$alert="le mot de passe est incorrecte";
			$vue = new Vue('listeGuichetUnique');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
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
	}
//Responsable CIR

	if($action == "ajouterResponsableCir"){
		$vue = new Vue('ajouterResponsableCir'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutResponsableCir"){
		$controller = new ResponsableCirController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('listeResponsableCir');  
		$alert="Félicitations ! Votre nouveau compte Responsable Cir a été créé avec succès !";
		$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert));  
	}else if($action == "listerResponsableCir"){
		$controller = new ResponsableCirController(); 
		$vue = new Vue('listeResponsableCir'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}else if($action == "updateResponsableCir"){
		$controller = new ResponsableCirController();
		$vue = new Vue('updateResponsableCir'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}else if($action =="saveUpdateResponsableCir"){
		$controller = new ResponsableCirController();
		$resultat = $controller->Update($_POST); 
		if($resultat == true){
			$alert="le compte Responsable Cir
 a été bien modifiée";
			$vue = new Vue('listeResponsableCir');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}else {
			$alert="le mot de passe est incorrecte";
			$vue = new Vue('listeResponsableCir');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}
	}else if($action == "detailResponsableCir"){
		$controller = new ResponsableCirController(); 
		$vue = new Vue('detailsResponsableCir');
		$vue->generer(array("statement" => $controller->Details($_GET['id']))); 
	}else if($action == "deleteResponsableCir"){
		$controller = new ResponsableCirController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeResponsableCir'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}else if($action == "connexionResponsableCir"){
		$controller = new ResponsableCirController(); 
		$statement = $controller->Lister(); 
		while ($row = $statement->fetch()) {
			if(($_POST['username'] == $row['EMAIL_CIR']) && ($_POST['password'] == $row['MOT_DE_PASSE_CIR'])){
				$_SESSION['id_cir'] = $row['ID_CIR'];
				$_SESSION['nom'] = $row['NOM_CIR'];
				$_SESSION['prenom'] = $row['PRENOM_CIR'];
				$_SESSION['type'] = 'ResponsableCir'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		}
				$vue = new Vue('MotDePasseIncorrectResponsableCir');
				$vue->genererPageSansTemplate();
	}



	else if($action == "deconnexion"){
			session_unset ();
			session_destroy ();
			$vue = new Vue('listeTousDemande');
		$vue->genererHome(array());
	}

	
	else if($action == 'Accueil'){
		$vue = new Vue('accueil'); 
		$vue->genererHome(array());
		//$vue->generer(array()); 
	}
	//Invention 
	else if($action == 'declarationInvention'){
		$vue = new Vue('declarationInvention'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationInvention"){
		$controller = new InventionController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("alert"=>'La déclaration a bien été ajoutée', "statement" => $controller->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code']))); 
	}else if($action == "listeDeclarationInvention"){
		$controller = new InventionController(); 
		$statut = $_GET['statut']; 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Lister($statut))); 
	}else if($action == "detailDeclarationInvention"){ 
		$controller = new InventionController(); 
		$vue = new Vue('detailsDeclarationInvention');
		$vue->generer(array("statement" => $controller->Details($_GET['id']), "nomAndPrenomDemandeur"=> $controller->getInfoDemandeur($_GET['id']),"listePc" => $controller->getInfoPc())); 
	}else if($action == "deleteDeclarationInvention"){
		$controller = new InventionController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("alert"=>'La demande est supprimée ',"statement" => $controller->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code'])));
	}else if($action =="updateDeclarationInvention"){
		$controller = new InventionController();
		$vue = new Vue('updateDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}else if($action == "saveUpdateDeclarationInvention"){
		$controller = new InventionController();
		$controller->Update($_POST);
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("alert"=>'La déclaration est à jour', "statement" => $controller->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code']))); 
	}else if($action == "transmettreInventionCir"){
		$controller = new InventionController();
		$controller->TransmettreInventionCir($_GET['id_dmd']);  
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("alert"=>'Le dossier est bien transmis', "statement" => $controller->Lister('Enattente'))); 
	}else if($action=="transmettreInventionPc"){
		$controller = new InventionController();
		$controller->TransmettreInventionPc($_GET['id_dmd'],$_POST); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array('alert'=>'Le dessier a été transmis', "statement" => $controller->ListeAccepterParGU()));
	}else if($action == "DemandePretPourCirInvention"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->DemandePretPourCir()));
	}else if($action == "decisionFinaleCirInvention"){
		$controller = new InventionController(); 
		$controller->setDecisionFinaleCir($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array('alert'=>'Décision finale bien envoyée',"statement" => $controller->DemandePretPourCir()));
	}else if($action == "RefuserDemandeGu"){
		$controller = new InventionController();
		$controller->RefuserInventionGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("alert"=>'La déclaration a été refusée', "statement" => $controller->Lister('Enattente'))); 
	}else if($action == "RefuserInventionCir"){
		$controller = new InventionController();
		$controller->RefuserInventionGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array('alert'=>'Le dessier a été refusé', "statement" => $controller->ListeAccepterParGU()));
	}else if($action =="InventionPretes"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}else if($action =="inventionsAccepterParGU"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->ListeAccepterParGU()));
	}else if($action =="inventionsEncoursCIR"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->Lister('Encours')));
	}else if($action =="AccepterInventionCir"){
		$controller = new InventionController();
		$controller->AccepterInventionGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array('alert'=>'Demande acceptée', "statement" => $controller->ListePretes()));
	}

    //brevet
    else if($action == 'declarationBrevet'){
		$vue = new Vue('declarationBrevet'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationBrevet"){
		$controller = new BrevetController(); 
		$controller->Ajouter($_POST);
		$statement= $controller->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code']);
		$vue = new Vue('listeDeclarationBrevet'); 
		$alert="la demande a bien été ajoutée"; 
		$vue->generer(array("statement" => $statement,"alert"=>$alert)); 
	}
	else if($action == "listeDeclarationBrevet"){
		$controller = new BrevetController(); 
		$statut = $_GET['statut']; 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->Lister($statut))); 
	}
	else if($action == "rechercheBrevet"){
		$controller = new BrevetController();
		$id = $_GET["id"]; 
		$row= $controller->Detail($id);
		$prof = $controller->getInfoDemandeur($id);
		$vue = new Vue('detailDeclarationBrevet'); 
		$vue->generer(array( "row" => $row, "nomAndPrenomDemandeur"=> $prof ,"listePc" => $controller->getInfoPc())); 
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
		$statement= $controller->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code']);
		$vue = new Vue('listeDeclarationBrevet'); 
		$alert="la demande a bien été modifiée";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	else if($action == "supprimerBrevet"){
		$controller = new BrevetController(); 
		$id = $_GET["id"]; 
		$controller->Supprimer($id);
		$statement= $controller->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code']);
		$vue = new Vue('listeDeclarationBrevet'); 
		$alert="la demande a été suppriméee";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}else if($action =="brevetsPretes"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}else if($action =="brevetsAccepterParGU"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->ListeAccepterParGU()));
	}else if($action =="brevetsEncoursCIR"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->Lister('Encours')));
	}
	else if($action=="transmettreBrevetCir"){
		$controller = new BrevetController();
		$controller->TransmettreBrevetCir($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("alert"=>'Le dossier est bien transmis ', "statement" => $controller->Lister('Enattente')));  
	}else if($action=="transmettreBrevetPc"){
		$controller = new BrevetController();
		$controller->TransmettreBrevetPc($_GET['id_dmd'],$_POST); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array('alert'=>'La demande a été transmise', "statement" => $controller->ListeAccepterParGU())); 
	}else if($action == "RefuserBrevetGu"){
		$controller = new BrevetController();
		$controller->RefuserBrevetGu($_GET['id_dmd']);
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("alert"=>'Le dossier a été refusé ', "statement" => $controller->Lister('Enattente'))); 
	}else if($action == "RefuserBrevetCir"){
		$controller = new BrevetController();
		$controller->RefuserBrevetGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array('alert'=>'Le dossier a été refusé', "statement" => $controller->ListeAccepterParGU()));
	}else if($action =="AccepterBrevetGu"){
		$controller = new BrevetController();
		$controller->AccepterBrevetGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array('alert'=>'Demande acceptée', "statement" => $controller->ListePretes()));
	}
	else if($action == "DemandePretPourCirBrevet"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->DemandePretPourCir()));
	}
	else if($action == "decisionFinaleCirBrevet"){
		$controller = new BrevetController(); 
		$controller->setDecisionFinaleCir($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array('alert'=>'Décision finale bien envoyée',"statement" => $controller->DemandePretPourCir()));
	}


	//Formation 
	else if($action == 'declarationFormation'){
		$vue = new Vue('declarationFormation'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationFormation"){
		$controller = new FormationController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("alert"=>'La déclaration a bien été ajoutée', "statement" => $controller->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code']))); 
	}
	else if($action == "listeDeclarationFormation"){
		$controller = new FormationController(); 
		$statut = $_GET['statut']; 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array( "statement" => $controller->Lister($statut))); 
	}
	else if($action == "detailsDeclarationFormation"){ 
		$controller = new FormationController(); 
		$vue = new Vue('detailsDeclarationFormation');
		$controller2 = new BrevetController();
		$vue->generer(array("listePc" => $controller2->getInfoPc(), "statement" => $controller->Details($_GET['id']), "nomAndPrenomDemandeur"=> $controller->getInfoDemandeur($_GET['id']))); 
	}
	else if($action == "deleteDeclarationFormation"){
		$controller = new FormationController(); 
		$controller->Supprimer($_GET['id']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("alert"=>'La suppression est bien faite', "statement" => $controller->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code'])));
	}
	else if($action =="updateDeclarationFormation"){
		$controller = new FormationController();
		$vue = new Vue('updateDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}
	else if($action == "saveUpdateDeclarationFormation"){
		$controller = new FormationController();
		$controller->Update($_POST); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("alert"=>'La mise à jour est bien faite', "statement" => $controller->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code'])));

	}else if($action == "transmettreFormationCir"){
		$controller = new FormationController();
		$controller->TransmettreFormationCir($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array( "alert"=>'Le dessier est bien transmis', "statement" => $controller->Lister('Enattente'))); 
	}else if($action == "transmettreFormationPc"){
		$controller = new FormationController();
		$controller->TransmettreFormationPc($_GET['id_dmd'],$_POST); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array('alert'=>'La demande a été transmise', "statement" => $controller->ListeAccepterParGU())); 
	}else if($action == "RefuserFormationGu"){
		$controller = new FormationController();
		$controller->RefuserFormationGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array( "alert"=>'Le dessier est bien transmis', "statement" => $controller->Lister('Enattente'))); 
	}else if($action == "RefuserFormationCir"){
		$controller = new FormationController();
		$controller->RefuserFormationGu($_GET['id_dmd']);
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array('alert'=>'La demande a été refusée', "statement" => $controller->ListeAccepterParGU())); 		
	}else if($action == "FormationPretes"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}else if($action =="formationsAccepterParGU"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->ListeAccepterParGU()));
	}else if($action =="formationsEncoursCIR"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->Lister('Encours')));
	}else if($action =="AccepterFormationGu"){
		$controller = new FormationController();
		$controller->AccepterFormationGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array('alert'=>'La demande est acceptée',"statement" => $controller->ListePretes()));
	}
	else if($action == "DemandePretPourCirFormation"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->DemandePretPourCir()));
	}
	else if($action == "decisionFinaleCirFormation"){
		$controller = new FormationController(); 
		$controller->setDecisionFinaleCir($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array('alert'=>'Décision finale bien envoyée', "statement" => $controller->DemandePretPourCir()));
	}

    //liste demandes
    else if($action == "listeDemandeEnCours"){
    	$statut=$_GET['statut'];
		$brevet= (new BrevetController())->Lister($statut);
		$invention= (new InventionController())->Lister($statut);
		$formation= (new FormationController())->Lister($statut);
		$startup= (new StartupController())->Lister($statut);
		$vue = new Vue('listeDemandeEncours'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation,"startup" => $startup));  
	}
	else if($action == "listeDemandeTraite"){
		$statut=$_GET['statut'];
		$brevet= (new BrevetController())->Lister($statut);
		$invention= (new InventionController())->Lister($statut);
		$formation= (new FormationController())->Lister($statut);
		$startup= (new StartupController())->Lister($statut);

		$vue = new Vue('listeDemandeTraite'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation, "startup" => $startup));  
	}
	else if($action == "listeTousDemande"){

		$brevet= (new BrevetController())->Lister(null);
		$invention= (new InventionController())->Lister(null);
		$formation= (new FormationController())->Lister(null);
		$startup= (new StartupController())->Lister(null);

		$vue = new Vue('listeTousDemande'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation, "startup" => $startup));  
	}else if($action == "Home"){
		$vue = new Vue('listeTousDemande');
		$vue->genererHome();
	}



	//services & gestions
	//pool comp
	else if($action == "ajouterPoolCompetence"){
		$vue = new Vue('ajouterPoolCompetence'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutPoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$controller->Ajouter($_POST);
		$statement= $controller->Lister();
		$vue = new Vue('listePoolCompetence'); 
		$alert="le service pool de compétence a bien été  créé"; 
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
		$alert="le service a bien été modifié";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert)); 
	}
	else if($action == "deletePoolCompetence"){
		$controller = new PoolCompetenceController(); 
		$id = $_GET["id"]; 
		$controller->Supprimer($id);
		$statement= $controller->Lister();
		$vue = new Vue('listePoolCompetence'); 
		$alert="le service a été bien supprimé";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	//point nodal
	else if($action == "ajouterPointNodal"){
		$vue = new Vue('ajouterPointNodal'); 
		$vue->generer(array()); 
	}
	else if($action == "saveAjoutPointNodal"){
		$controller = new PointNodalController(); 
		$controller->Ajouter($_POST);
		$statement= $controller->Lister();
		$vue = new Vue('listePointNodal'); 
		$alert="le service point nodal a été bien créé"; 
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	else if($action == "listePointNodal"){
		$controller = new PointNodalController(); 
		$statement= $controller->Lister();
		$vue = new Vue('listePointNodal'); 
		$vue->generer(array( "statement" => $statement)); 
	}
	else if($action =="updatePointNodal"){
		$controller = new PointNodalController(); 
		$vue = new Vue('updatePointNodal'); 
		$vue->generer(array("row" => $controller->Detail($_GET['id'])));
	}
	else if($action == "saveUpdatePointNodal"){
		$controller = new PointNodalController(); 
		$id = $_GET["id"]; 
		$controller->Modifier($_POST,$id);
		$statement= $controller->Lister();
		$vue = new Vue('listePointNodal'); 
		$alert="le service a été bien modifié";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert)); 
	}
	else if($action == "deletePointNodal"){
		$controller = new PointNodalController(); 
		$id = $_GET["id"]; 
		$controller->Supprimer($id);
		$statement= $controller->Lister();
		$vue = new Vue('listePointNodal'); 
		$alert="le service a été bien supprimé";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	//etablissement
		else if($action == "ajouterEtablissement"){
		$controller = new PointNodalController(); 
		$statement= $controller->Lister();
		
		$vue = new Vue('ajouterEtablissement'); 
		$vue->generer(array( "statement" => $statement));  
	}
	else if($action == "saveAjoutEtablissement"){
		$controller = new EtablissementController(); 
		$controller->Ajouter($_POST);
		$statement= $controller->Lister();
		$vue = new Vue('listeEtablissement'); 
		$alert="le service établissement a été bien créé"; 
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}
	else if($action == "listeEtablissement"){
		$controller = new EtablissementController(); 
		$statement= $controller->Lister();
		$vue = new Vue('listeEtablissement'); 
		$vue->generer(array( "statement" => $statement)); 
	}
	else if($action =="updateEtablissement"){
		$controller = new EtablissementController();
		$pn = new PointNodalController();  
		$vue = new Vue('updateEtablissement'); 
		$vue->generer(array("row" => $controller->Detail($_GET['id']),"statement"=>$pn->Lister() ));
	}
	else if($action == "saveUpdateEtablissement"){
		$controller = new EtablissementController(); 
		$id = $_GET["id"]; 
		$controller->Modifier($_POST,$id);
		$statement= $controller->Lister();
		$vue = new Vue('listeEtablissement'); 
		$alert="le service été bien modifié";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert)); 
	}
	else if($action == "deleteEtablissement"){
		$controller = new EtablissementController(); 
		$id = $_GET["id"]; 
		$controller->Supprimer($id);
		$statement= $controller->Lister();
		$vue = new Vue('listeEtablissement'); 
		$alert="le service a bien été supprimé";
		$vue->generer(array( "statement" => $statement,"alert"=>$alert));  
	}

	// Responsable pool de competences ;;; 
	else if($action =="ajouterResponsablePoolCompetences"){
		$controller = new PoolCompetenceController(); 
		$vue = new Vue('ajouterResponsablePoolCompetences'); 
		$vue->generer(array("statement" => $controller->Lister())); 
	}else if($action == "saveAjouterResponsablePoolCompetences"){
		$controller = new RespPoolCompetenceController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('listerResponsablePoolCompetences'); 
		$alert="le compte responsable pool de compétence a bien été ajoutée"; 
		$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		
	}else if($action == "ListerResponsablePoolCompetences"){
		$controller = new RespPoolCompetenceController(); 
		$vue = new Vue('listerResponsablePoolCompetences'); 
		$vue->generer(array( "statement" => $controller->Lister()));
	}else if ($action =="deleteRspPoolCompetence"){
		$controller = new RespPoolCompetenceController(); 
		$controller->Delete($_GET['id']); 
		$vue = new Vue('listerResponsablePoolCompetences'); 
		$vue->generer(array("statement" => $controller->Lister()));
	}else if($action =="updateRspPoolCompetence"){
		$controller = new RespPoolCompetenceController();  
		$vue = new Vue('updateRspPoolCompetence'); 
		$controller2 = new PoolCompetenceController();
		$vue->generer(array("statement" => $controller->Details($_GET['id']), "pc"=>$controller2->Lister()));
	}else if($action =="saveUpdateResponsablePoolCompetences"){
		$controller = new RespPoolCompetenceController();
		$resultat = $controller->Update($_POST); 
		if($resultat == true){
			$alert="le compte Responsable Pool de Compétence
 a été bien modifiée";
			$vue = new Vue('listerResponsablePoolCompetencesr');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}else {
			$alert="le mot de passe est incorrecte";
			$vue = new Vue('listerResponsablePoolCompetencesr');
			$vue->generer(array("statement" => $controller->Lister(),"alert"=>$alert)); 
		}
	}else if($action =="connexionRespPoolCompetence"){
		$controller = new RespPoolCompetenceController(); 
		$statement = $controller->Lister(); 
		while ($row = $statement->fetch()) {
			if(($_POST['username'] == $row['EMAIL_RESP_PC']) && ($_POST['password'] == $row['MOT_DE_PASSE_PC'])){
				$_SESSION['id_rsp_pc'] = $row['ID_RESP_PC'];
				$_SESSION['id_pc'] = $row['ID_PC'];
				$_SESSION['nom'] = $row['NOM_RESP_PC'];
				$_SESSION['prenom'] = $row['PRENOM_RESP_PC'];
				$_SESSION['type'] = 'RespPoolCompetence'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		}
				$vue = new Vue('MotDePasseIncorrectRespPoolCompetences');
				$vue->genererPageSansTemplate();
	}else if($action == "NouvelleDeclarationPoolsCompetences"){
				$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->ListeNouvelleDecalarationInventionRspPoolCompetences($_SESSION['id_pc']))); 
	}else if($action == "NouvelleLancementFormationPoolsCompetences"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->NouvelleLancementFormationPoolsCompetences($_SESSION['id_pc']))); 
	}else if($action == "RespPoolCompetenceFormation"){
		$controller = new FormationController(); 
		$controller->setReponsePoolCompetences($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array('alert'=>'Réponse envoyée' , "statement" => $controller->NouvelleLancementFormationPoolsCompetences($_SESSION['id_pc']))); 
	}else if ($action =="RespPoolCompetenceInvention"){
		$controller = new InventionController(); 
		$controller->setReponsePoolCompetences($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array('alert'=>'Réponse envoyée', "statement" => $controller->ListeNouvelleDecalarationInventionRspPoolCompetences($_SESSION['id_pc']))); 
	}else if($action == "NouvelleDeclarationBrevetPoolsCompetences"){
				$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		//echo $_SESSION['id_pc']; 
		$vue->generer(array("statement" => $controller->ListeNouvelleDecalarationBrevetRspPoolCompetences($_SESSION['id_pc']))); 
	}else if ($action =="RespPoolCompetenceBrevet"){
		$controller = new BrevetController(); 
		$controller->setReponsePoolCompetences($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationBrevet'); 
		//echo $_SESSION['id_pc']; 
		$vue->generer(array('alert'=>'Réponse envoyée',"statement" => $controller->ListeNouvelleDecalarationBrevetRspPoolCompetences($_SESSION['id_pc'])));  
	}

	//action home 
	else if($action =="loginProfesseur"){
		$vue = new Vue("loginProfesseur"); 
		$vue->genererPageSansTemplate(); 
	}else if($action == "accueilClient"){
		$vue = new Vue("accueil"); 
		$vue->generer(array()); 
	}

	//action cient connecter
	else if($action =="listeDeclarationInventionClient"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code']))); 
	}else if($action == "listeDeclarationInventionClientTraitees"){
		$controller = new InventionController(); 
		$vue = new Vue('listeDeclarationInvention'); 
		$vue->generer(array("statement" => $controller->listeDeclarationInventionClientTraitees($_SESSION['type'], $_SESSION['code'])));
	}else if($action == "listeDeclarationBrevetClient"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code'])));
	}else if($action == "listeDeclarationBrevetClientTraitees"){
		$controller = new BrevetController(); 
		$vue = new Vue('listeDeclarationBrevet'); 
		$vue->generer(array("statement" => $controller->listeDeclarationBrevetClientTraitees($_SESSION['type'], $_SESSION['code'])));
	}else if($action =="listeDeclarationFormationClient"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code'])));
	}else if($action == "listeDeclarationFormationClientTraitees"){
		$controller = new FormationController(); 
		$vue = new Vue('listeDeclarationFormation'); 
		$vue->generer(array("statement" => $controller->listeDeclarationFormationClientTraitees($_SESSION['type'], $_SESSION['code'])));
	}else if($action == "listeDemandeEnCoursClient"){
		$brevet= (new BrevetController())->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code']);
		$invention= (new InventionController())->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code']);
		$formation= (new FormationController())->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code']);
		$startup= (new StartupController())->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code']);
		$vue = new Vue('listeDemandeEncours'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation, "startup" => $startup)); 
	}else if($action == "listeDemandeTraiteClient"){
		$brevet= (new BrevetController())->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code']);
		$invention= (new InventionController())->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code']);
		$formation= (new FormationController())->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code']);
		$startup= (new StartupController())->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code']);
		$vue = new Vue('listeDemandeTraite'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation, "startup" => $startup));
	}else if($action == "listeTousDemandeClient"){
		$brevet= (new BrevetController())->listeDeclarationBrevetClient($_SESSION['type'], $_SESSION['code']);
		$invention= (new InventionController())->listeDeclarationInventionClient($_SESSION['type'], $_SESSION['code']);
		$formation= (new FormationController())->listeDeclarationFormationClient($_SESSION['type'], $_SESSION['code']);
		$startup= (new StartupController())->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code']);
		$vue = new Vue('listeTousDemande'); 
		$vue->generer(array( "brevet" => $brevet,"invention" => $invention,"formation" => $formation, "startup" => $startup));
	}


	//chercheur 
	else if($action== "loginChercheur"){
		$vue = new Vue("loginChercheur"); 
		$vue->genererPageSansTemplate(); 
	}

	//other login
	else if($action == "loginEtudiant"){
		$vue = new Vue("loginEtudiant"); 
		$vue->genererPageSansTemplate(); 

	}else if($action == "loginGuichetUnique"){
		$vue = new Vue("loginGuichetUnique"); 
		$vue->genererPageSansTemplate(); 
	}else if($action == "loginResponsableCir"){
		$vue = new Vue("loginRespCir"); 
		$vue->genererPageSansTemplate();
	}else if($action == "loginRespPoolCompetence"){
		$vue = new Vue("loginRespPoolCompetence"); 
		$vue->genererPageSansTemplate();
	}
	


	//administrateur
	else if($action == "loginAdministrateur"){
		$vue = new Vue("loginAdministrateur"); 
		$vue->genererPageSansTemplate(); 
	}
	else if($action == "connexionAdministrateur"){
		
			if(($_POST['email'] == "amrani@gmail.com") && ($_POST['password'] == "123456")){
				//session_start();
				$_SESSION['code'] = "123456";
				$_SESSION['nom'] = "AMRANI";
				$_SESSION['prenom'] = "Ahmed";
				$_SESSION['type'] = 'administrateur'; 
				$vue = new Vue('accueil'); 
				$vue->generer(array());
				return;  
			}
		
		$vue = new Vue('MotDePasseIncorrectAdmin');
		$vue->genererPageSansTemplate();
	}



	//statistique 
	else if($action == "getDahsboard"){
		$controller = new StatistiqueController();
		$controllerPoolCompetences = new PoolCompetenceController(); 
		$controllerResponsableCir = new ResponsableCirController(); 
		$controllerResponsableGu = new GuichetUniqueController() ; 
		//statistique nombre demande traitrer par mois
		$liste_mois = getLatestMonth('11'); 
		$tableau_statistiqueNombreDemandeTraiterParMois;
		$tableau_statistiqueNombreDemandeAccepterParMois ;  
		$nombreDeamndePC;
		$nbrDemandeTraiteGu;  
		for ($i=10 ; $i>=0 ; $i--){
			$tableau_statistiqueNombreDemandeTraiterParMois[$i] = $controller->demandeNonAccepterParMois($liste_mois[$i]['month'],$liste_mois[$i]['year'] );
			$tableau_statistiqueNombreDemandeAccepterParMois[$i] = $controller->demandeAccepterParMois($liste_mois[$i]['month'],$liste_mois[$i]['year'] ); 
		}
		$listePoolCompetences = $controllerPoolCompetences->Lister(); 
		$i=0; 
		while ($row = $listePoolCompetences->fetch()){
			$nombreDeamndePC[$i] = $controller->nombreDeamndeTraitePcById($row['ID_PC']); 
			$i++; 
		}
		$listeResponsableCir = $controllerResponsableCir->Lister(); 
		while ($row = $listeResponsableCir->fetch()) {
			$nom = $row['NOM_CIR'] . " ". $row['PRENOM_CIR']; 
			$nbrDemandeTraite[$nom] = $controller->nombreDeamndeTraiteByCirByIdCir($row['ID_CIR'] ); 
		}

		$listeResponsableGu = $controllerResponsableGu->Lister(); 
		while ($row = $listeResponsableGu->fetch()) {
			$nom = $row['NOM_GU'] . " ". $row['PRENOM_GU']; 
			$nbrDemandeTraiteGu[$nom] = $controller->nombreDeamndeTraiteByGuByIdGu($row['ID_GU'] ); 
		}


		$vue = new Vue('dashboard'); 
		$vue->generer(array('nbrDemandeTraiteGu'=>$nbrDemandeTraiteGu, 'nbrDemandeTraite'=>$nbrDemandeTraite, 'nombreDeamndePC'=>$nombreDeamndePC, 'listePc'=>$controllerPoolCompetences->Lister(), 'tableau_statistiqueNombreDemandeAccepterParMois'=>$tableau_statistiqueNombreDemandeAccepterParMois, 'tableau_statistiqueNombreDemandeTraiterParMois'=>$tableau_statistiqueNombreDemandeTraiterParMois, 'liste_mois'=>$liste_mois , 'pourcentageDemanteNonAccepter'=>$controller->pourcentageDemande('Non accepter') ,'pourcentageDemanteEnCours'=>$controller->pourcentageDemande('En cours') , 'pourcentageDemanteEnAttente'=>$controller->pourcentageDemande('En attente') , 'pourcentageDemanteAccepter'=>$controller->pourcentageDemande('Accepter') ,'nombreDeamndeEnAttente'=>$controller->getNombreTotalDemandeStatus('En attente'),'nombreDeamndeNonAccepter'=>$controller->getNombreTotalDemandeStatus('Non accepter'),'nombreDeamndeEncours'=>$controller->getNombreTotalDemandeStatus('En cours'), 'nombreDeamndeAccepter'=> $controller->getNombreTotalDemandeStatus('Accepter')));
	}





	//Startup 
	else if($action == 'declarationStartup'){
		$vue = new Vue('declarationStartup'); 
		$vue->generer(array()); 
	}else if($action == "saveDeclarationStartup"){
		$controller = new StartupController(); 
		$controller->Ajouter($_POST);
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("alert"=>'La déclaration a bien été ajoutée', "statement" => $controller->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code']))); 
	}
	else if($action == "listeDeclarationStartup"){
		$controller = new StartupController(); 
		if(!empty($statut)) $statut = $_GET['statut']; 
		else $statut=null;
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array( "statement" => $controller->Lister($statut))); 
	}
	else if($action == "detailsDeclarationStartup"){ 
		$controller = new StartupController(); 
		$vue = new Vue('detailsDeclarationStartup');
		$controller2 = new BrevetController();
		$vue->generer(array("listePc" => $controller2->getInfoPc(), "statement" => $controller->Details($_GET['id']), "nomAndPrenomDemandeur"=> $controller->getInfoDemandeur($_GET['id']))); 
	}
	else if($action == "deleteDeclarationStartup"){
		$controller = new StartupController(); 
		$controller->Supprimer($_GET['id']); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("alert"=>'La suppression est bien faite', "statement" => $controller->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code'])));
	}
	else if($action =="updateDeclarationStartup"){
		$controller = new StartupController();
		$vue = new Vue('updateDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->Details($_GET['id'])));
	}
	else if($action == "saveUpdateDeclarationStartup"){
		$controller = new StartupController();
		$controller->Update($_POST); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("alert"=>'La mise à jour est bien faite', "statement" => $controller->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code'])));

	}else if($action == "transmettreStartupCir"){
		$controller = new StartupController();
		$controller->TransmettreStartupCir($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array( "alert"=>'Le dessier est bien transmis', "statement" => $controller->Lister('Enattente'))); 
	}else if($action == "transmettreStartupPc"){
		$controller = new StartupController();
		$controller->TransmettreStartupPc($_GET['id_dmd'],$_POST); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array('alert'=>'La demande a été transmise', "statement" => $controller->ListeAccepterParGU())); 
	}else if($action == "RefuserStartupGu"){
		$controller = new StartupController();
		$controller->RefuserStartupGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array( "alert"=>'Le dessier est bien transmis', "statement" => $controller->Lister('Enattente'))); 
	}else if($action == "RefuserStartupCir"){
		$controller = new StartupController();
		$controller->RefuserStartupGu($_GET['id_dmd']);
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array('alert'=>'La demande a été refusée', "statement" => $controller->ListeAccepterParGU())); 		
	}else if($action == "StartupPretes"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->ListePretes()));
	}else if($action =="StartupsAccepterParGU"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->ListeAccepterParGU()));
	}else if($action =="StartupsEncoursCIR"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->Lister('Encours')));
	}else if($action =="AccepterStartupGu"){
		$controller = new StartupController();
		$controller->AccepterStartupGu($_GET['id_dmd']); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array('alert'=>'La demande est acceptée',"statement" => $controller->ListePretes()));
	}
	else if($action == "DemandePretPourCirStartup"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->DemandePretPourCir()));
	}
	else if($action == "decisionFinaleCirStartup"){
		$controller = new StartupController(); 
		$controller->setDecisionFinaleCir($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array('alert'=>'Décision finale bien envoyée', "statement" => $controller->DemandePretPourCir()));
	}
	else if($action == "NouvelleLancementStartupPoolsCompetences"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->NouvelleLancementStartupPoolsCompetences($_SESSION['id_pc']))); 
	}else if($action == "RespPoolCompetenceStartup"){
		$controller = new StartupController(); 
		$controller->setReponsePoolCompetences($_POST['id_dmd'], $_POST['reponseDemande']); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array('alert'=>'Réponse envoyée' , "statement" => $controller->NouvelleLancementStartupPoolsCompetences($_SESSION['id_pc']))); 
	}else if($action =="listeDeclarationStartupClient"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->listeDeclarationStartupClient($_SESSION['type'], $_SESSION['code'])));
	}else if($action == "listeDeclarationStartupClientTraitees"){
		$controller = new StartupController(); 
		$vue = new Vue('listeDeclarationStartup'); 
		$vue->generer(array("statement" => $controller->listeDeclarationStartupClientTraitees($_SESSION['type'], $_SESSION['code'])));
	}

	