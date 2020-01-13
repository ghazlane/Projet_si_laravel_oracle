<?php
//require_once 'Requete.php';
require_once ("Models/PointNodal.php");
require_once ("ManagementRepository/PointNodalRepository.php");
class PointNodalController {
   
    private $pointNodalRepository;
    private $pointNodal; 
	
	public function __construct(){
		$this->pointNodalRepository = new PointNodalRepository();
	}
        
		
	//actions
	public function Ajouter($inputs){
		$this->pointNodal = new PointNodal($inputs['nom'],$inputs['nb_ense'],$inputs['nb_cher']); 
		$this->pointNodalRepository->Ajouter($this->pointNodal); 
	}

	public function Lister(){
		return $this->pointNodalRepository->Lister(); 
		
	}

	public function Detail($id){
		$row = $this->pointNodalRepository->Rechercher($id); 
		return $row;
	}


	public function Modifier($inputs,$id){
		$this->pointNodal = new PointNodal($inputs['nom'],$inputs['nb_ense'],$inputs['nb_cher']); 
        $this->pointNodalRepository->Modifier($this->pointNodal,$id); 
	}

	public function Supprimer($id){
        $this->pointNodalRepository->Supprimer($id); 
	}

	
}