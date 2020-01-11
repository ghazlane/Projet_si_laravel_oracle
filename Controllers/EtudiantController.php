<?php 
require_once ("Models/Etudiant.php");
require_once ("ManagementRepository/EtudiantRepository.php");


class EtudiantController
{
	private $etudiantRepository;
    private $etudiant;

	public function __construct()
	{
		$this->etudiantRepository = new EtudiantRepository();
	}

	public funCtion Ajouter($inputs){
		$this->etudiant = new Etudiant($inputs['nom_et'],$inputs['prenom_et'],$inputs['date_naissance_et'],$inputs['email_et'],$inputs['mot_de_passe_et'],$inputs['etablissement'],$inputs['telephone_et']); 
		$this->etudiantRepository->Ajouter($this->etudiant); 
	}

	public function Lister(){
		return $this->etudiantRepository->Lister(); 
	}

	public function Details($code){
		return $this->etudiantRepository->Details($code); 
	}

	public function Update($inputs){
		$resultat =  $this->etudiantRepository->Details($inputs['code_et']); 
		$row = $resultat->fetch(); 
		if(isset($inputs['updatePassword'])){
				if($inputs['ancien_password_et'] == $row['MOT_DE_PASSE_ET']){
					$password = $inputs['new_password_et']; 
				}else{
					return false; 
				} 
		}else 
			$password = $row['MOT_DE_PASSE_ET']; 

		$this->etudiant = new Etudiant($inputs['nom_et'],$inputs['prenom_et'],$inputs['date_naissance_et'],$row['email_et'],$password,$inputs['etablissement'],$inputs['telephone_et']);
		$this->etudiant->setCodeEt($row['CODE_et']) ; 
		$this->etudiantRepository->Update($this->etudiant); 
		return true; 
	}

	public funCtion Delete($code){
		$this->etudiantRepository->Delete($code);
	}
}