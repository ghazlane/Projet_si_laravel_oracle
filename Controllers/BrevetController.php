<?php
//require_once 'Requete.php';
require_once ("Models/Brevet.php");
require_once ("ManagementRepository/BrevetRepository.php");
class BrevetController {
   
    private $brevetRepository;
    private $brevet; 
	
	public function __construct(){
		$this->brevetRepository = new BrevetRepository();
	}
        
		
	//actions
	public function Ajouter($inputs){
		$this->brevet = new Brevet($inputs['nomBrevet'],$inputs['categorieBrevet'],$inputs['domaineBrevet'],$inputs['descriptionDeclaration']);  
		$this->brevet->setIdDemandeur(1); 
		$this->brevet->setTypeDemandeur("professeur"); 
		$this->brevetRepository->Ajouter($this->brevet); 
	}
	
}