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
		$this->formationRepository->Ajouter($this->formation); 
	}

	public function Lister(){
		$statement = $this->formationRepository->Lister(); 
		return $statement;
	}
	
}