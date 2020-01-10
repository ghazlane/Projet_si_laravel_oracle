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
		$this->invention->setIdDemandeur($_SESSION['code']); 
		$this->invention->setTypeDemandeur($_SESSION['type']);
		$this->invention->setStatusDemande("En attente"); 
		$this->invention->setDateDemande(date("j-n-Y")); 
		$this->inventionRepository->Ajouter($this->invention); 
	}
	public function Update( $inputs){
		$this->invention = new Invention($inputs['classement'],$inputs['objetInvention'],$inputs['categorieInvention'],$inputs['descriptionInvention'],$inputs['descriptionDeclaration']);
		$this->invention->setIdDmd($inputs['id_dmd']); 
		$this->inventionRepository->Update($this->invention); 
	}

	public function Lister($statut){
		return $this->inventionRepository->Lister($statut); 
	}

	public function getInfoDemandeur($id_demande){
		return $this->inventionRepository->getInfoDemandeur($id_demande); 
	}

	public function getInfoPc(){
   		return $this->inventionRepository->getInfoPc(); 
	}

	public function Details($id){
		return $this->inventionRepository->Details($id); 
	}

	public funCtion Delete($id){
		$this->inventionRepository->Delete($id);
	}

	public funCtion TransmettreInventionCir($id){
		$this->inventionRepository->TransmettreInventionCir($id); 
	}
	public function TransmettreInventionPc($id,$select){
        $this->inventionRepository->TransmettreInventionPc($id,$select); 
	}

	public function DemandePretPourCir(){
		return $this->inventionRepository->DemandePretPourCir(); 
	}
	public function setDecisionFinaleCir($id, $decision){
		$this->inventionRepository->setDecisionFinaleCir($id, $decision); 
	}


	public function RefuserInventionGu($id){
		$this->inventionRepository->RefuserInventionGu($id); 
	}
	public function RefuserInventionCir($id){
        $this->inventionRepository->RefuserInventionCir($id); 
	}

	public funCtion AccepterInventionGu($id){
		$this->inventionRepository->AccepterInventionGu($id); 
	}

	public function ListePretes(){
		return $this->inventionRepository->ListePretes(); 
	}

	public function ListeAccepterParGU(){
		return $this->inventionRepository->ListeAccepterParGU(); 
	}
	public function ListeAccepterParGUEncours(){
		return $this->inventionRepository->ListeAccepterParGUEncours(); 
	}

	public function ListeNouvelleDecalarationInventionRspPoolCompetences($id_pc){
		return $this->inventionRepository->ListeNouvelleDecalarationInventionRspPoolCompetences($id_pc); 
	}

	public function setReponsePoolCompetences($id_dmd, $reponse){
		$this->inventionRepository->setReponsePoolCompetences($id_dmd, $reponse); 
	}
}
