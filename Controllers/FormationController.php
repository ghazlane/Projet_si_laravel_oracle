<?php

//require_once 'Requete.php';
require_once ("Models/Formation.php");
require_once ("ManagementRepository/FormationRepository.php");

class FormationController {
   
    private $formationRepository;
    private $formation; 
	
	public function __construct(){
		$this->formationRepository = new FormationRepository();
	}
        
		
	//actions
	public function Ajouter($inputs){
		$this->formation = new Formation($inputs['sujetFormation'],$inputs['themeFormation'],$inputs['nombreParticipants'],$inputs['planFormation'],$inputs['descriptionDeclaration']);  
		$this->formation->setIdDemandeur($_SESSION['code']); 
		$this->formation->setTypeDemandeur($_SESSION['type']); 
		$this->formation->setStatusDemande("En attente"); 
		$this->formation->setDateDemande(date("j-n-Y")); 
		$this->formationRepository->Ajouter($this->formation); 
	}

	public function Lister($statut){
		$statement = $this->formationRepository->Lister($statut); 
		return $statement;
	}

	public function listeDeclarationFormationClient($type_demandeur, $id_demandeur){
		return $this->formationRepository->listeDeclarationFormationClient($type_demandeur, $id_demandeur); 
	}

	public function listeDeclarationFormationClientTraitees($type_demandeur, $id_demandeur){
		return $this->formationRepository->listeDeclarationFormationClientTraitees($type_demandeur, $id_demandeur); 
	}
	
	public function Details($id){
		$row = $this->formationRepository->Details($id); 
		return $row;
	}

	public function Update($inputs){
		
		$this->formation = new Formation($inputs['sujetFormation'],$inputs['themeFormation'],$inputs['nombreParticipants'],$inputs['planFormation'],$inputs['descriptionDeclaration']); 
		$this->formation->setIdDmd($inputs['id_dmd']);
		$this->formationRepository->Update($this->formation); 
	}

	public function Supprimer($id){
		
        $this->formationRepository->Supprimer($id); 
	}

	public function getInfoDemandeur($id_demande){
		return $this->formationRepository->getInfoDemandeur($id_demande); 
	}

	public function getInfoPc(){
   		return $this->formationtionRepository->getInfoPc(); 
	}

	public function TransmettreFormationCir($id){
		$this->formationRepository->TransmettreFormationCir($id); 		
	}
    public function TransmettreFormationPc($id,$select){
        $this->formationRepository->TransmettreFormationPc($id,$select); 
	}

	public function RefuserFormationGu($id){
		$this->formationRepository->RefuserFormationGu($id); 
	}

	public function RefuserFormationCir($id){
        $this->formationRepository->RefuserFormationCir($id); 
	}
	public function ListePretes(){
		return $this->formationRepository->ListePretes(); 
	}

	public function ListeAccepterParGU(){
		return $this->formationRepository->ListeAccepterParGU(); 
	}
	public function ListeAccepterParGUEncours(){
		return $this->formationRepository->ListeAccepterParGUEncours(); 
	}

	public function AccepterFormationGu($id){
		$this->formationRepository->AccepterFormationGu($id); 
	}

	public function DemandePretPourCir(){
		return $this->formationRepository->DemandePretPourCir(); 
	}
	public function setDecisionFinaleCir($id, $decision){
		$this->formationRepository->setDecisionFinaleCir($id, $decision); 
	}

	public function NouvelleLancementFormationPoolsCompetences($id_pc){
		return $this->formationRepository->NouvelleLancementFormationPoolsCompetences($id_pc); 
	}

	public function setReponsePoolCompetences($id_dmd, $reponse){
		$this->formationRepository->setReponsePoolCompetences($id_dmd, $reponse); 
	}
}