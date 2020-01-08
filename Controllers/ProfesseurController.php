<?php 
require_once ("Models/Professeur.php");
require_once ("ManagementRepository/ProfesseurRepository.php");


class ProfesseurController
{
	private $professeurRepository;
    private $professeur;

	public function __construct()
	{
		$this->professeurRepository = new ProfesseurRepository();
	}

	public funCtion Ajouter($inputs){
		$this->professeur = new Professeur($inputs['nom_prof'],$inputs['prenom_prof'],$inputs['date_naissance_prof'],$inputs['email_prof'],$inputs['password_prof'],$inputs['num_aff'],$inputs['telephone_prof']); 
		$this->professeurRepository->Ajouter($this->professeur); 
	}

	public function Lister(){
		return $this->professeurRepository->Lister(); 
	}

	public function Details($code){
		return $this->professeurRepository->Details($code); 
	}

	public function Update($inputs){
		$resultat =  $this->professeurRepository->Details($inputs['code_prof']); 
		$row = $resultat->fetch(); 
		if(isset($inputs['updatePassword'])){
				if($inputs['ancien_password_prof'] == $row['MOT_DE_PASSE_PROF']){
					$password = $inputs['new_password_prof']; 
				}else{
					return false; 
				} 
		}else 
			$password = $row['MOT_DE_PASSE_PROF']; 

		$this->professeur = new Professeur($inputs['nom_prof'],$inputs['prenom_prof'],$inputs['date_naissance_prof'],$row['email_prof'],$password,$inputs['num_aff'],$inputs['telephone_prof']);
		$this->professeur->setCodeProf($row['CODE_PROF']) ; 
		$this->professeurRepository->Update($this->professeur); 
		return true; 
	}

	public funCtion Delete($code){
		$this->professeurRepository->Delete($code);
	}
}