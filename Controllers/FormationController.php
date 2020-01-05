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
		$this->formation->setIdDemandeur(1); 
		$this->formation->setTypeDemandeur("professeur"); 
		$this->formation->setStatusDemande("En attente"); 
		$this->formation->setDateDemande(date("j-n-Y")); 
		$this->formationRepository->Ajouter($this->formation); 
	}

	public function Lister($statut){
		$statement = $this->formationRepository->Lister($statut); 
		return $statement;
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
}