<?php

//require_once 'Requete.php';
require_once ("Models/Startup.php");
require_once ("ManagementRepository/StartupRepository.php");

class StartupController {
   
    private $startupRepository;
    private $startup; 
	
	public function __construct(){
		$this->startupRepository = new StartupRepository();
	}
        
		
	//actions
	public function Ajouter($inputs){
		$this->startup = new Startup($inputs['lieustartup'],$inputs['servicestartup'],$inputs['mondatstartup'],$inputs['capitalstartup'],$inputs['descriptionDeclaration']);  
		$this->startup->setIdDemandeur($_SESSION['code']); 
		$this->startup->setTypeDemandeur($_SESSION['type']); 
		$this->startup->setStatusDemande("En attente"); 
		$this->startup->setDateDemande(date("j-n-Y")); 
		$this->startupRepository->Ajouter($this->startup); 
	}

	public function Lister($statut){
		$statement = $this->startupRepository->Lister($statut); 
		return $statement;
	}

	public function listeDeclarationStartupClient($type_demandeur, $id_demandeur){
		return $this->startupRepository->listeDeclarationStartupClient($type_demandeur, $id_demandeur); 
	}

	public function listeDeclarationStartupClientTraitees($type_demandeur, $id_demandeur){
		return $this->startupRepository->listeDeclarationStartupClientTraitees($type_demandeur, $id_demandeur); 
	}
	
	public function Details($id){
		$row = $this->startupRepository->Details($id); 
		return $row;
	}

	public function Update($inputs){
		
		$this->startup = new Startup($inputs['lieustartup'],$inputs['servicestartup'],$inputs['mondatstartup'],$inputs['capitalstartup'],$inputs['descriptionDeclaration']); 
		$this->startup->setIdDmd($inputs['id_dmd']);
		$this->startupRepository->Update($this->startup); 
	}

	public function Supprimer($id){
		
        $this->startupRepository->Supprimer($id); 
	}

	public function getInfoDemandeur($id_demande){
		return $this->startupRepository->getInfoDemandeur($id_demande); 
	}

	public function getInfoPc(){
   		return $this->startuptionRepository->getInfoPc(); 
	}

	public function TransmettreStartupCir($id){
		$this->startupRepository->TransmettreStartupCir($id); 		
	}
    public function TransmettreStartupPc($id,$select){
        $this->startupRepository->TransmettreStartupPc($id,$select); 
	}

	public function RefuserStartupGu($id){
		$this->startupRepository->RefuserStartupGu($id); 
	}

	public function RefuserStartupCir($id){
        $this->startupRepository->RefuserStartupCir($id); 
	}
	public function ListePretes(){
		return $this->startupRepository->ListePretes(); 
	}

	public function ListeAccepterParGU(){
		return $this->startupRepository->ListeAccepterParGU(); 
	}
	public function ListeAccepterParGUEncours(){
		return $this->startupRepository->ListeAccepterParGUEncours(); 
	}

	public function AccepterStartupGu($id){
		$this->startupRepository->AccepterStartupGu($id); 
	}

	public function DemandePretPourCir(){
		return $this->startupRepository->DemandePretPourCir(); 
	}
	public function setDecisionFinaleCir($id, $decision){
		$this->startupRepository->setDecisionFinaleCir($id, $decision); 
	}

	public function NouvelleStartupPoolsCompetences($id_pc){
		return $this->startupRepository->NouvelleStartupPoolsCompetences($id_pc); 
	}

	public function setReponsePoolCompetences($id_dmd, $reponse){
		$this->startupRepository->setReponsePoolCompetences($id_dmd, $reponse); 
	}
}