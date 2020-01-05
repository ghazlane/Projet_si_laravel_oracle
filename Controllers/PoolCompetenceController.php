<?php
//require_once 'Requete.php';
require_once ("Models/PoolCompetence.php");
require_once ("ManagementRepository/PoolCompetenceRepository.php");
class PoolCompetenceController {
   
    private $poolCompetenceRepository;
    private $poolCompetence; 
	
	public function __construct(){
		$this->poolCompetenceRepository = new PoolCompetenceRepository();
	}
        
		
	//actions
	public function Ajouter($inputs){
		$this->poolCompetence = new PoolCompetence($inputs['nom'],$inputs['fonctionnalite'],$inputs['date_creation']); 
		$this->poolCompetenceRepository->Ajouter($this->poolCompetence); 
	}

	public function Lister(){
		$statement = $this->poolCompetenceRepository->Lister(); 
		return $statement;
	}

	public function Detail($id){
		$row = $this->poolCompetenceRepository->Rechercher($id); 
		return $row;
	}


	public function Modifier($inputs,$id){
		$this->poolCompetence = new PoolCompetence($inputs['nom'],$inputs['fonctionnalite'],$inputs['date_creation']); 
        $this->poolCompetenceRepository->Modifier($this->poolCompetence,$id); 
	}

	public function Supprimer($id){
        $this->poolCompetenceRepository->Supprimer($id); 
	}

	
}