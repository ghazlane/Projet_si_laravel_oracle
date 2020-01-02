<?php

//require_once 'Requete.php';
require_once ("Models/Invention.php");
require_once ("ManagementRepository/InventionRepository.php");

class InventionController {

   
    private $inventionRepository;
    private $invention; 
	
	public function __construct(){
		$this->inventionRepository = new InventionRepository();
	}
       
	//actions
	public funCtion Ajouter($inputs){
		$this->invention = new Invention($inputs['classement'],$inputs['objetInvention'],$inputs['categorieInvention'],$inputs['descriptionInvention'],$inputs['descriptionDeclaration']); 
		$this->invention->setIdDemandeur(1); 
		$this->invention->setTypeDemandeur("professeur");
		$this->invention->setStatusDemande("En attente"); 
		$this->invention->setDateDemande(date("j-n-Y")); 
		$this->inventionRepository->Ajouter($this->invention); 
	}

	public function Lister(){
		return $this->inventionRepository->Lister(); 
	}

	public function Details($id){
		return $this->inventionRepository->Details($id); 
	}

	public funCtion Delete($id){
		$this->inventionRepository->Delete($id);
	}
	
}
