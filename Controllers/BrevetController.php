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

	public function TransmettreBrevetPc($id,$select){
        $this->brevetRepository->TransmettreBrevetPc($id,$select); 
	}

	public function RefuserBrevetGu($id){
        $this->brevetRepository->RefuserBrevetGu($id); 
	}

	public function RefuserBrevetCir($id){
        $this->brevetRepository->RefuserBrevetCir($id); 
	}
	
	public function ListePretes(){
		return $this->brevetRepository->ListePretes(); 
	}

	public function ListeAccepterParGU(){
		return $this->brevetRepository->ListeAccepterParGU(); 
	}
	public function ListeAccepterParGUEncours(){
		return $this->brevetRepository->ListeAccepterParGUEncours(); 
	}

	public function getInfoDemandeur($id_demande){
		return $this->brevetRepository->getInfoDemandeur($id_demande); 
	}

	public function getInfoPc(){
   		return $this->brevetRepository->getInfoPc(); 
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

	public function ListeNouvelleDecalarationBrevetRspPoolCompetences($id_pc){
		return $this->brevetRepository->ListeNouvelleDecalarationBrevetRspPoolCompetences($id_pc); 
	}

	public function setReponsePoolCompetences($id_dmd, $reponse){
		$this->brevetRepository->setReponsePoolCompetences($id_dmd, $reponse); 
	}

	public function DemandePretPourCir(){
		return $this->brevetRepository->DemandePretPourCir(); 
	}
	public function setDecisionFinaleCir($id, $decision){
		$this->brevetRepository->setDecisionFinaleCir($id, $decision); 
	}
	
}