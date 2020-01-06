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
		$this->brevet->setStatusDemande("En attente"); 
		$this->brevet->setDateDemande(date("j-n-Y")); 
		$this->brevetRepository->Ajouter($this->brevet); 
	}

	public function Lister($statut){
		return $this->brevetRepository->Lister($statut); 
	}

	public function TransmettreBrevetCir($id){
        $this->brevetRepository->TransmettreBrevetCir($id); 
	}

	public function RefuserBrevetGu($id){
        $this->brevetRepository->RefuserBrevetGu($id); 
	}
	
	public function ListePretes(){
		return $this->brevetRepository->ListePretes(); 
	}

	public function getInfoDemandeur($id_demande){
		return $this->brevetRepository->getInfoDemandeur($id_demande); 
	}


	public function Detail($id){
		$row = $this->brevetRepository->Rechercher($id); 
		return $row;
	}

	public function Modifier($inputs,$id){
		
		$this->brevet = new Brevet($inputs['nomBrevet'],$inputs['categorieBrevet'],$inputs['domaineBrevet'],$inputs['descriptionDeclaration']); 
        $this->brevetRepository->Modifier($this->brevet,$id); 
	}

	public function Supprimer($id){
		
        $this->brevetRepository->Supprimer($id); 
	}

	public function AccepterBrevetGu($id){
		$this->brevetRepository->AccepterBrevetGu($id); 
	}
	
}